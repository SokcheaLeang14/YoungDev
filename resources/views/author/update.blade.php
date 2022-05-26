@extends('layout.master')
@section('content')
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Update Author</h3>
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
            <form action="{{ url('update_author/'.$author->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Name
                        <span class="text-danger">*</span></label>
                        <input type="text" value="{{ $author->name }}" name="name" class="form-control" placeholder="Enter ISBN" />
                    </div>
                    <div class="form-group">
                        <label>Age
                        <span class="text-danger">*</span></label>
                        <input type="text" value="{{ $author->age }}" name="age" class="form-control" placeholder="Enter Title" />
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1">Gender
                        <span class="text-danger">*</span></label>
                        <select class="form-control" name="gender" id="exampleSelect1">
                            <option value="male" <?php if($author->gender == 'male') {echo"checked"; }?>>Male</option>
                            <option value="female" <?php if($author->gender == 'female'){echo"checked";  }?> >Female</option>
                        </select>
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