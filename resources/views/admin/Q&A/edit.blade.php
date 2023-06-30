@extends('admin.layout.master')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Edit Q&A</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-xl-9 col-lg-8">
                                <form action="{{ route('admin.qanda.update', $question->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-xl-8 col-sm-8 col-md-8">
                                            <div class="mb-3">
                                                <label for="question" class="form-label text-primary">Question<span class="required">*</span></label>
                                                <input type="text" name="question" id="question" value="{{ $question->question }}" class="form-control col-6">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="answer" class="form-label text-primary">Answer<span class="required">*</span></label>
                                                    <textarea name="answer" id="answer" class="form-control" rows="6">{{ $question->answer }}</textarea>
                                                    @error('answer')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="col-xl-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="status" class="form-label text-primary">Status<span class="required">*</span></label>
                                                    <select name="status" id="status" class="form-control col-6">
                                                        <option value="1" @if($question->status == 1) selected @endif >Active</option>
                                                        <option value="0" @if($question->status == 0) selected @endif >Inactive</option>
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
