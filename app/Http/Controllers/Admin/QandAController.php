<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QandA;
use Illuminate\Http\Request;

class QandAController extends Controller
{
    protected $global_header,$search_data;
    public function __construct(){
        $this->global_header = "QandA";
        $this->search_data = [
            'qna_name' => ''
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = QandA::paginate(10);
        return view('admin.Q&A.index', compact('question'))->with ([
            'question' => $question,
            'title' => $this->global_header,
            'search_data' => $this->search_data,

        ]);
    }

    public function search (Request $request)
    {
        $this->search_data = array(
            'qna_name' => $request->get('new_name')
        );


        $question = QandA::when($request->get('qna_name') != '', function ($query) use ($request) {
                    return $query->where('question', 'LIKE', "%{$request->get('qna_name')}%")
                            ->orWhere('answer', 'LIKE', "%{$request->get('qna_name')}%");
                    })->paginate(1);

        $question->appends(array("qna_name" => $request->get('qna_name')));

        return view('admin.Q&A.index')->with([
            'question' => $question,
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
        return view('admin.Q&A.create');
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
            'question'   => 'required',
            'answer' => 'required',
            'status' => 'required',
        ]);
        QandA::create($validated);
        return redirect('admin/qanda')->with('success', 'Questions and Answers created successfully.');

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

        $question = QandA::findOrFail($id);
        return view('admin.Q&A.edit', compact('question'));
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
        $question=QandA::findOrFail($id);
        $validated = $request->validate([
            'question'   => 'required',
            'answer' => 'required',
            'status' => 'required',

        ]);

        $question->question = $validated['question'];
        $question->answer = $validated['answer'];
        $question->status = $validated['status'];

        $question->save();
        return redirect('admin/qanda')->with('success', 'Questions and Answers updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = QandA::findOrFail($id);
        $question->delete();
        return redirect('admin/qanda')->with('success', 'Questions and Answers deleted successfully.');
    }
}
