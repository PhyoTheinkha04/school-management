<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Batch;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batches = Batch::all();
        return view('admin.batch.index', compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.batch.create');
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
            'cost'        => 'required',
            'description' => 'required',
            'status'      => 'required',
        ]);

        Batch::create($validated);
        return redirect('admin/batch')->with('success', 'Level created successfully.');
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
        $batches = Batch::findOrFail($id);
        return view('admin.batch.edit', compact('batches'));
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
            'cost'        => 'required',
            'description' => 'required',
            'status'      => 'required'
        ]);

        $batches->name = $validated['name'];
        $batches->cost = $validated['cost'];
        $batches->description = $validated['description'];
        $batches->status = $validated['status'];
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
