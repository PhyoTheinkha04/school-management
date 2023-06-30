@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Create Sub Category</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">


                            <div class="col-xl-9 col-lg-8">
                                <form action="{{ route('admin.subcategory.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-8 col-sm-8 col-md-8">
                                            <div class="mb-3">
                                                <label for="name" class="form-label text-primary">Subcategory Name<span
                                                        class="required">*</span></label>
                                                <input type="text" name="name" id="name" value="{{ old('name') }}"
                                                    class="form-control col-6">
                                                @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="category_id"
                                                        class="form-label text-primary">Category<span
                                                            class="required">*</span></label>
                                                    <select name="category_id" id="category_id"
                                                        class="form-control col-6">
                                                        <option value="">Select categories</option>
                                                        @foreach ($category as $catlog )

                                                        <option value="{{$catlog->id}}">{{ $catlog->name  }}</option>



                                                        @endforeach


                                                    </select>
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
