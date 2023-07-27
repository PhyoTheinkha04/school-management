@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Create Interest</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-xl-9 col-lg-8">
                                <form action="{{ route('admin.interests.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-8 col-sm-8 col-md-8">
                                            <div class="mb-3">
                                                <label for="name" class="form-label text-primary">Interested In<span
                                                        class="required">*</span></label>
                                                <input type="text" name="name" id="name" value="{{ old('name') }}"
                                                    class="form-control col-6">
                                                @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <label class="form-label text-primary">Status<span
                                                    class="required">*</span></label>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check">
                                                    <input value="0" class="form-check-input" type="radio" name="status"
                                                        id="status" checked="checked">
                                                    <label class="form-check-label font-w500" for="flexCheckDefault">
                                                        Active
                                                    </label>
                                                </div>
                                                <div class="form-check ms-3">
                                                    <input class="form-check-input" type="radio" value="1" name="status"
                                                        id="status">
                                                    <label class="form-check-label font-w500" for="flexCheckDefault1">
                                                        Inactive
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <button class="btn btn-outline-primary me-3"><a
                                                    href="{{ url('admin/interests') }}">Back</a></button>
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
