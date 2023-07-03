@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Edit Tags</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-xl-9 col-lg-8">
                                <form action="{{ route('admin.tags.update', $tags->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-xl-8 col-sm-8 col-md-8">
                                            <div class="mb-3">
                                                <label for="name" class="form-label text-primary">Tags Name<span class="required">*</span></label>
                                                <input type="text" name="name" id="name" value="{{ $tags->name }}" class="form-control col-6">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>


                                            <div class="col-xl-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="status" class="form-label text-primary">Status<span class="required">*</span></label>
                                                    <select name="status" id="status" class="form-control col-6">
                                                        <option value="1" @if($tags->status == 1) selected @endif >Active</option>
                                                        <option value="0" @if($tags->status == 0) selected @endif >Inactive</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="">
                                            <button class="btn btn-primary" type="submit">Update</button>
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
