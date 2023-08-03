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

                                            <div class="avatar-upload" style="display:flex;flex-direction: column;
                                                                            flex-wrap: nowrap;align-content: center;
                                                                            justify-content: space-around;
                                                                            align-items: center;">
                                                                             <label class="form-label text-primary">Photo<span
                                                    class="required">*</span></label>
                                                <div class="avatar-preview">
                                                    <div id="imagePreview"
                                                        style="background-image: url(/admin/images/no-img-avatar.png);">
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
                                                @error('image')

                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
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
                                            <div class="mb-3">
                                                <label for="tags_id" class="form-label text-primary">Tags<span
                                                        class="required">*</span></label>

                                                <select name="tags_id" id="tags_id" class="form-control">
                                                    <option value="{{ old('tag_id') }}">Select Tags</option>
                                                    @foreach ($tags as $newtags)
                                                    <option value="{{ $newtags->id }}">{{ $newtags->name }}
                                                    </option>
                                                    @endforeach


                                                </select>
                                                @error('$tags_id')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>


                                            <div class="">
                                                <div class="mb-3">
                                                    <label for="contents" class="form-label text-primary">content<span
                                                            class="required">*</span></label>
                                                    <textarea name="contents" id="contents" class="form-control"
                                                        rows="6" value="{{ old('content') }}"></textarea>
                                                    @error('contents')
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
                                            <div class="mt-3">
                                                <a class="btn btn-outline-primary me-3" href="{{ url('admin/news') }}">Back</a>


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
