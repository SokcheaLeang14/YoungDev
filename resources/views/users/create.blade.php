@extends('layout.master')
@section('content')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Create User</h3>
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
                @if (Session::has('message'))
                    <h1 class="alert alert-danger">{{ Session::get('message') }}</h1>
                @endif
                <!--begin::Form-->
                <form action="{{ url('/users/create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Username
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Username" required name="username"
                                value="{{ old('username') }}" />
                            <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                        </div>
                        <div class="form-group">
                            <label>Email address
                                <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="Enter email" name="email" required
                                value="{{ old('email') }}" autofocus autocomplete="email" />
                            <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                        </div>
                        <div class="my-2">
                            @if (Session::has('status'))
                                <p class="alert alert-danger">{{ Session::get('status') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password
                                <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                                name="password" required value="{{ old('password') }}" autofocus
                                autocomplete="current-password" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password
                                <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Confirm Password" name="confirm" required value="{{ old('confirm') }}"
                                autofocus autocomplete="current-password" />
                        </div>
                        <div class="form-group">
                            <label for="Telephone">Telephone
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="Telephone" placeholder="Telephone"
                                name="telephone" required value="{{ old('telephone') }}" autocomplete="mobile"
                                autofocus />
                        </div>
                        <div class="form-group">
                            <label for="Image">Image
                                <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="Image" placeholder="Telephone" name="image"
                                required value="{{ old('image') }}" />
                        </div>
                        <div class="form-check mb-1">
                            <input type="checkbox" name="status" id="status" class="form-check-input" value="1">
                            <label for="status" class="form-check-label">
                                Status
                                <span class="text-danger">*</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="admin" id="isadmin" class="form-check-input" value="1">
                            <label for="isadmin" class="form-check-label">
                                Admins
                                <span class="text-danger">*</span>
                            </label>
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
