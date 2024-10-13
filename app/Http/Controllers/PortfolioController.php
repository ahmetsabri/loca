<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Image;
use App\Models\Info;
use App\Models\Portfolio;
use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::search()->sort()->with('category.ancestorsAndSelf')->latest()->paginate();

        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        $categories = Category::isRoot()->get();

        $infos = Info::all();
        $features = Feature::has('options')->with('options')->get();

        $provinces = Province::all();
        $users = User::where('id', '<>', auth()->id())->get();

        return view('admin.portfolios.create', compact('categories', 'infos', 'features', 'provinces', 'users'));
    }

    public function store(StorePortfolioRequest $request)
    {
        // DB::beginTransaction();
        $portfolioBasicData = $request->safe()->merge(['ad_number'=>random_int(10000000, 1000000000)]);
        // try {

        $portfolio = Portfolio::create($portfolioBasicData->except('images', 'info', 'features'));

        Image::query()->where('token', $request->_token)->update(['imageable_id' => $portfolio->id, 'token' => null]);

        foreach ($request->info as $id => $info) {
            if (is_array($info)) {
                $portfolio->infos()->create([
                    'info_id' => $id,
                    'value' => $info,
                ]);

                continue;
            }
            $portfolio->options()->create([
                'info_id' => $id,
                'value_id' => $info,
            ]);
        }

        $features = $request->features;

        if ($features) {
            $this->saveFeatures($portfolio, $features);
        }

        // DB::commit();
        // } catch (\Throwable $th) {
        //     DB::rollBack();
        //     logger()->error($th->getMessage());

        //     return back()->with('error', 'failed');
        // }

        return back()->with('success', 'success');
    }

    public function show(Portfolio $portfolio)
    {
        //
    }

    public function edit(Portfolio $portfolio)
    {
        $categories = Category::isRoot()->get();
        $infos = Info::all();

        $features = Feature::has('options')->with('options')->get();

        $portfolio = $portfolio->load('options', 'infos', 'features', 'province', 'town', 'district');

        $provinces = Province::all();

        $users = User::all();

        return view('admin.portfolios.update', compact('portfolio', 'categories', 'infos', 'features', 'provinces', 'users'));
    }

    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        // DB::beginTransaction();
        // try {
        $portfolioBasicData = $request->safe();

        $portfolio->update($portfolioBasicData->except('images', 'info', 'features'));

        // $infos = $request->mapInfo();

        foreach ($request->info as $id => $info) {
            if (is_array($info)) {
                $portfolio->infos()->updateOrCreate(['info_id' => $id], [
                    'info_id' => $id,
                    'value' => $info,
                ]);

                continue;
            }

            $portfolio->options()->updateOrCreate(['info_id' => $id], [
                'info_id' => $id,
                'value_id' => $info,
            ]);
        }

        $portfolio->features()->delete();

        $features = $request->features;
        if ($features) {
            $this->saveFeatures($portfolio, $features);
        }

        DB::commit();
        // } catch (\Throwable $th) {
        //     DB::rollBack();

        //     logger()->error($th->getMessage());

        //     return back()->with('error', 'failed');
        // }

        return back()->with('success', 'success');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->infos()->delete();
        $portfolio->features()->delete();
        $portfolio->delete();

        return back()->with('success', 'success');
    }

    public function removeImage(?Portfolio $portfolio, Image $image)
    {
        $image->delete();

        $images = Image::where([
            ['imageable_id', $image->imageable_id],
            ['imageable_type', \App\Models\Portfolio::class],
        ])->when($image->token, function ($query) use ($image) {
            $query->where('token', $image->token);
        })->get();

        return response()->json(compact('images'));
    }

    public function saveFeatures(Portfolio $portfolio, array $features)
    {
        foreach ($features as $feature => $options) {
            foreach ($options as $option) {
                $portfolio->features()->create([
                    'feature_id' => $feature,
                    'feature_option_id' => $option,
                ]);
            }
        }
    }

    public function uploadImages(Request $request)
    {
        $image = $request->input('images');
        $imageParts = explode(';base64,', $image);
        $imageTypeAux = explode('image/', $imageParts[0]);
        $imageType = $imageTypeAux[1];
        $imageBase64 = base64_decode($imageParts[1]);
        $fileName = uniqid().'.'.$imageType;

        Storage::disk('public')->put('portfolio/images/'.$fileName, $imageBase64);
        $path = 'portfolio/images/'.$fileName;

        $lastPortfolioId = $request->id ?? Portfolio::latest()->first()?->id + 1;
        $token = $request->id ? null : csrf_token();
        $image = Image::create([
            'path' => $path,
            'imageable_id' => $lastPortfolioId,
            'token' => $token,
            'imageable_type' => \App\Models\Portfolio::class,
        ]);

        $images = Image::where([
            ['imageable_id', $lastPortfolioId],
            ['token', $token],
            ['imageable_type', \App\Models\Portfolio::class],
        ])->get();

        return response()->json(['images' => $images], 200);
    }

    public function setMain(Image $image)
    {
        $image->update(['is_main' => true]);

        Image::query()->where([
            ['imageable_id', $image->imageable_id],
            ['imageable_type', \App\Models\Portfolio::class],
        ])->when($image->token, function ($query) use ($image) {
            $query->where('token', $image->token);
        })->where('id', '<>', $image->id)
            ->update(['is_main' => false]);

        $images = Image::where([
            ['imageable_id', $image->imageable_id],
            ['imageable_type', \App\Models\Portfolio::class],
        ])->when($image->token, function ($query) use ($image) {
            $query->where('token', $image->token);
        })->get();

        return response()->json(compact('images'));
    }

    public function getImages(Portfolio $portfolio)
    {
        $images = $portfolio->load('images')->images;

        return response()->json(compact('images'));
    }
}
