<?php

namespace App\Http\Controllers\Api;

use App\Models\Sclass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SclassController extends Controller
{
    public function index()

    {
        $classes = \App\Models\Sclass::latest()->get();
        return response()->json($classes);
    }

    public function store(Request $request)
    {
        $validationData = $request->validate([
            'class_name' => 'required|unique:sclasses',
        ]);

        Sclass::create([
            'class_name' => $request->class_name,
        ]);

        return  response('Data has submitted successfully');
    }
    public function show($id)
    {
        $class = Sclass::find($id);
        return response()->json($class);
    }

    public function update(Request $request, $id)
    {
        $class = Sclass::find($id);
        $class->class_name = $request->class_name;
        $class->save();

        return response('Data has updated successfully');
    }
    public function destroy($id)
    {
        $class = Sclass::find($id);
        $class->delete();

        return response('Data has deleted successfully');
    }
}
