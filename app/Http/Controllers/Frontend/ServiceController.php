<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('features', 'subServices.features')->whereNull('parent_id')->get();
        // dd($services);
        return view('frontend.services.index', compact('services'));
    }
}
