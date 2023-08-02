<?php

namespace App\Http\Controllers\Admin;


use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Level;
use App\Models\Tags;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news =DB::table('news')->select('tags.name as newtags_name', 'news.*')
        ->leftJoin('tags', 'tags.id', '=', 'news.tags_id')
        ->get();

    return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tags::all();
        return view('admin.news.create',compact('tags'));
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
            'tags_id' => 'required',

        ]);

        $imagePath = $request->file('image')->store('news_images', 'public');

        $news = new News();
        $news->title = $validated['title'];
        $news->contents = $validated['contents'];
        $news->status = $validated['status'];
        $news->image = $imagePath;
        $news->tags_id = $validated['tags_id'];
        $news->save();
        return redirect('admin/news')->with('success', 'news created successfully.');
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
        $tags = Tags::all();
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news','tags'));
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
        $news = News::findOrFail($id);
        $validated = $request->validate([
            'title'    => 'required',
            'contents' => 'required',
            'status'   => 'required',
            'image'    => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'tags_id' => 'required',
        ]);

        $news = News::findOrFail($id);
        $news->title = $validated['title'];
        $news->contents = $validated['contents'];
        $news->status = $validated['status'];
        $news->tags_id = $validated['tags_id'];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('news_images', 'public');
            $news->image = $imagePath;
        }

        $news->save();

        return redirect()->route('admin.news.index')->with('success', 'News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        if ($news->image && Storage::exists('public/' . $news->image)) {
            Storage::delete('public/' . $news->image);
        }
        $news->delete();
        return redirect('admin/news')->with('success', 'news deleted successfully.');
    }
}
