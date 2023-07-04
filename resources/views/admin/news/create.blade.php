@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Create news</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-xl-9 col-lg-8">
                                <form action="{{ route('admin.news.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4">
                                            <label clas s="form-label text-primary">Photo<span
                                                    class="required">*</span></label>
                                            <div class="avatar-upload">
                                                <div class="avatar-preview">
                                                    <div id="imagePreview"
                                                        style="background-image: url(/admin/images/no-img-avatar.png);"></div>
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
                                                <label for="titile" class="form-label text-primary">Title<span
                                                        class="required">*</span></label>
                                                <input type="text" name="title" id="title" value="{{ old('title') }}"
                                                    class="form-control col-6">
                                                @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="">
                                                <div class="mb-3">
                                                    <label for="contents" class="form-label text-primary">content<span
                                                            class="required">*</span></label>
                                                    <textarea name="contents" id="contents" class="form-control"
                                                        rows="6">{{ old('content') }}</textarea>
                                                    @error('contents')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="status" class="form-label text-primary">Status<span
                                                            class="required">*</span></label>
                                                    <select name="status" id="status" class="form-control col-6">
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
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
