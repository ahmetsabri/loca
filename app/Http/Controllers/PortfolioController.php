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
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::with('category.ancestorsAndSelf')->latest()->paginate();

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
        $portfolioBasicData = $request->safe();
        // try {

        if ($request->hasFile('brochure')) {
            $brochure = $request->file('brochure')->storePublicly('portfolio/brochures', ['disk' => 'public']);
            $portfolioBasicData = $portfolioBasicData->merge(['brochure_path' => $brochure]);
        }

        $portfolio = Portfolio::create($portfolioBasicData->except('brochure', 'images', 'info', 'features'));

        foreach ($request->images as $image) {
            $path = $image->storePublicly('portfolio/images', ['disk' => 'public']);
            $portfolio->images()->create(['path' => $path]);
        }

        $infos = $request->mapInfo();

        foreach ($infos as $id => $info) {
            $portfolio->infos()->create([
                'info_id' => $id,
                'value' => $info,
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

        $portfolio = $portfolio->load('infos', 'features', 'province', 'town', 'district');

        $provinces = Province::all();

        $users = User::all();

        return view('admin.portfolios.update', compact('portfolio', 'categories', 'infos', 'features', 'provinces', 'users'));
    }

    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        // DB::beginTransaction();
        // try {
        $portfolioBasicData = $request->safe();
        if ($request->hasFile('brochure')) {
            Storage::disk('public')->delete($portfolio->brochure_path ?? '');
            $brochure = $request->file('brochure')->storePublicly('portfolio/brochures', ['disk' => 'public']);
            $portfolioBasicData = $portfolioBasicData->merge(['brochure_path' => $brochure]);
        }

        $portfolio->update($portfolioBasicData->except('brochure', 'images', 'info', 'features'));
        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {
                $path = $image->storePublicly('portfolio/images', ['disk' => 'public']);
                $portfolio->images()->create(['path' => $path]);
            }
        }

        $infos = $request->mapInfo();

        foreach ($infos as $id => $info) {
            $portfolio->infos()->updateOrCreate(['info_id' => $id], [
                'info_id' => $id,
                'value' => $info,
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

    public function removeImage(Portfolio $portfolio, Image $image)
    {
        abort_if($portfolio->id != $image->imageable_id, 404);
        $image->delete();

        return back()->with('success', 'success');
    }

    public function saveFeatures(Portfolio $portfolio, array $features)
    {
        foreach ($features as $feature=>$options) {
            foreach ($options as $option) {
                $portfolio->features()->create([
                    'feature_id' => $feature,
                    'feature_option_id' => $option
                ]);
            }
        }
    }
}
