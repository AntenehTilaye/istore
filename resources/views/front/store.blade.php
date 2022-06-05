@extends('layouts.front', ['title' => $store->store_name, 'current' => 1])
@section('content')
    <div class="container-sm page-con" style="margin-top: 100px">
        <div class="section2">
            <div class="section-header">
                <h6 class="text-uppercase font-weight-bold">

                    <strong>Top Categories</strong>

                </h6>
            </div>
            <div class="cat-list">
                @foreach ($categorys as $cat)
                    <a class="one-cat" href="/show/{{ $store->store_id }}/{{ $cat->link_name }}">
                        {{ $cat->name }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="section">
            <div class="section-header">
                <h6 class="text-uppercase font-weight-bold">

                    <strong>Latest Products</strong>

                </h6>
            </div>
            <div class="product-list row">
                @foreach ($products as $product)
                    <div class="product col-md-3">
                        <a href="/show/{{ $store->store_id }}/{{ $product->id }}">
                            <img src="{{ asset('storage/images/' . $product->picture) }}" alt="the Image">
                        </a>
                        <div class="title">
                            {{ $product->name }}
                            <i class="fa fa-money" aria-hidden="true"></i>
                            {{ 'Price $' . $product->price }}
                        </div>
                        <div class="actions">

                            <div class="action-btns"
                                onclick="document.getElementById('product{{ $product->id }}').style.display='grid'"><i
                                    class="fa fa-cart-plus" aria-hidden="true"></i>

                                Add to Cart
                            </div>
                            <div class="action-btns" 
                               onclick="add_to_cart('{{ $product->id }}', 1, '{{ url($store->store_id.'/cart') }}')">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                                Buy Now
                            </div>
                        </div>

                        <!-- The Modal -->
                        <div class="model-back" id="product{{ $product->id }}">
                            <div class="model-center">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4>Add To Cart</h4>
                                    <button
                                        onclick="document.getElementById('product{{ $product->id }}').style.display='none'"
                                        type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="email">{{ $product->name }}</label>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="email">Quantity</label>
                                        <input type="number" class="form-control" id="quantity{{ $product->id }}"
                                            placeholder="Enter Quantity" value="1">
                                        <input type="hidden" class="form-control" id="amount{{ $product->id }}"
                                            value="{{ $product->amount }}">
                                    </div>
                                    <div class="form-group">
                                        <span id="error{{ $product->id }}" class="text-danger">
                                            
                                        </span>
                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button onclick="add_to_cart('{{ $product->id }}', 0, 0)" type="button"
                                        class="btn btn-dark" data-dismiss="modal"><i class="fa fa-cart-plus"
                                            aria-hidden="true"></i> Add to Cart
                                    </button>
                                    <button
                                        onclick="document.getElementById('product{{ $product->id }}').style.display='none'"
                                        type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>

        </div>
        <div class="section">
            <div class="section-header">
                <h6 class="text-uppercase font-weight-bold">

                    <strong>Best Selling</strong>

                </h6>
            </div>
            <div class="product-list row">
                @foreach ($products as $product)
                <div class="product col-md-3">
                    <a href="/show/{{ $store->store_id }}/{{ $product->id }}">
                        <img src="{{ asset('storage/images/' . $product->picture) }}" alt="the Image">
                    </a>
                    <div class="title">
                        {{ $product->name }}
                        <i class="fa fa-money" aria-hidden="true"></i>
                        {{ 'Price $' . $product->price }}
                    </div>
                    <div class="actions">

                        <div class="action-btns"
                            onclick="document.getElementById('product{{ $product->id }}').style.display='grid'"><i
                                class="fa fa-cart-plus" aria-hidden="true"></i>

                            Add to Cart
                        </div>
                        <div class="action-btns" 
                           onclick="add_to_cart('{{ $product->id }}', 1, '{{ url($store->store_id.'/cart') }}')">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                            Buy Now
                        </div>
                    </div>

                    <!-- The Modal -->
                    <div class="model-back" id="product{{ $product->id }}">
                        <div class="model-center">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4>Add To Cart</h4>
                                <button
                                    onclick="document.getElementById('product{{ $product->id }}').style.display='none'"
                                    type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="email">{{ $product->name }}</label>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="email">Quantity</label>
                                    <input type="number" class="form-control" id="quantity{{ $product->id }}"
                                        placeholder="Enter Quantity" value="1">
                                    <input type="hidden" class="form-control" id="amount{{ $product->id }}"
                                        value="{{ $product->amount }}">
                                </div>
                                <div class="form-group">
                                    <span id="error{{ $product->id }}" class="text-danger">
                                        
                                    </span>
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button onclick="add_to_cart('{{ $product->id }}', 0, 0)" type="button"
                                    class="btn btn-dark" data-dismiss="modal"><i class="fa fa-cart-plus"
                                        aria-hidden="true"></i> Add to Cart
                                </button>
                                <button
                                    onclick="document.getElementById('product{{ $product->id }}').style.display='none'"
                                    type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
