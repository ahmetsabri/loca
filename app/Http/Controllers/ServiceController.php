<?php

namespace App\Http\Controllers;

use App\Enums\DepartmentType;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Department;
use App\Models\Service;
use Illuminate\Support\Arr;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::whereNull('parent_id')->get();

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(StoreServiceRequest $request)
    {
        $data = $request->safe();

        $service = Service::create($request->safe()->except('sub_services', 'features'));

        foreach ($data->only('features')['features'] as $values) {
            if (! Arr::get($values, 'tr')) {
                continue;
            }
            $service->features()->create([
                'value' => $values,
            ]);
        }

        if (! $request->filled('sub_services')) {
            return back()->with('success', 'success');
        }
        foreach ($data->only('sub_services')['sub_services'] as $subServiceData) {
            $data = collect($subServiceData);
            $subService = $service->subServices()->create($data->except('features')->toArray());
            foreach ($data->only('features')['features'] as $subFeature) {
                if (! Arr::get($subFeature, 'tr')) {
                    continue;
                }
                $subService->features()->create(['value' => $subFeature]);
            }
        }

        return back()->with('success', 'success');
    }

    public function edit(Service $service)
    {
        $departments = Department::get();
        $servie = $service->load('features', 'subServices.features');

        return view('admin.services.edit', compact('service', 'departments'));
    }

    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->safe();

        $service->update($request->safe()->except('sub_services', 'features'));
        $service->features()->delete();
        foreach ($data->only('features')['features'] as $values) {
            if (! Arr::get($values, 'tr')) {
                continue;
            }
            $service->features()->create([
                'value' => $values,
            ]);
        }

        if (! $request->filled('sub_services')) {
            return back()->with('success', 'success');
        }

        $service->subServices()->delete();

        foreach ($data->only('sub_services')['sub_services'] as $subServiceData) {
            $data = collect($subServiceData);
            $subService = $service->subServices()->create($data->except('features')->toArray());

            foreach ($data->only('features')['features'] as $subFeature) {
                if (! Arr::get($subFeature, 'tr')) {
                    continue;
                }

                $subService->features()->create(['value' => $subFeature]);
            }
        }

        return back()->with('success', 'success');
    }

    public function destroy(Service $service)
    {
        $service->subServices()->each(function ($ser) {
            $ser->features()->delete();
            $ser->delete();
        });
        $service->features()->delete();
        $service->delete();

        return back()->with('success', 'success');
    }
}
