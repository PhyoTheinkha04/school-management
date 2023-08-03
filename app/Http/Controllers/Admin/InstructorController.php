<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Instructor::all();
        return view('admin.instructor.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.instructor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required',
            'email'       => 'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status'      => 'required',
            'description' => 'required',

        ]);

        $imagePath = $request->file('image')->store('teacher_images', 'public');

        $teachers = new Instructor();
        $teachers->name = $validated['name'];
        $teachers->email = $validated['email'];
        $teachers->status = $validated['status'];
        $teachers->description = $validated['description'];
        $teachers->image = $imagePath;
        $teachers->save();;
        return redirect('admin/instructor')->with('success', 'teacher created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teachers = Instructor::findOrFail($id);
        return view('admin.instructor.edit', compact('teachers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $teachers = Instructor::findOrFail($id);
        $validated = $request->validate([
            'name'        => 'required',
            'email'       => 'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status'      => 'required',
            'description' => 'required',

        ]);

        $teachers = Instructor::findOrFail($id);
        $teachers->name = $validated['name'];
        $teachers->email = $validated['email'];
        $teachers->status = $validated['status'];
        $teachers->description = $validated['description'];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('teachers_images', 'public');
            $teachers->image = $imagePath;
        }

        $teachers->save();

        return redirect()->route('admin.instructor.index')->with('success', 'teachers updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teachers = Instructor::findOrFail($id);
        $teachers->delete();
        return redirect('admin/instructor')->with('success', 'teacher deleted successfully.');
    }
}
