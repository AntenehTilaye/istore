@extends('layouts.store_app', ['title' => 'new product', 'current' => 2])
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-9 offset-md-1" style="margin-top: 45px">
                 <h4 class="form-title">Add New Product</h4><hr>
                 
                 <form action="{{ route('store.create_product') }}" enctype="multipart/form-data"  method="post">
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

                    @csrf
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ old('name') }}">
                        <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="email">Product Detail</label>
                        <textarea class="form-control" name="product_detail" placeholder="Enter Product Detail">
                            {{ old('product_detail') }}
                        </textarea>
                        <span class="text-danger">@error('product_detail'){{ $message }}@enderror</span>
                    </div>

                     <div class="form-group">
                        <label for="email">Picture</label>
                        <input type="file" class="form-control" name="picture" placeholder="Enter Product Photo" value="{{ old('picture') }}">
                        <span class="text-danger">@error('picture'){{ $message }}@enderror</span>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Price</label>
                                <input type="text" class="form-control" name="price" placeholder="Enter Product Price" value="{{ old('price') }}">
                                <span class="text-danger">@error('price'){{ $message }}@enderror</span>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Amount</label>
                                <input type="text" class="form-control" name="amount" placeholder="Enter Number of Item" value="{{ old('amount') }}">
                                <span class="text-danger">@error('amount'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        
                        
                        <div class="col-12">
                            
                            <div class="form-group">
                                <label for="email">Category</label>
                                <div class="text-danger">@error('category'){{ $message }}@enderror</div>
                            </div>

                            @foreach ($cats as $cat)
                                <div isSelected = "no" onclick="section_toggle('section_number_{{ $cat->id }}', '{{ $cat->id }}')" id="section_number_{{ $cat->id }}" class="section-not-selected">
                                    {{ $cat->name }}
                                </div>
                            @endforeach

                            <div id="section_input_holder">
                                
                            </div>
                        </div>
                    </div>
                    

                    
                     
                     <div class="form-group col-md-3">
                         <button type="submit" class="btn btn-outline-dark btn-rounded">Add Product</button>
                     </div>
                     <br>
                 </form>
            </div>
        </div>
    </div>

@endsection