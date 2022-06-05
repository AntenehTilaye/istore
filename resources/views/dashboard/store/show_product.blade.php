@extends('layouts.store_app', ['title' => 'product detail', 'current' => 2])
@section('content')
<div class="container bg-white">

    <div class="col-md-6 offset-md-2">
        <div class="mx-3 my-2 mt-3">
                <a href="/store/{{ $product->id }}/edit" class="btn btn-outline-dark" data-mdb-ripple-color="dark">Edit</a>
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
                        Product Picture
                    </div>

                    <div class="col-sm-6  mt-2">
                        <div class="key">
                            Product Name
                        </div>
                        <div class="value">
                            {{ $product->name }}
                        </div>
                    </div>

                    <div class="col-sm-6  mt-2">
                        <div class="key">
                            Product Detail
                        </div>
                        <div class="value">
                            {{ $product->product_detail }}
                        </div>
                    </div>

                    <div class="col-sm-6  mt-2">
                        <div class="key">
                            Price
                        </div>
                        <div class="value">
                            {{ $product->price }}
                        </div>
                    </div>

                    <div class="col-sm-6  mt-2">
                        <div class="key">
                            Amount
                        </div>
                        <div class="value">
                            {{ $product->amount}}
                        </div>
                    </div>            
        </div>
    </div>
</div>

@endsection