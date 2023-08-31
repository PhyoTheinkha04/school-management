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
                        <div class="flex-wrap page-title">
                            <div class="mb-3 input-group search-area mb-md-0">

                                    <form action="{{ url('admin/category/search') }}" method="post">
                                        @csrf
                                        <div class="mb-3 input-group">
                                            <input type="text" name="category_name" id="category" class="p-3 form-control"
                                                value="{{ $search_data['category_name'] ?? '' }}">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="bi bi-search"></i></button>
                                        </div>
                                    </form>
                            </div>
                            <div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary">
                                    <a class="text-light" href="{{ route('admin.category.create') }}">+ New Category</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--column-->
                    <div class="col-xl-12 wow fadeInUp" data-wow-delay="1.5s">
                        <div class="table-responsive full-data">
                            <table
                                class="table table-responsive-lg display dataTablesCard student-tab dataTable no-footer"
                                id="example-student">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Created Date</th>
                                        <th>Updated Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($category) > 0)
                                <tbody>
                                    @foreach($category as $catlog)
                                    <tr>
                                        <td>
                                            <div class="trans-list">
                                                <h4>{{ $catlog->name }}</h4>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="date">{{ $catlog->created_at }}</div>
                                        </td>
                                        <td>
                                            <h6 class="date">{{ $catlog->updated_at }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0">{{ $catlog->status ? 'Active' : 'Inactive' }}</h6>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.category.destroy', $catlog) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-outline-primary btn-xxs" type="submit"
                                                        class=" dropdown-item"
                                                    href="{{ route('admin.category.edit', $catlog->id) }}">Edit</a>
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
                    {{ $category->links() }}
                </div>
                <div style="margin-top: 20px;">
                    @if ($category->total() > 1)
                    {{ $category->firstItem() }}-{{ $category->lastItem() }}/{{ $category->total() }}
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
