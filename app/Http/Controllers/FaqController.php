<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFaqRequest;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('admin.faq.index', compact('faqs'));
    }


    public function create()
    {
        return view('admin.faq.create');
    }


    public function store(StoreFaqRequest $request)
    {
        $faq = Faq::create($request->validated());
        return back()->with('success', 'success');
    }



    public function edit(Faq $faq)
    {
        return view('admin.faq.create', compact('faq'));
    }


    public function update(StoreFaqRequest $request, Faq $faq)
    {
        $faq->update($request->validated());
        return back()->with('success', 'success');
    }


    public function destroy(Faq $faq)
    {
        $faq->delete();
        return back()->with('success', 'success');
    }
}
