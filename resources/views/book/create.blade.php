@extends('layout.master')
@section('content')
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Create Book</h3>
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
            <form action="{{ url('create_book') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>ISBN<span class="text-danger">*</span></label>
                            <input type="text" name="isbn" class="form-control" placeholder="Enter ISBN" />
                        </div>
                        <div class="col-lg-6">
                            <label>Title<span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" placeholder="Enter Title" />
                        </div>
                       
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Category
                            <span class="text-danger">*</span></label>
                            <select class="form-control" name="cat_id" id="exampleSelect1">
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Author</label>
                            <select class="form-control" name="author_id" id="exampleSelect1">
                                <option value="">Select Author</option>
                                @foreach($authors as $author)
                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Description</label>
                            <textarea name="description" class="form-control">
                            </textarea>
                        </div>
                        <div class="col-lg-6">
                            <label>Quantity</label>
                            <input type="number" name="quantity" class="form-control" placeholder="Enter Quantity" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Status
                            <span class="text-danger">*</span></label>
                            <select class="form-control" name="status">
                                <option value="1">Active</option>
                                <option value="0">Unactive</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Release Date</label>
                            <div class="input-group date" id="kt_datetimepicker_1" data-target-input="nearest">
                                <input type="text" name="release_date" class="form-control datetimepicker-input" placeholder="Select date &amp; time" data-target="#kt_datetimepicker_1">
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
                            <label>Location
                            <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="location" placeholder="Location" />
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