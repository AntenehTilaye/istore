@extends('layouts.out', ['title' => 'Login'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3  form-holder" style="margin-top: 45px">
                 <h4 class="form-title">Store Login</h4><hr>
                 <form action="{{ route('store.check') }}" method="post">
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                     <div class="form-group">
                         <label for="email">Email</label>
                         <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                         <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                     </div>
                     <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                         <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                     </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Login</button>
                     </div>
                     <br>
                     <a href="{{ route('store.register') }}">Create new Account</a>
                 </form>
            </div>
        </div>
    </div>
@endsection