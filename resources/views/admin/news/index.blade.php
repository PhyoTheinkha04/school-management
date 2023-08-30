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
                        <div class="flex-wrap page-title">
                            <div class="mb-3 input-group search-area mb-md-0">

                            <form action="{{ url('admin/new/search') }}" method="post">
                                    @csrf
                                    <div class="mb-3 input-group">
                                        <input type="text" name="news_name" id="news" class="p-3 form-control" value="{{ $search_data['news_name'] ?? '' }}">
                                        <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                                    </div>
                                </form>
                            </div>

                            <div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary">
                                    <a class="text-light" href="{{ route('admin.new.create') }}">+ Add News</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--column-->
                    <div class="col-xl-12 wow fadeInUp" data-wow-delay="1.5s">
                        <div class="table-responsive full-data">
                            <table class="table table-responsive-lg display dataTablesCard student-tab dataTable no-footer" id="example-student">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Tags Name</th>
                                        <th>Created Date</th>
                                        <th>Updated Date</th>
                                        <th>State</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if(count($news) > 0)
                                <tbody>
                                    @foreach($news as $new)
                                    <tr>
                                        <td>
                                            <div class="trans-list">
                                                <img class="avatar avatar-sm me-3" src="{{ asset('/storage/' . $new->image) }}" alt="Article Image" width="100">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="trans-list">
                                                <h4>{{ $new->title }}</h4>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="trans-list">
                                                <span class="text-primary font-w600">
                                                {{ Str::limit($new->contents, 100, '...') }}
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="trans-list">
                                                <h6 class="mb-0">
                                                    {{ $new->tags->name}}
                                                </h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="date">{{ $new->created_at }}</div>
                                        </td>
                                        <td>
                                            <div class="date">{{ $new->updated_at }}</div>
                                        </td>
                                        <td>
                                            <h6 class="mb-0">{{ $new->status ? 'Active' : 'Inactive' }}</h6>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteConfirmationModalLabel">
                                                                Delete Confirmation</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete this?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                            <form action="{{ route('admin.new.destroy', $new->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="btn btn-outline-primary btn-xxs" type="submit" class="dropdown-item" href="{{ route('admin.new.edit', $new->id) }}">Edit</a>
                                            <button type="button" class="btn btn-outline-danger btn-xxs" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                                Delete
                                            </button>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                                @else
                                <tbody>
                                    <tr>
                                        <td colspan="8" class="text-center"> No Data!</td>
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
                    {{ $news->links() }}
                </div>
                <div style="margin-top: 20px;">
                    @if ($news->total() > 1)
                    {{ $news->firstItem() }}-{{ $news->lastItem() }}/{{ $news->total() }}
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
