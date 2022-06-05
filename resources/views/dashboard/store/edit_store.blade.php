@extends('layouts.store_app', ['title' => 'edit profile', 'current' => 0])
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-9 offset-md-1" style="margin-top: 45px">
                 <h4 class="form-title">Edit Store Info</h4><hr>
                 <form action="/store/update_store/{{ $store->id }}" method="post"  enctype="multipart/form-data" >
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
                        <div class="col-md-12 text-center my-4">
                            @if ($store->logo != null)
                            
                              <img class="form-logo" src="{{ asset('storage/images/'.$store->logo) }}" alt="Store Logo">
                            @else
                            <i class="fa fa-user form-no-logo" aria-hidden="true"></i>

                            @endif
                        </div>
                    </div>
                     <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ $store->name }}">
                                <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="form-group">
                               <label for="email">Email</label>
                               <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ $store->email }}">
                               <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                           </div>
                         </div>
                     </div>

                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="name">Store Name</label>
                               <input type="text" class="form-control" name="store_name" placeholder="Enter Store name" value="{{ $store->store_name }}">
                               <span class="text-danger">@error('store_name'){{ $message }}@enderror</span>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="email">Store Id</label>
                              <input type="text" class="form-control" name="store_id" placeholder="Enter Store Id" value="{{ $store->store_id }}">
                              <span class="text-danger">@error('store_id'){{ $message }}@enderror</span>
                          </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Store Logo</label>
                        <input type="file" class="form-control" name="logo" placeholder="Enter Store Logo">
                        <span class="text-danger">@error('logo'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="email">About Store</label>
                        <textarea class="form-control" name="store_detail" placeholder="Enter Store Detail">
                            {{ $store->store_detail }}
                        </textarea>
                        <span class="text-danger">@error('store_detail'){{ $message }}@enderror</span>
                    </div>

                     <div class="form-group">
                        <label for="email">Phone</label>
                        <input type="phone" class="form-control" name="phone" placeholder="Enter Phone Number" value="{{ $store->phone }}">
                        <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="email">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Enter address" value="{{ $store->address }}">
                        <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                    </div>
                     
                     <div class="form-group col-md-4">
                         <button type="submit" class="btn btn-outline-dark btn-rounded">Apply Changes</button>
                     </div>
                     <br>
                 </form>
            </div>
        </div>
    </div>

@endsection