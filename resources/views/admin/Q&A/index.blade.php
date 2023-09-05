@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        @if (session('success'))
        <div class="alert alert-primary alert-dismissible alert-alt solid fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span>
            </button>
            <strong>Success!</strong> {{ session('success') }}
        </div>
        @endif
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title flex-wrap">
                            <div class="input-group search-area mb-md-0 mb-3">

                                <form action="{{ url('admin/qanda/search') }}" method="post">
                                    @csrf
                                    <div class="mb-3 input-group">
                                        <input type="text" name="qna_name" id="question_answer" class="p-3 form-control" value="{{ $search_data['qna_name'] ?? '' }}">
                                        <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary">
                                    <a class="text-light" href="{{ route('admin.qanda.create') }}">+ New Q&A</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--column-->
                    <div class="col-xl-12 wow fadeInUp" data-wow-delay="1.5s">
                        <div class="table-responsive full-data">
                            <table class="table-responsive-lg table display dataTablesCard student-tab dataTable no-footer" id="example-student">
                                <thead>
                                    <tr>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>Created Date</th>
                                        <th>Updated Date</th>
                                        <th>State</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($question) > 0)
                                <tbody>
                                    @foreach($question as $ans)
                                    <tr>
                                        <td>
                                            <div class="trans-list">
                                                <h4>{{ $ans->question }}</h4>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="trans-list">
                                                <h4>{{ Str::limit($ans->answer, 50, '...') }}</h4>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="date">{{ $ans->created_at }}</div>
                                        </td>
                                        <td>
                                            <h6 class="date">{{ $ans->updated_at }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0">{{ $ans->status ? 'Active' : 'Inactive' }}</h6>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.qanda.destroy', $ans) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-outline-primary btn-xxs" href="{{ route('admin.qanda.edit', $ans) }}">Edit</a>
                                                <button class="btn btn-outline-danger btn-xxs" type="submit">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                                @else
                                <tbody>
                                    <tr>
                                        <td colspan="5" class="text-center"> No Data!</td>
                                    </tr>
                                </tbody>
                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/column-->
                </div>
                <div style="float: right;text-align: right;margin-top: 20px;">
                    {{ $question->links() }}
                </div>
                <div style="margin-top: 20px;">
                    @if ($question->total() > 1)
                    {{ $question->firstItem() }}-{{ $question->lastItem() }}/{{ $question->total() }}
                    @endif
                </div>
            </div>
        </div>
        <!--**********************************
					Footer start
				***********************************-->
    </div>
</div>

@endsection('content')
