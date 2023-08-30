<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    protected $respond;
    public function __construct()
    {
        $this->respond = [
            'active' => "course",
        ];
    }

    public function index()
    {
        $course = Course::all();
        $this->respond['course'] = $course;
        $respond = $this->respond;
        return view('local', compact('respond'));
    }

    public function campus($campus)
    {
        $course = Course::where('campus', $campus)->get();
        $this->respond['course'] = $course;
        $respond = $this->respond;
        return view('local', compact('respond'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($campus, $id)
    {
        $course = Course::with('batches')->where('campus', $campus)->where('id', $id)->first();
        if(empty($course)){
            return redirect()->route('course');
        }
        $this->respond['course'] = $course;
        $respond = $this->respond;
        return view('courseDtil', compact('respond'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
