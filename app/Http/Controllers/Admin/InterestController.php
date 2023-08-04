<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Interestedin;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interests = Interestedin::paginate(10);
        return view('admin.interests.index', compact('interests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.interests.create');
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
            'status'      => 'required',
        ]);

        Interestedin::create($validated);
        return redirect('admin/interests')->with('success', 'interest created successfully.');
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
        $interests = Interestedin::findOrFail($id);
        return view('admin.interests.edit', compact('interests'));
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
        $interests = Interestedin::findOrFail($id);
        $validated = $request->validate([
            'name'        => 'required',
            'status'      => 'required'
        ]);

        $interests->name = $validated['name'];
        $interests->status = $validated['status'];
        $interests->save();
        return redirect('admin/interests')->with('success', 'interests updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $interests = Interestedin::findOrFail($id);
        $interests->delete();
        return redirect('admin/interests')->with('success', 'interest deleted successfully.');
    }
}
