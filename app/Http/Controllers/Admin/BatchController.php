<?php

namespace App\Http\Controllers\Admin;

use App\Models\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Instructor;

class BatchController extends Controller
{
    protected $global_header, $search_data;
    public function __construct()
    {
        $this->global_header = "Batch";
        $this->search_data = [
            'batch_name' => ''
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $batches =DB::table('batches')->select('courses.title as course_name', 'batches.*')
        // ->leftJoin('courses', 'courses.id', '=', 'batches.course_id')
        // ->get();
        $batches = Batch::with('courses','teacher')->paginate(10);


    return view('admin.batch.index', compact('batches'))->with([
        'batches' => $batches,
        'title' => $this->global_header,
        'search_data' => $this->search_data,
    ]);
    }

    public function search (Request $request)
    {
        $this->search_data = array(
            'batch_name' => $request->get('batch_name')
        );


        $batches = Batch::when($request->get('batch_name') != '', function ($query) use ($request) {
                    return $query->where('name', 'LIKE', "%{$request->get('batch_name')}%")
                            ->orWhere('description', 'LIKE', "%{$request->get('batch_name')}%");
                    })->paginate(1);

        $batches->appends(array("batch_name" => $request->get('batch_name')));

        return view('admin.batch.index')->with([
            'batches' => $batches,
            'title' => $this->global_header,
            'search_data' => $this->search_data,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $teacher =Instructor::all();

        return view('admin.batch.create',compact('courses', 'teacher'));    }

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
            'fees'        => 'required',
            'description' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'status'      => 'required',
            'course_id' => 'required',
            'instructor_id' => 'required',
        ]);


        $batches = new Batch();
        $batches->name = $validated['name'];
        $batches->fees= $validated['fees'];
        $batches->description = $validated['description'];
        $batches->start_at = $validated['start_at'];
        $batches->end_at = $validated['end_at'];
        $batches->status = $validated['status'];
        $batches->course_id = $validated['course_id'];
        $batches->instructor_id = $validated['instructor_id'];

        $batches->save();

        return redirect('admin/batch')->with('success', 'batch created successfully.');
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
        $course = Course::all();
        $teacher = Instructor::all();

        $batches = Batch::findOrFail($id);
        return view('admin.batch.edit', compact('batches','course','teacher'));
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
        $batches = Batch::findOrFail($id);
        $validated = $request->validate([
            'name'        => 'required',
            'fees'        => 'required',
            'description' => 'required',
            'start_at'      => 'required',
            'end_at'      => 'required',
            'status'      => 'required',
            'course_id' => 'required',
            'instructor_id' => 'required',


        ]);

        $batches->name = $validated['name'];
        $batches->fees = $validated['fees'];
        $batches->description = $validated['description'];
        $batches->start_at = $validated['start_at'];
        $batches->end_at = $validated['end_at'];
        $batches->status = $validated['status'];
        $batches->course_id = $validated['course_id'];
        $batches->instructor_id = $validated['instructor_id'];


        $batches->save();
        return redirect('admin/batch')->with('success', 'batch updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $batches = Batch::findOrFail($id);
        $batches->delete();
        return redirect('admin/batch')->with('success', 'batches deleted successfully.');
    }
}
