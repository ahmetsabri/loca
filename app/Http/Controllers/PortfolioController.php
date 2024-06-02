<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Image;
use App\Models\Info;
use App\Models\Portfolio;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::paginate();

        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        $categories = Category::with('ancestors')->isLeaf()->hasParent()->get();
        $infos = Info::all();
        $features = Feature::all();

        return view('admin.portfolios.create', compact('categories', 'infos', 'features'));
    }

    public function store(StorePortfolioRequest $request)
    {
        $validatedData = $request->safe();

        $brochure = $request->file('brochure')->storePublicly('portfolio/brochures', ['disk' => 'public']);
        $portfolioBasicData = $validatedData->merge(['brochure_path' => $brochure]);

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

        $features = $request->mapFeatures();

        foreach ($features as $id => $feature) {
            collect($feature)->each(function ($value, $key) use ($id, $portfolio) {
                $portfolio->features()->create([
                    'feature_id' => $id,
                    'value' => $value,
                ]);
            });
        }

        DB::beginTransaction();
        try {
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()->with('error', 'failed');
        }

        return back()->with('success', 'success');
    }

    public function show(Portfolio $portfolio)
    {
        //
    }

    public function edit(Portfolio $portfolio)
    {
        $categories = Category::with('ancestors')->isLeaf()->hasParent()->get();
        $infos = Info::all();
        $features = Feature::all();
        $portfolio = $portfolio->load('infos', 'features');
        return view('admin.portfolios.update', compact('portfolio', 'categories', 'infos', 'features'));
    }

    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        //
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->infos()->delete();
        $portfolio->features()->delete();
        foreach ($portfolio->images as $image) {
            Storage::disk('public')->delete($image->path);
        }
        $portfolio->images()->delete();
        $portfolio->delete();

        return back()->with('success', 'success');
    }

    public function removeImage(Portfolio $portfolio, Image $image)
    {
        abort_if($portfolio->id != $image->imageable_id, 404);
        Storage::disk('public')->delete($image->path);
        $image->delete();
        return back()->with('success', 'success');
    }
}
