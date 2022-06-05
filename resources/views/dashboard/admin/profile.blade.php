@extends('layouts.app', ['title' => 'admin profile', 'current' => 3])
@section('content')
<div class="container bg-white">

    <div class="col-md-6 offset-md-2">
        <div class="mx-3 my-2 mt-3">
                <a href="/admin/{{ $admin->id }}/edit" class="btn btn-outline-dark" data-mdb-ripple-color="dark">Edit</a>
            
        </div>

        <div class="row">
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                    <div class="col-sm-12 mt-2">
                        Profile Picture
                    </div>

                    <div class="col-sm-6  mt-2">
                        <div class="key">
                            Full Name
                        </div>
                        <div class="value">
                            {{ $admin->name }}
                        </div>
                    </div>

                    <div class="col-sm-6  mt-2">
                        <div class="key">
                            Email
                        </div>
                        <div class="value">
                            {{ $admin->email }}
                        </div>
                    </div>

                    <div class="col-sm-6  mt-2">
                        <div class="key">
                            phone
                        </div>
                        <div class="value">
                            {{ $admin->phone == null? 'Not Specified' : $admin->phone }}
                        </div>
                    </div>

                    <div class="col-sm-6  mt-2">
                        <div class="key">
                            Role
                        </div>
                        <div class="value">
                            {{ $admin->role == 1? 'Main Admin' : 'Admin' }}
                        </div>
                    </div>

                    <div class="col-sm-12  mt-2">
                        <div class="key">
                            Address
                        </div>
                        <div class="value">
                            {{ $admin->address == null? 'Not Specified' : $admin->address }}
                        </div>
                    </div>

            
        </div>
    </div>
</div>

@endsection