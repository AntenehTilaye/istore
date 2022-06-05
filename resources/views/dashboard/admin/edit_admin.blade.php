@extends('layouts.app', ['title' => 'edit admin', 'current' => 3])
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-9 offset-md-1" style="margin-top: 45px">
                 <h4 class="form-title">Edit Admin Info</h4><hr>
                 <form action="/admin/update/{{ $admin->id }}" method="post">
                    @method('PUT')
                    @csrf
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
                     <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ $admin->name }}">
                                <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                               <label for="email">Email</label>
                               <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ $admin->email }}">
                               <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                           </div>
                         </div>
                     </div>

                     <div class="form-group">
                        <label for="email">Phone</label>
                        <input type="phone" class="form-control" name="phone" placeholder="Enter Phone Number" value="{{ $admin->phone }}">
                        <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="email">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Enter address" value="{{ $admin->address }}">
                        <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-group">
                        
                    </div>
                     
                     <div class="form-group col-md-2">
                         <button type="submit" class="btn btn-outline-dark btn-rounded">Add Admin</button>
                     </div>
                     <br>
                 </form>
            </div>
        </div>
    </div>

@endsection