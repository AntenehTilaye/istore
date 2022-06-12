@extends('layouts.store_app', ['title' => 'edit product', 'current' => 2])
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-9 offset-md-1" style="margin-top: 45px">
                <h4 class="form-title">Edit A Product</h4>
                <hr>

                <form action="/store/update_product/{{ $product->id }}" enctype="multipart/form-data" method="post">
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
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter full name"
                            value="{{ $product->name }}">
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="email">Product Detail</label>
                        <textarea class="form-control" name="product_detail" placeholder="Enter Product Detail">
                            {{ $product->product_detail }}
                        </textarea>
                        <span class="text-danger">
                            @error('product_detail')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="email">Picture</label>
                        <input type="file" class="form-control" name="picture" placeholder="Enter Product Photo">
                        <span class="text-danger">
                            @error('picture')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Price</label>
                                <input type="text" class="form-control" name="price" placeholder="Enter Product Price"
                                    value="{{ $product->price }}">
                                <span class="text-danger">
                                    @error('price')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Amount</label>
                                <input type="text" class="form-control" name="amount" placeholder="Enter Number of Item"
                                    value="{{ $product->amount }}">
                                <span class="text-danger">
                                    @error('amount')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">                                
                        
                        <div class="col-12">
                            
                            <div class="form-group">
                                <label for="email">Category</label>
                                <div class="text-danger">@error('category'){{ $message }}@enderror</div>
                            </div>

                            <?php $thisCats = array(); ?>
                            @foreach ($product_cats as $cat)
                                <?php array_push($thisCats, $cat->categoryId) ?>
                            @endforeach

                            @foreach ($cats as $cat)
                                <div isSelected = "{{ in_array($cat->id, $thisCats)? 'yes' : 'no' }}" onclick="section_toggle('section_number_{{ $cat->id }}', '{{ $cat->id }}')" id="section_number_{{ $cat->id }}" class="section-not-selected {{ in_array($cat->id, $thisCats)? 'section-selected' : '' }}">
                                    {{ $cat->name }}
                                </div>
                            @endforeach

                            <div id="section_input_holder">
                                @foreach ($product_cats as $cat)
                                    <input type="hidden" name="category[]" id = "input_section_number_{{ $cat->categoryId }}" value = "{{ $cat->categoryId }}" required>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="form-group col-md-4 mt-2">
                        <button type="submit" class="btn btn-outline-dark btn-rounded">Apply Changes</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
@endsection
