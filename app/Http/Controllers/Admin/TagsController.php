<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    protected $global_header,$search_data;
    public function __construct() {
        $this->global_header = "Tags";
        $this->search_data = [
            'level_name' => ''
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tags::paginate(1);
        return view('admin.tags.index')->with([
            'tags' => $tags,
            'title' => $this->global_header,
            'search_data' => $this->search_data,

        ]);
    }
    public function search (Request $request)
    {
        $this->search_data = array(
            'tags_name' => $request->get('tags_name')
        );


        $tags = Tags::when($request->get('tags_name') != '', function ($query) use ($request) {
                    return $query->where('name', 'LIKE', "%{$request->get('tags_name')}%")
                            ->orWhere('status', 'LIKE', "%{$request->get('tags_name')}%");
                    })->paginate(1);

        $tags->appends(array("tags_name" => $request->get('tags_name')));

        return view('admin.tags.index')->with([
            'tags' => $tags,
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
        return view('admin.tags.create')->with([
            'title' => $this->global_header,
        ]);

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
            'name'   => 'required',
            'status' => 'required',
        ]);
        Tags::create($validated);
        return redirect('admin/tags')->with('success', 'Tags created successfully.');
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
        $tags =Tags::findOrFail($id);
        return view('admin.tags.edit', compact('tags'));
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
        $tags =Tags::findOrFail($id);
        $validated = $request->validate([
            'name'   => 'required',
            'status' => 'required'
        ]);

        $tags->name = $validated['name'];
        $tags->status = $validated['status'];
        $tags->save();
        return redirect('admin/tags')->with('success', 'Tags updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tags =Tags::findOrFail($id);
        $tags->delete();
        return redirect('admin/tags')->with('success', 'Tags deleted successfully.');
    }
}
