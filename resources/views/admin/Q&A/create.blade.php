@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Create Question and Answer</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-xl-9 col-lg-8">
                                <form action="{{ route('admin.qanda.store') }}" method="POST">
                                    @csrf
                                    <div class="row">

                                        <div class="col-xl-8 col-sm-8 col-md-8">
                                            <div class="mb-3">
                                                <label for="name" class="form-label text-primary">Question<span class="required">*</span></label>
                                                <input type="text" name="question" id="question" value="{{ old('question') }}" class="form-control col-6">
                                                @error('question')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="">
                                                <div class="mb-3">
                                                    <label for="state" class="form-label text-primary">Answer<span class="required">*</span></label>
                                                    <textarea name="answer" id="answer" class="form-control" rows="6">{{ old('answer') }}</textarea>
                                                    @error('answer')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <label class="form-label text-primary">Status<span
                                                    class="required">*</span></label>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check">
                                                    <input value="1" class="form-check-input" type="radio" name="status"
                                                        id="status1" checked="checked">
                                                    <label class="form-check-label font-w500" for="status1">
                                                        Active
                                                    </label>
                                                </div>
                                                <div class="form-check ms-3">
                                                    <input class="form-check-input" type="radio" value="0" name="status"
                                                        id="status">
                                                    <label class="form-check-label font-w500" for="status">
                                                        Inactive
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <a class="btn btn-outline-primary me-3"
                                                href="{{ url('admin/qanda') }}">Back</a>
                                            <button class="btn btn-primary" type="submit">Create</button>
                                        </div>
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
