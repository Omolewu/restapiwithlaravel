<?php

namespace App\Http\Controllers\Api;


use App\Models\Section;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectionController extends Controller
{
    public function index()
    {
        if ($subjects = Section::all()) {
            return response()->json($subjects);
        } else {
            return response('No data available');
        }
    }
    public function store(Request $request)
    {
        $validationData = $request->validate([
            'section_name' => 'required|string',
            'class_id' => 'required|numeric',
        ]);

        Section::create([
            'class_id' => $request->class_id,
            'subject_name' => $request->subject_name,

        ]);
        return response("Data submitted successfully");
    }
    public function update(Request $request, $id)
    {
        $request = $request->validate([
             'section_name' => 'required|string',
            'class_id' => 'required|numeric',
        ]);

        Section::findOrFail($id)
            ->update([
                'class_id' => $request->class_id,
                'subject_name' => $request->subject_name,

            ]);
    }
}
