@extends('layouts.store_app', ['title' => 'edit category', 'current' => 3])
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-9 offset-md-1" style="margin-top: 45px">
                 <h4 class="form-title">Edit Category</h4><hr>
                 <form action="/store/update_category/{{ $category->id }}" method="post">
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
                        <label for="email">Category Name</label>
                        <input type="text" class="form-control" name="category_name" placeholder="Enter Category Name" value="{{ $category->name }}">
                        <span class="text-danger">@error('category_name'){{ $message }}@enderror</span>
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