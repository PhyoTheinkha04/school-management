@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid" >
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

                                    <form action="{{ url('admin/batch/search') }}" method="post">
                                        @csrf
                                        <div class="mb-3 input-group">
                                            <input type="text" name="batch_name" id="batch" class="p-3 form-control"
                                                value="{{ $search_data['batch_name'] ?? '' }}">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="bi bi-search"></i></button>
                                        </div>
                                    </form>
                            </div>

                            <div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary">
                                    <a class="text-light" href="{{ route('admin.batch.create') }}">+ New Batches</a>
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
                                        <th>cost</th>
                                        <th>Description</th>
                                        <th>Course Name</th>
                                        <th>Instructor Name</th>
                                        <th>Created Date</th>
                                        <th>Updated Date</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>State</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($batches) > 0)
                                <tbody>
                                    @foreach($batches as $batch)

                                    <tr>
                                        <td>
                                            <div class="trans-list">
                                                <h4>{{ $batch->name }}</h4>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="trans-list">
                                                <h4>{{ $batch->cost }}</h4>
                                            </div>
                                        </td>
                                        {{-- <h6 class="mb-0"> @php
                                                $description = $teacher->description;
                                                $limitedDescription = implode(' ', array_slice(explode(' ',
                                                $description), 0, 10));
                                                echo $limitedDescription . (str_word_count($description) > 10 ? '...' :
                                                '');
                                                @endphp</h6> --}}
                                         <td>
                                            <div class="trans-list">
                                                <h4>{{ $batch->description}}</h4>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class="mb-0">{{ $batch->courses->title ?? '-'}}</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0">{{ $batch->teacher->name ?? '-' }}</h6>
                                        </td>
                                        <td>
                                            <div class="date">{{ $batch->created_at }}</div>
                                        </td>
                                        <td>
                                            <div class="date">{{ $batch->updated_at }}</div>
                                        </td>
                                        <td>
                                            <div class="datetime">{{ $batch->start_at }}</div>
                                        </td>
                                        <td>
                                            <div class="datetime">{{ $batch->end_at }}</div>
                                        </td>

                                        <td>
                                            <h6 class="mb-0">{{ $batch->status ? 'Active':'Inactive' }}</h6>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.batch.destroy', $batch->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <a class="btn btn-outline-primary btn-xxs mr-2"
                                                    href="{{ route('admin.batch.edit', $batch->id) }}">Edit</a>

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
                                        <td colspan="11" class="text-center"> No Data!</td>
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
                    {{ $batches->links() }}
                </div>
                <div style="margin-top: 20px;">
                    @if ($batches->total() > 1)
                    {{ $batches->firstItem() }}-{{ $batches->lastItem() }}/{{ $batches->total() }}
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
