<?php

namespace App\Http\Controllers\Api;

use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class subjectController extends Controller
{
    public function index()
    {
        if ($subjects = Subject::all()) {
            return response()->json($subjects);
        } else {
            return response('No data available');
        }
    }
    public function store(Request $request)
    {
        $validationData = $request->validate([
            'subject_name' => 'required|string',
            'subject_code' => 'required|string',
            'class_id' => 'required|numeric',
        ]);

        Subject::create([
            'class_id' => $request->class_id,
            'subject_code' => $request->subject_code,
            'subject_name' => $request->subject_name,

        ]);
        return response("Data submitted successfully");
    }
    public function update(Request $request, $id)
    {
        $request = $request->validate([
            'subject_name' => 'required|string',
            'subject_code' => 'required|string',
            'class_id' => 'required|numberic',
        ]);

        Subject::findOrFail($id)
            ->update([
                'class_id' => $request->class_id,
                'subject_code' => $request->subject_code,
                'subject_name' => $request->subject_name,

            ]);
    }
}
