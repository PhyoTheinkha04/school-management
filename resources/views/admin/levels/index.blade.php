@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        @if (session('success'))
        <div class="alert alert-primary alert-dismissible alert-alt solid fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i
                        class="fa-solid fa-xmark"></i></span>
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
                                <input type="text" class="form-control" placeholder="Search here...">
                                <span class="input-group-text"><a href="javascript:void(0)">
                                        <svg width="15" height="15" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5605 15.4395L13.7527 11.6317C14.5395 10.446 15 9.02625 15 7.5C15 3.3645 11.6355 0 7.5 0C3.3645 0 0 3.3645 0 7.5C0 11.6355 3.3645 15 7.5 15C9.02625 15 10.446 14.5395 11.6317 13.7527L15.4395 17.5605C16.0245 18.1462 16.9755 18.1462 17.5605 17.5605C18.1462 16.9747 18.1462 16.0252 17.5605 15.4395V15.4395ZM2.25 7.5C2.25 4.605 4.605 2.25 7.5 2.25C10.395 2.25 12.75 4.605 12.75 7.5C12.75 10.395 10.395 12.75 7.5 12.75C4.605 12.75 2.25 10.395 2.25 7.5V7.5Z"
                                                fill="#01A3FF" />
                                        </svg>
                                    </a></span>
                            </div>
                            <div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <a class="text-light" href="{{ route('admin.levels.create') }}">+ New Level</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--column-->
                    <div class="col-xl-12 wow fadeInUp" data-wow-delay="1.5s">
                        <div class="table-responsive full-data">
                            <table
                                class="table-responsive-lg table display dataTablesCard student-tab dataTable no-footer"
                                id="example-student">
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
                                            <h6 class="date">{{ $level->updated_at }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0">{{ $level->status ? 'Active' : 'Inactive' }}</h6>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="deleteConfirmationModal" tabindex="-1"
                                                role="dialog" aria-labelledby="deleteConfirmationModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteConfirmationModalLabel">
                                                                Delete Confirmation</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        Are you sure you want to delete this?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <form
                                                                action="{{ route('admin.levels.destroy', $level->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="btn btn-outline-primary btn-xxs" type="submit"
                                                class="dropdown-item"
                                                href="{{ route('admin.levels.edit', $level->id) }}">Edit</a>
                                            <button type="button" class="btn btn-outline-danger btn-xxs"
                                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
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
            </div>
        </div>
        <!--**********************************
					Footer start
				***********************************-->
    </div>
</div>

@endsection('content')
