@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Create levels</h5>
                    </div>
                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>


                        @endforeach
                    </ul>
                    @endif
                    <div class="card-body">
                        <div class="row">

                            <div class="col-xl-9 col-lg-8">
                                <form action="{{ route('levels.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6 col-sm-6">
                                            <div class="mb-3">
                                                <label for="levelname" class="form-label text-primary">Level Name<span
                                                        class="required">*</span></label>
                                                <input type="text" name="levelname" id="levelname"
                                                    value="{{ old('levelname') }}" class="form-control" required
                                                    placeholder="James">
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="state"
                                                        class="form-label text-primary">State<span
                                                            class="required">*</span></label>
                                                    <select name="state" id="state" class="form-control" required>
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="state" class="form-label text-primary">Description<span
                                                            class="required">*</span></label>
                                                    <textarea name="description" id="description" class="form-control"
                                                        required>{{ old('description') }}</textarea>

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
