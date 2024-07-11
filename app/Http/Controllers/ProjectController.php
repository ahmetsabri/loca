<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Flat;
use App\Models\Image;
use App\Models\Project;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(20);

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $provinces = Province::all();

        return view('admin.projects.create', compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->safe();

        $projectData = $this->extractProjectData($data);
        $flatsData = $this->extractFlatsData($data);
        $transportations = $this->mapFeatures($data->transportaion);
        $siteFeatures = $this->mapFeatures($data->site_feature);
        $features = $this->mapFeatures($data->features ?? []);

        $project = Project::create($projectData);

        $this->attachFeatures($project, $features);
        $this->attachSiteFeatures($project, $siteFeatures);
        $this->attachTransportations($project, $transportations);
        $this->attachFlats($project, $flatsData);

        Image::query()->where('token', $request->_token)->update(['imageable_id'=>$project->id,'token'=>null]);

        return back()->with('success', 'success');
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data = $request->safe();
        $projectData = $this->extractProjectData($data);
        $flatsData = $this->extractFlatsData($data);
        $transportations = $this->mapFeatures($data->transportaion);
        $siteFeatures = $this->mapFeatures($data->site_feature);
        $features = $this->mapFeatures($data->features ?? []);

        $project->update($projectData);

        $this->attachFeatures($project, $features);
        $this->attachSiteFeatures($project, $siteFeatures);
        $this->attachTransportations($project, $transportations);
        $this->attachFlats($project, $flatsData);
        $this->attachImages($project, $data->images ?? []);

        return back()->with('success', 'success');
    }

    public function attachImages(Project $project, array $images)
    {
        foreach ($images as $image) {
            $path = $image->storePublicly('projects/images', ['disk' => 'public']);
            $project->images()->create(['path' => $path]);
        }
    }

    private function extractProjectData($data)
    {
        return $data->except('flats', 'transportaion', 'features', 'images', 'brochure', 'site_feature');
    }

    private function extractFlatsData($data)
    {
        return $data->only('flats')['flats'];
    }

    private function storeBrochure($brochure)
    {
        return $brochure->storePublicly('projects/brochures', ['disk' => 'public']);
    }

    private function attachFeatures(Project $project, array $features)
    {
        $project->features()->delete();
        foreach ($features as $feature) {
            $project->features()->create(['value' => $feature]);
        }
    }

    private function attachSiteFeatures(Project $project, array $siteFeatures)
    {
        $project->siteFeatures()->delete();

        foreach ($siteFeatures as $siteFeature) {
            $project->features()->create(['value' => $siteFeature, 'is_site' => true]);
        }
    }

    private function attachTransportations(Project $project, array $transportations)
    {
        $project->transportations()->delete();
        foreach ($transportations as $transportaion) {
            $project->transportations()->create([
                'name' => [
                    'tr' => $transportaion['tr'],
                    'ru' => $transportaion['ru'],
                    'en' => $transportaion['en'],
                ],
                'duration' => $transportaion['duration'],
                'distance' => $transportaion['distance'],
            ]);
        }
    }

    private function attachFlats(Project $project, array $flatsData)
    {
        $project->flats()->each(function ($flat) {
            $flat->features()->delete();
            $flat->delete();
        });

        foreach ($flatsData as $flatData) {
            $flat = $project->flats()->create(Arr::except($flatData, 'features'));
            $features = $this->mapFeatures(Arr::get($flatData, 'features', []));
            $this->attachFlatFeatures($flat, $features);
        }
    }

    private function attachFlatFeatures($flat, array $features)
    {
        foreach ($features as $feature) {
            if (! Arr::get($feature, 'tr')) {
                continue;
            }
            $flat->features()->create(['value' => $feature]);
        }

        return back()->with('success', 'success');
    }

    public function show(Project $project)
    {
        //
    }

    public function edit(Project $project)
    {
        $provinces = Province::all();

        $project = $project->load(
            'province',
            'town',
            'district',
            'features',
            'siteFeatures',
            'transportations',
            'flats.features',
            'images'
        );

        return view('admin.projects.edit', compact('project', 'provinces'));
    }

    public function destroy(Project $project)
    {
        $project->features()->delete();
        $project->siteFeatures()->delete();
        $project->delete();

        return back()->with('success', 'success');
    }

    public function mapFeatures(array $features)
    {
        $allFilled = array_filter($features, function ($feature) {
            return Arr::get($feature, 'tr') && Arr::get($feature, 'ru') && Arr::get($feature, 'en');
        });

        $onlyTurkish = array_filter($features, function ($feature) {
            return Arr::get($feature, 'tr') && (! Arr::get($feature, 'ru') && ! Arr::get($feature, 'en'));
        });

        foreach ($onlyTurkish as $index => $feature) {
            $onlyTurkish[$index]['ru'] = $onlyTurkish[$index]['en'] = $onlyTurkish[$index]['tr'];
        }

        return $allFilled + $onlyTurkish;
    }

    public function removeImage(Image $image)
    {
        $image->delete();

        $images = Image::where([
                ['imageable_id', $image->imageable_id],
                ['imageable_type', \App\Models\Project::class],
            ])->when($image->token, function ($query) use ($image) {
                $query->where('token', $image->token);
            })->get();

        return response()->json(compact('images'));
    }

    public function removeFlat(Project $project, Flat $flat)
    {
        abort_if($project->id != $flat->project_id, 404);
        $flat->features()->delete();
        $flat->delete();

        return back()->with('success', 'success');
    }

        public function uploadImages(Request $request)
        {
            $image = $request->input('images');
            $imageParts = explode(';base64,', $image);
            $imageTypeAux = explode('image/', $imageParts[0]);
            $imageType = $imageTypeAux[1];
            $imageBase64 = base64_decode($imageParts[1]);
            $fileName = uniqid().'.'.$imageType;

            Storage::disk('public')->put('project/images/'.$fileName, $imageBase64);
            $path = 'project/images/'.$fileName;

            $lastProjectId = $request->id ?? Project::latest()->first()?->id + 1;
            $token =  $request->id ? null : csrf_token();
            $image = Image::create([
                'path' => $path,
                'imageable_id' =>  $lastProjectId,
                'token' => $token,
                'imageable_type' => \App\Models\Project::class,
            ]);

            $images = Image::where([
                ['imageable_id', $lastProjectId],
                ['token', $token],
                ['imageable_type', \App\Models\Project::class],
            ])->get();

            return response()->json(['images' => $images], 200);
        }

    public function setMain(Image $image)
    {
        $image->update(['is_main' => true]);
        Image::query()->where([
            ['imageable_id', $image->imageable_id],
            ['imageable_type', \App\Models\Project::class],
        ])->when($image->token, function ($query) use ($image) {
            $query->where('token', $image->token);
        })->where('id', '<>', $image->id)
        ->update(['is_main' => false]);


        $images = Image::where([
            ['imageable_id', $image->imageable_id],
            ['imageable_type', \App\Models\Project::class],
        ])->when($image->token, function ($query) use ($image) {
            $query->where('token', $image->token);
        })->get();

        return response()->json(compact('images'));
    }

    public function getImages(Project $project)
    {
        $images = $project->load('images')->images;
        return response()->json(compact('images'));
    }
}
