<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Study;
use Illuminate\Support\Facades\Validator;

class StudyController extends Controller
{
    public function index(Study $study)
    {
        return Inertia::render(
            'Study', 
            [
                'data' => $study->latest()->get()
            ]
        );
    }

    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'sync' => ['required'],
        ])->validate();
  
        if ($request->has('id')) {
            Study::find($request->input('id'))->update($request->all());
            return redirect()->back()
                    ->with('message', 'Study Updated Successfully.');
        }
    }
}
