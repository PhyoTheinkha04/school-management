<?php
namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index()
    {
        $levels = Level::all();
        return view('admin.levels.index', compact('levels'));
    }

    public function create()
    {
        return view('admin.levels.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'levelname'   => 'required',
            'description' => 'required',
        ]);

        Level::create($validatedData);

        return redirect()->route('levels.index')->with('success', 'Level created successfully.');
    }

    public function show(Level $level)
    {
        return view('levels.show', compact('level'));
    }

    public function edit(Level $level)
    {
        return view('levels.edit', compact('level'));
    }

    public function update(Request $request, Level $level)
    {
        $validatedData = $request->validate([
            'levelname'   => 'required',
            'description' => 'required',
        ]);

        $level->update($validatedData);

        return redirect()->route('levels.index')->with('success', 'Level updated successfully.');
    }

    public function destroy(Level $level)
    {
        $level->delete();

        return redirect()->route('levels.index')->with('success', 'Level deleted successfully.');
    }
}
