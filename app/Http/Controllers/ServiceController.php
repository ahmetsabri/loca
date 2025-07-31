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

        // Prepare data for service creation, including uploaded image paths
        $serviceData = $data->except('sub_services', 'features', 'top_right_image', 'top_left_image', 'bottom_right_image', 'bottom_middle_image', 'bottom_left_image');

        // Handle file uploads for images
        $imageFields = ['top_right_image', 'top_left_image', 'bottom_right_image', 'bottom_middle_image', 'bottom_left_image'];
        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                // Store the file in 'public/services' directory with a unique name
                $path = $file->store('services', 'public');
                // Add the path to service data
                $serviceData[$field] = $path;
            }
        }

        // Create the service
        $service = Service::create($serviceData);

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


        $serviceData = $data->except('sub_services', 'features', 'top_right_image', 'top_left_image', 'bottom_right_image', 'bottom_middle_image', 'bottom_left_image');

        // Handle file uploads for images
        $imageFields = ['top_right_image', 'top_left_image', 'bottom_right_image', 'bottom_middle_image', 'bottom_left_image'];
        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                if ($service->$field) {
                    \Storage::disk('public')->delete($service->$field);
                }
                // Store new image
                $file = $request->file($field);
                $path = $file->store('services', 'public');
                $serviceData[$field] = $path;
            }
        }

        // Update the service
        $service->update($serviceData);


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
