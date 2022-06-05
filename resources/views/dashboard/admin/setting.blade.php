@extends('layouts.app', ['title' => 'setting', 'current' => 0])
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-6 offset-md-2" style="margin-top: 45px">
                 <h4 class="form-title">Change Password</h4><hr>
                 <form action="/admin/changepass/{{ $admin->id }}" method="post">
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

                    <div class="form-group">
                        <label for="password">Old Password</label>
                        <input type="password" class="form-control" name="oldpassword" placeholder="Enter Old Password" >
                        <span class="text-danger">@error('oldpassword'){{ $message }}@enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter New Password" >
                        <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                       <label for="cpassword">Confirm New Password</label>
                       <input type="password" class="form-control" name="cpassword" placeholder="Enter confirm New Password">
                       <span class="text-danger">@error('cpassword'){{ $message }}@enderror</span>
                   </div>

                    <div class="form-group col-md-4">
                        <button type="submit" class="btn btn-outline-dark btn-rounded">Apply Change</button>
                    </div>
                     <br>
                 </form>
            </div>
        </div>
    </div>

@endsection