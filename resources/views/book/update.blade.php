@extends('layout.master')
@section('content')
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Update Book</h3>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!--begin::Form-->
            <form action="{{ url('update_book/'.$book->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <div class="pt-4 text-center">
                            <img class="img-responsive border rounded p-3" src="{{ url('images/'.$book->image) }}" width="150px" alt="">
                        </div>
                        <div class="pt-4 text-center">
                            <h2>{{ $book->title }}</h2>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>ISBN<span class="text-danger">*</span></label>
                            <input type="text" value="{{ $book->isbn }}" name="isbn" class="form-control" placeholder="Enter ISBN" />
                        </div>
                        <div class="col-lg-6">
                            <label>Title<span class="text-danger">*</span></label>
                            <input type="text" value="{{ $book->title }}" name="title" class="form-control" placeholder="Enter Title" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label for="exampleSelect1">Category<span class="text-danger">*</span></label>
                            <select class="form-control" name="category_id" id="exampleSelect1">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" <?php if($book->categories->first()->id == $category->id){ echo"selected"; }?>>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Author</label>
                            <select name="author_id" class="form-control">
                                @foreach($authors as $author)
                                    <option value="{{ $book->author_id }}" <?php if($book->authors->first()->id == $author->id) { echo"selected"; } ?>>{{ $author->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="3">{{ $book->description }}</textarea>
                        </div>
                        <div class="col-lg-6">
                            <label>Quantity</label>
                            <input type="number" value="{{ $book->quanity }}" name="quanity" class="form-control" placeholder="Enter Quantity" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label for="exampleSelect1">Status</label>
                            <select class="form-control" name="status">
                                <option value="1">Active</option>
                                <option value="0">Unactive</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="example-datetime-local-input">Release Date</label>
                            <div class="input-group date" id="kt_datetimepicker_1" data-target-input="nearest">
                                <input type="text" value="{{ date("Y-m-d h:i:s",strtotime($book->release_date)) }}" name="release_date" class="form-control datetimepicker-input" placeholder="Select date &amp; time" data-target="#kt_datetimepicker_1">
                                <div class="input-group-append" data-target="#kt_datetimepicker_1" data-toggle="datetimepicker">
                                    <span class="input-group-text">
                                        <i class="ki ki-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1">Location</label>
                            <input type="text" value="{{ $book->location }}" class="form-control" name="location" placeholder="Location" />
                        </div>
                        <div class="col-lg-6">
                            <label>Image Browse</label>
                            <div></div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary mr-2" type="submit">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
@endsection
@section('script')
    <script src="{{ asset('assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js') }}"></script>
@endsection