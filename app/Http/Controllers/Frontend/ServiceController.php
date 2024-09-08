<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('features', 'subServices.features')
        ->whereNull('parent_id')
        ->whereNotIn('id', [17,18])
        ->get();

        $footerAServices = Service::with('features', 'subServices.features')->where('id', 17)->first();
        $footerBServices = Service::with('features', 'subServices.features')->where('id', 18)->first();
        return view('frontend.services.index', compact('services', 'footerAServices', 'footerBServices'));
    }
}
