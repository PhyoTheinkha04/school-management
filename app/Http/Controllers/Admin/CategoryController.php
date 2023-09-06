<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $global_header,$search_data;
    public function __construct()
    {
        $this->global_header = "Category";
        $this->search_data = [
            'category_name' => ''
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $category = Category::paginate(10);
        return view('admin.category.index')->with([
            'category' => $category,
            'title' => $this->global_header,
            'search_data' => $this->search_data,

        ]);

    }
    public function search (Request $request)
    {
        $this->search_data = array(
            'category_name' => $request->get('category_name')
        );


        $category = Category::when($request->get('category_name') != '', function ($query) use ($request) {
                    return $query->where('name', 'LIKE', "%{$request->get('category_name')}%")
                            ->orWhere('status', 'LIKE', "%{$request->get('category_name')}%");
                    })->paginate(10);

        $category->appends(array("category_name" => $request->get('category_name')));

        return view('admin.category.index')->with([
            'category' => $category,
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
        return view('admin.category.create')->with([
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
        Category::create($validated);
        return redirect('admin/category')->with('success', 'Category created successfully.');

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
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
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
        $category =Category::findOrFail($id);
        $validated = $request->validate([
            'name'   => 'required',
            'status' => 'required'
        ]);

        $category->name = $validated['name'];
        $category->status = $validated['status'];
        $category->save();
        return redirect('admin/category')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('admin/category')->with('success', 'Category deleted successfully.');
    }
}
