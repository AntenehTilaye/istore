@extends('layouts.store_app', ['title' => 'profile', 'current' => 0])
@section('content')
<div class="container bg-white">

    <div class="col-md-6 offset-md-2">
        <div class="mx-3 my-2 mt-3">
                <a href="/store/{{ $store->id }}/edit_store" class="btn btn-outline-dark" data-mdb-ripple-color="dark">Edit</a>
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

                    <div class="col-md-12 text-center my-4">
                        @if ($store->logo != null)
                        
                            <img class="form-logo" src="{{ asset('storage/images/'.$store->logo) }}" alt="Store Logo">
                        @else
                        <i class="fa fa-user form-no-logo" aria-hidden="true"></i>

                        @endif
                    </div>

                    <div class="col-sm-12  mt-2">
                        <div class="key">
                            Full Name
                        </div>
                        <div class="value">
                            {{ $store->name }}
                        </div>
                    </div>

                    <div class="col-sm-6  mt-2">
                        <div class="key">
                            Store Email
                        </div>
                        <div class="value">
                            {{ $store->email }}
                        </div>
                    </div>

                    <div class="col-sm-6  mt-2">
                        <div class="key">
                            Phone Number
                        </div>
                        <div class="value">
                            {{ $store->phone }}
                        </div>
                    </div>
                    <div class="col-sm-6  mt-2">
                        <div class="key">
                            Store Name
                        </div>
                        <div class="value">
                            {{ $store->store_name }}
                        </div>
                    </div>
                    <div class="col-sm-6  mt-2">
                        <div class="key">
                            Store Id
                        </div>
                        <div class="value">
                            {{ $store->store_id }}
                        </div>
                    </div>
                    <div class="col-sm-12  mt-2">
                        <div class="key">
                            About the Store
                        </div>
                        <div class="value">
                            {{ $store->store_detail }}
                        </div>
                    </div>
                    <div class="col-sm-12  mt-2">
                        <div class="key">
                            Store Address
                        </div>
                        <div class="value">
                            {{ $store->address }}
                        </div>
                    </div>
                    
            
        </div>
    </div>
</div>

@endsection