@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Edit Instructors</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-9 col-lg-8">
                                <form action="{{ route('admin.instructor.update', $teachers->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4">
                                            <label class="form-label text-primary">Photo<span
                                                    class="required">*</span></label>
                                            <div class="avatar-upload" style="display:flex;
                                                                            flex-direction: column;
                                                                            flex-wrap: nowrap;
                                                                            align-content: center;
                                                                            justify-content: space-around;
                                                                            align-items: center;">
                                                <div class="avatar-preview">
                                                    <div id="imagePreview"
                                                        style="background-image: url( /storage/{{$teachers->image}});">
                                                    </div>
                                                </div>
                                                <div class="change-btn mt-2 mb-lg-0 mb-3">
                                                    <input type="file" name="image" id="image"
                                                        onchange="previewImage(event)" class="form-control d-none"
                                                        accept=".png, .jpg, .jpeg">
                                                    <label for="image"
                                                        class="dlab-upload mb-0 btn btn-primary btn-sm">Choose
                                                        File</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-sm-8 col-md-8">
                                            <div class="mb-3">
                                                <label for="name" class="form-label text-primary">Name<span
                                                        class="required">*</span></label>
                                                <input type="text" name="name" id="name" value="{{ $teachers->name }}"
                                                    class="form-control col-6">
                                                @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                             <div class="mb-3">
                                                <label for="email" class="form-label text-primary">email<span
                                                        class="required">*</span></label>
                                                <input type="text" name="email" id="email" value="{{ $teachers->email }}"
                                                    class="form-control col-6">
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="discription" class="form-label text-primary">Description<span
                                                        class="required">*</span></label>
                                                <textarea name="description" id="description" class="form-control"
                                                    rows="6">{{ $teachers->description }}</textarea>
                                                @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <label class="form-label text-primary">Status<span
                                                    class="required">*</span></label>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check">
                                                    <input value="1" class="form-check-input" type="radio" name="status"
                                                        id="status1" {{ $teachers->status == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label font-w500" for="status1">
                                                        Active
                                                    </label>
                                                </div>
                                                <div class="form-check ms-3">
                                                    <input class="form-check-input" type="radio" value="0" name="status"
                                                        id="status" {{ $teachers->status == 0 ? 'checked' : '' }}>
                                                    <label class="form-check-label font-w500" for="status">
                                                        Inactive
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <a class="btn btn-outline-primary me-3" href="{{ url('admin/instructor') }}">Back</a>

                                                <button class="btn btn-primary" type="submit">Create</button>
                                            </div>
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
