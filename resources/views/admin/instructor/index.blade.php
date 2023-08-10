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

                                    <form action="{{ url('admin/instructor/search') }}" method="post">
                                        @csrf
                                        <div class="mb-3 input-group">
                                            <input type="text" name="instructor_name" id="nstructor" class="p-3 form-control"
                                                value="{{ $search_data['instructor_name'] ?? '' }}">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="bi bi-search"></i></button>
                                        </div>
                                    </form>
                            </div>
                            <div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary">
                                    <a class="text-light" href="{{ route('admin.instructor.create') }}">+ Add
                                        Indtructor</a>
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
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Description</th>
                                        <th>Created Date</th>
                                        <th>Updated Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if(count($teachers)>0)
                                <tbody>
                                    @foreach($teachers as $teacher)
                                    <tr>
                                        <td>
                                            <div class="trans-list">
                                                <img class="avatar avatar-sm me-3" src="{{ asset('/storage/' . $teacher->image) }}" alt="Article Image" width="100">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="trans-list">
                                                <h4>{{ $teacher->name }}</h4>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="trans-list">
                                                <h4>{{ $teacher->email}}</h4>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="mb-0"><span class="text-primary font-w600"> @php
                                                    $description = $teacher->description;
                                                    $limitedDescription = implode(' ', array_slice(explode(' ',
                                                    $description), 0, 10));
                                                    echo $limitedDescription . (str_word_count($description) > 10 ? '...' :
                                                    '');
                                                    @endphp</span></h6>
                                        </td>

                                        <td>
                                            <div class="date">{{ $teacher->created_at }}</div>
                                        </td>
                                        <td>
                                            <div class="date">{{ $teacher->updated_at }}</div>
                                        </td>
                                        <td>
                                            <h6 class="mb-0">{{ $teacher->status ? 'Active' : 'Inactive' }}</h6>
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
                                                            <form action="{{ route('admin.instructor.destroy', $teacher->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="btn btn-outline-primary btn-xxs" type="submit" class="dropdown-item" href="{{ route('admin.instructor.edit', $teacher->id) }}">Edit</a>
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
                                    {{ $teachers->links() }}
                                </div>
                                <div style="margin-top: 20px;">
                                    @if ($teachers->total() > 1)
                                    {{ $teachers->firstItem() }}-{{ $teachers->lastItem() }}/{{ $teachers->total() }}
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
