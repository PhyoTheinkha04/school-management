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
                                <form action="{{ url('admin/levels/search') }}" method="post">
                                    @csrf
                                    <div class="mb-3 input-group">
                                        <input type="text" name="level_name" id="level" class="p-3 form-control" value="{{ $search_data['level_name'] ?? '' }}">
                                        <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <a class="text-light" href="{{ route('admin.levels.create') }}">+ New Level</a>
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
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Created Date</th>
                                        <th>Updated Date</th>
                                        <th>State</th>
                                        <th>Actions</th>


                                    </tr>
                                </thead>
                                @if(count($levels) > 0)
                                <tbody>
                                    @foreach($levels as $level)
                                    <tr>
                                        <td>
                                            <div class="trans-list">
                                                <h4>{{ $level->name }}</h4>
                                            </div>
                                        </td>

                                        <td><span class="text-primary font-w600"> @php
                                                $description = $level->description;
                                                $limitedDescription = implode(' ', array_slice(explode(' ',
                                                $description), 0, 10));
                                                echo $limitedDescription . (str_word_count($description) > 10 ? '...' :
                                                '');
                                                @endphp</span></td>

                                        <td>
                                            <div class="date">{{ $level->created_at }}</div>
                                        </td>
                                        <td>
                                            <div class="date">{{ $level->updated_at }}</div>
                                        </td>
                                        <td>
                                            <h6 class="mb-0">{{ $level->status ? 'Active' : 'Inactive' }}</h6>
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
                                                            <form action="{{ route('admin.levels.destroy', $level->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="btn btn-outline-primary btn-xxs" type="submit" class="dropdown-item" href="{{ route('admin.levels.edit', $level->id) }}">Edit</a>
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
                                        <td colspan="6" class="text-center"> No Data!</td>
                                    </tr>
                                </tbody>
                                @endif
                            </table>
                        </div>
                    </div>
                    <!--/column-->
                </div>
                <div style="float: right;text-align: right;margin-top: 20px;">
                    {{ $levels->links() }}
                </div>
                <div style="margin-top: 20px;">
                    @if ($levels->total() > 1)
                    {{ $levels->firstItem() }}-{{ $levels->lastItem() }}/{{ $levels->total() }}
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
