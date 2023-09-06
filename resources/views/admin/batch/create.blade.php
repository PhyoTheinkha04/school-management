@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Create Batches</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-9 col-lg-8">
                                <form action="{{ route('admin.batch.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-8 col-sm-8 col-md-8">
                                            <div class="mb-3">
                                                <label for="name" class="form-label text-primary">Batch Name<span class="required">*</span></label>
                                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control col-6">
                                                @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="cost" class="form-label text-primary">cost<span class="required">*</span></label>
                                                <input type="text" name="cost" id="cost" value="{{ old('cost') }}" class="form-control col-6">
                                                @error('cost')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="">
                                                <div class="mb-3">
                                                    <label for="state" class="form-label text-primary">Description<span class="required">*</span></label>
                                                    <textarea name="description" id="description" class="form-control" rows="6">{{ old('description') }}</textarea>
                                                    @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="course_id" class="form-label text-primary">Courses<span class="required">*</span></label>
                                                <select name="course_id" id="course_id" class="form-control">
                                                    <option value="">Select Course</option>
                                                    @foreach ($courses as $newcourses)
                                                    <option value="{{ $newcourses->id }}">{{ $newcourses->title }}
                                                    </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="instructor_id" class="form-label text-primary">Instructors<span class="required">*</span></label>
                                                <select name="instructor_id" id="instructor_id" class="form-control">
                                                    <option value="">Select Instructor</option>
                                                    @foreach ($teacher as $newteacher)
                                                    <option value="{{ $newteacher->id }}">{{ $newteacher->name }}
                                                    </option>
                                                    @endforeach

                                                </select>
                                            </div>


                                            <div class="mb-3 col-xl-4">
                                                <div class="example">
                                                    <p class="mb-1">Date Range Pick</p>
                                                    <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015">
                                                </div>
                                            </div>

                                            <div class="mb-3 col-xl-4">
                                                <div class="example">
                                                    <p class="mb-1">Date Range Pick</p>
                                                    <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015">
                                                </div>
                                            </div>

                                        </div>

                                        <label class="form-label text-primary">Status<span class="required">*</span></label>
                                        <div class="d-flex align-items-center">
                                            <div class="form-check">
                                                <input value="1" class="form-check-input" type="radio" name="status" id="status" checked="checked">
                                                <label class="form-check-label font-w500" for="status">
                                                    Active
                                                </label>
                                            </div>
                                            <div class="form-check ms-3">
                                                <input class="form-check-input" type="radio" value="0" name="status" id="status1">
                                                <label class="form-check-label font-w500" for="status1">
                                                    Inactive
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <a class="btn btn-outline-primary me-3" href="{{ url('admin/batch') }}">Back</a>
                                        <button class="btn btn-primary" type="submit">Create</button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
