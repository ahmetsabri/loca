<?php

namespace App\Http\Controllers;

use App\Enums\FormTypeEnum;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubmittedFormController extends Controller
{
    public function index(Request $request)
    {
        $forms = Form::when($request->filled('type'), function ($query) use ($request) {
            $query->where('type', $request->query('type', FormTypeEnum::CONTACT->value));
        })
            ->with('project', 'portfolio')
            ->latest()
            ->paginate(30);

        $types = array_column(FormTypeEnum::cases(), 'value');

        return view('admin.forms.index', compact('forms', 'types'));
    }

    public function destroy(Form $form)
    {
        if ($form->attachment) {
            Storage::disk('public')->delete($form->attachment);
        }
        $form->delete();

        return back()->with('success', 'success');
    }
}
