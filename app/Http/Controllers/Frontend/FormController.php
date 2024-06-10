<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\StoreContactFormRequest;
use App\Http\Requests\StoreJobFormRequest;
use App\Http\Requests\StorePortfolioFormRequest;
use App\Http\Requests\StoreProjectFormRequest;
use App\Models\Form;

use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::paginate();

        return view('admin.forms.index', compact('forms'));
    }

    public function storeContactForm(StoreContactFormRequest $request)
    {
        Form::create($request->validated());

        return back()->with('success', 'success');
    }

    public function storeProjectForm(StoreProjectFormRequest $request)
    {
        Form::create($request->validated());

        return back()->with('success', 'success');
    }

    public function storePortfolioForm(StorePortfolioFormRequest $request)
    {
        Form::create($request->validated());

        return back()->with('success', 'success');
    }
    public function storeJobForm(StoreJobFormRequest $request)
    {
        $attachment = $request->file('attachment')->store('jobs/cv', ['disk' => 'public']);
        Form::create($request->safe()->merge(compact('attachment'))->toArray());

        return back()->with('success', 'success');
    }
}
