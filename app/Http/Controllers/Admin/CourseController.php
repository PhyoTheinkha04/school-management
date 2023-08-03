<?php

namespace App\Http\Controllers\Admin;

use App\Models\Level;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course =DB::table('courses')->select('levels.name as levels_name', 'courses.*')
        ->leftJoin('levels', 'levels.id', '=', 'courses.level_id')
        ->get();
    return view('admin.course.index', compact('course'));
        // return view('admin.course.index', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = Level::all();
        return view('admin.course.create',compact('levels'));
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
            'title'    => 'required',
            'contents' => 'required',
            'status'   => 'required',
            'image'    => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'level_id' => 'required',

        ]);

        $imagePath = $request->file('image')->store('course_images', 'public');

        $course = new Course();
        $course->title = $validated['title'];
        $course->contents = $validated['contents'];
        $course->status = $validated['status'];
        $course->image = $imagePath;
        $course->level_id = $validated['level_id'];
        $course->save();

        return redirect('admin/course')->with('success', 'course created successfully.');
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
        $levels = Level::all();
        $course = Course::findOrFail($id);
        return view('admin.course.edit', compact('course','levels'));
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

        $course = Course::findOrFail($id);
        $validated = $request->validate([
            'title'    => 'required',
            'contents' => 'required',
            'status'   => 'required',
            'image'    => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'level_id' => 'required',
        ]);

        $course = Course::findOrFail($id);
        $course->title = $validated['title'];
        $course->contents = $validated['contents'];
        $course->status = $validated['status'];
        $course->level_id = $validated['level_id'];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('course_images', 'public');
            $course->image = $imagePath;
        }

        $course->save();

        return redirect()->route('admin.course.index')->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        if ($course->image && Storage::exists('public/' . $course->image)) {
            Storage::delete('public/' . $course->image);
        }
        $course->delete();
        return redirect('admin/course')->with('success', 'Course deleted successfully.');
    }
}
