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

                                    <form action="{{ url('admin/course/search') }}" method="post">
                                        @csrf
                                        <div class="mb-3 input-group">
                                            <input type="text" name="course_name" id="course" class="p-3 form-control"
                                                value="{{ $search_data['course_name'] ?? '' }}">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="bi bi-search"></i></button>
                                        </div>
                                    </form>
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
                                        <th>Levels Name</th>
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
                                                <h6 class="mb-0">{{ $courses->levels->name}}</h6>
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
                <div style="float: right;text-align: right;margin-top: 20px;">
                    {{ $course->links() }}
                </div>
                <div style="margin-top: 20px;">
                    @if ($course->total() > 1)
                    {{ $course->firstItem() }}-{{ $course->lastItem() }}/{{ $course->total() }}
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
