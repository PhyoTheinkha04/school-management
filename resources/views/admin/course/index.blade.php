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
                                <button type="button" class="btn btn-primary">
                                    <a  class="text-light" href="{{ route('admin.course.create') }}">+ New Courses</a>
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
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Levels_Name</th>
                                        <th>Created Date</th>
                                        <th>Updated Date</th>

                                        <th>State</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if(count($course) > 0)
                                    <tbody>
                                        @foreach($course as $courses)
                                        <tr>
                                            <td>
                                                <div class="trans-list">
                                                   <img class="avatar avatar-sm me-3" src="{{ asset('/storage/' . $courses->image) }}" alt="Article Image" width="100">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="trans-list">
                                                    <h4>{{ $courses->title }}</h4>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="trans-list">
                                                    <h4>{{ $courses->contents }}</h4>
                                                </div>
                                            </td>
                                            <td>
                                                <h6 class="mb-0">{{ $courses->levels_name}}</h6>
                                            </td>
                                            <td>
                                                <div class="date">{{ $courses->created_at }}</div>
                                            </td>
                                            <td>
                                                <div class="date">{{ $courses->updated_at }}</div>
                                            </td>

                                            <td>
                                                <h6 class="mb-0">{{ $courses->status ? 'Active' : 'Inactive' }}</h6>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.course.destroy', $courses->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <a class="btn btn-outline-primary btn-xxs mr-2"
                                                        href="{{ route('admin.course.edit', $courses->id) }}">Edit</a>

                                                        <button class="btn btn-outline-danger btn-xxs"
                                                        type="submit">Delete</button>
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
            </div>
        </div>
        <!--**********************************
					Footer start
				***********************************-->
    </div>
</div>

@endsection('content')
