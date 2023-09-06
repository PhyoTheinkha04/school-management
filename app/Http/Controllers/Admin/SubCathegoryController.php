<?php

namespace App\Http\Controllers\Admin;

use App\Models\Level;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SubCathegoryController extends Controller
{
    protected $global_header,$search_data;
    public function __construct(){
        $this->global_header = "Sub Category";
        $this->search_data = [
            'sub_name' => ''
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $subcategory = SubCategory::all();
        // $subcategory = DB::table('subcategories')->select('categories.name as catlog_name', 'subcategories.*')
        //     ->leftJoin('categories', 'categories.id', '=', 'subcategories.category_id')
        //     ->get();
        $subcategory = SubCategory::with('categories')->paginate(10);

        return view('admin.subcategory.index')->with([
            'subcategory' => $subcategory,
            'title' => $this->global_header,
            'search_data' => $this->search_data,

        ]);
    }
    public function search (Request $request)
    {
        $this->search_data = array(
            'sub_name' => $request->get('sub_name')
        );


        $subcategory = SubCategory::when($request->get('sub_name') != '', function ($query) use ($request) {
                    return $query->where('name', 'LIKE', "%{$request->get('sub_name')}%")
                            ->orWhere('status', 'LIKE', "%{$request->get('sub_name')}%");
                    })->paginate(10);

        $subcategory->appends(array("sub_name" => $request->get('sub_name')));

        return view('admin.subcategory.index')->with([
            'subcategory' => $subcategory,
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

        $category = Category::all();
        return view('admin.subcategory.create')->with([
            'category' => $category,
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
            'name'        => 'required',
            'status'      => 'required',
            'category_id' => 'required',
        ]);

        Subcategory::create($validated);
        $subcategory = new SubCategory();
        $subcategory->name= $validated['name'];
        $subcategory->status = $validated['status'];
        $subcategory->category_id = $validated['category_id'];
        $subcategory->save();

        return redirect('admin/subcategory')->with('success', 'category created successfully.');
    }


    public function show(Level $level)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::all();
        $subcategory = SubCategory::findOrFail($id);
        return view('admin.subcategory.edit', compact('subcategory','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $subcategory = Subcategory::findOrFail($id);
        $validated = $request->validate([
            'name'   => 'required',
            'status' => 'required',
            'category_id' => 'required',

        ]);

        $subcategory->name = $validated['name'];
        $subcategory->status = $validated['status'];
        $subcategory->category_id = $validated['category_id'];
        $subcategory->save();
        return redirect('admin/subcategory')->with('success', 'Subcategory updated successfully.');
    }


    public function destroy($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        $subcategory->delete();
        return redirect('admin/subcategory')->with('success', 'subcategory deleted successfully.');
    }
}
