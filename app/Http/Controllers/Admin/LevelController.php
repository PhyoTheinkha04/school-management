<?php

namespace App\Http\Controllers\Admin;

use App\Models\Level;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LevelController extends Controller
{
    protected $global_header, $search_data;
    public function __construct()
    {
        $this->global_header = "Levels";
        $this->search_data = [
            'level_name' => ''
        ];
    }

    public function index()
    {
        $levels = Level::paginate(10);
        return view('admin.levels.index')->with([
            'levels' => $levels,
            'title' => $this->global_header,
            'search_data' => $this->search_data,
        ]);
    }

    public function search (Request $request)
    {
        $this->search_data = array(
            'level_name' => $request->get('level_name')
        );


        $levels = Level::when($request->get('level_name') != '', function ($query) use ($request) {
                    return $query->where('name', 'LIKE', "%{$request->get('level_name')}%")
                            ->orWhere('description', 'LIKE', "%{$request->get('level_name')}%");
                    })->paginate(10);

        $levels->appends(array("level_name" => $request->get('level_name')));

        return view('admin.levels.index')->with([
            'levels' => $levels,
            'title' => $this->global_header,
            'search_data' => $this->search_data,
        ]);
    }

    public function create()
    {
        return view('admin.levels.create')->with([
            'title' => $this->global_header,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'   => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        Level::create($validated);
        return redirect('admin/levels')->with('success', 'Level created successfully.');

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
        $level = Level::findOrFail($id);
        return view('admin.levels.edit', compact('level'));
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
        $level = Level::findOrFail($id);
        $validated = $request->validate([
            'name'   => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        $level->name = $validated['name'];
        $level->description = $validated['description'];
        $level->status = $validated['status'];
        $level->save();
        return redirect('admin/levels')->with('success', 'Level updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $level = Level::findOrFail($id);
        $level->delete();
        return redirect('admin/levels')->with('success', 'Level deleted successfully.');
    }
}
