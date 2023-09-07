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
                        <form action="{{ route('admin.batch.store') }}" method="POST">
                            @csrf
                            <div class="col-xl-12 col-sm-12 col-md-12 d-flex">
                                <div class="col-md-6 col-xl-6 col-sm-12 float-left px-2">
                                    <div class="mb-3">
                                        <label for="name" class="form-label text-primary">Batch Name<span class="required">*</span></label>
                                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control col-6">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="fees" class="form-label text-primary">fees<span class="required">*</span></label>
                                        <input type="text" name="fees" id="fees" value="{{ old('fees') }}" class="form-control col-6">
                                        @error('fees')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="">
                                        <div class="mb-3">
                                            <label for="state" class="form-label text-primary">Description<span class="required">*</span></label>
                                            <textarea name="description" id="description" class="form-control" rows="10.5">{{ old('description') }}</textarea>
                                            @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
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
                                </div>
                                <div class="col-md-6 col-xl-6 col-sm-12 float-right px-2">
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
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-1 form-label text-primary">Start Date</p>
                                                <input name="start_at" class="datepicker-default form-control" id="start_at" value="{{ old('start_at') }}">
                                                @error('start_at')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mb-1 form-label text-primary">End Date</p>
                                                <input name="end_at" class="datepicker-default form-control" id="end_at" value="{{ old('end_at') }}">
                                                @error('end_at')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="row">
                                            <label for="days" class="form-label text-primary">Select Days<span class="required">*</span></label>
                                            <div class="col-xl-4 col-xxl-6 col-6">
                                                <div class="form-check custom-checkbox mb-3">
                                                    <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                                    <label class="form-check-label" for="customCheckBox1">Mon</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-xxl-6 col-6">
                                                <div class="form-check custom-checkbox mb-3 checkbox-info">
                                                    <input type="checkbox" class="form-check-input" checked id="customCheckBox2" required>
                                                    <label class="form-check-label" for="customCheckBox2">Tues</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-xxl-6 col-6">
                                                <div class="form-check custom-checkbox mb-3 checkbox-success">
                                                    <input type="checkbox" class="form-check-input" checked id="customCheckBox3" required>
                                                    <label class="form-check-label" for="customCheckBox3">Wed</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-xxl-6 col-6">
                                                <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                    <input type="checkbox" class="form-check-input" checked id="customCheckBox4" required>
                                                    <label class="form-check-label" for="customCheckBox4">Thurs</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-xxl-6 col-6">
                                                <div class="form-check custom-checkbox mb-3 checkbox-danger">
                                                    <input type="checkbox" class="form-check-input" checked id="customCheckBox5" required>
                                                    <label class="form-check-label" for="customCheckBox5">Fri</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-xxl-6 col-6">
                                                <div class="form-check custom-checkbox mb-3 checkbox-danger">
                                                    <input type="checkbox" class="form-check-input" checked id="customCheckBox5" required>
                                                    <label class="form-check-label" for="customCheckBox5">Sat</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-xxl-6 col-6">
                                                <div class="form-check custom-checkbox  checkbox-danger">
                                                    <input type="checkbox" class="form-check-input" checked id="customCheckBox5" required>
                                                    <label class="form-check-label" for="customCheckBox5">Sun</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Default Clock Picker</label>
                                                <div class="input-group clockpicker">
                                                    <input type="text" class="form-control" value="09:30"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Default Clock Picker</label>
                                                <div class="input-group clockpicker">
                                                    <input type="text" class="form-control" value="09:30"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
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
