@extends('layouts.front', ['title' => $store->store_name.' - Your Cart','current' => 3])
@section('content')

    <section class="section" style="margin-top: 120px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (isset($cart_data))
                        @if (Cookie::get('shopping_cart'))
                            @php $total="0" @endphp
                            <div class="shopping-cart ">
                                <div class="shopping-cart-table">
                                    <div class="table-responsive">
                                        <div class="col-md-12 text-right mb-3">
                                            <a href="javascript:void(0)" class="clear_cart font-weight-bold">Clear Cart</a>
                                        </div>
                                        <table class="table  my-auto ">

                                            <tbody class="my-auto">
                                                @foreach ($cart_data as $data)
                                                    <tr class="cartpage">
                                                        <td class="cart-image" style="padding: 0px;">
                                                            <a class="entry-thumbnail" href="javascript:void(0)">
                                                                <img src="{{ asset('storage/images/' . $data['item_image']) }}"
                                                                    width="100px" alt="">
                                                            </a>
                                                        </td>
                                                        <td class="cart-product-name-info">
                                                            <h4 class='cart-product-description text-black text-left'
                                                                style="font-size: 0.95rem;">
                                                                {{ $data['item_name'] }}
                                                            </h4><span class="cart-sub-total-price">Price :
                                                                ${{ number_format($data['item_price'], 2) }}</span>
                                                        </td>
                                                        <input type="hidden" class="product_id"
                                                            value="{{ $data['item_id'] }}">
                                                        <td class="cart-product-quantity" width="130px"
                                                            style="padding: 20px 0px;">
                                                            <div class="input-group quantity">
                                                                <div class="input-group-prepend decrement-btn changeQuantity"
                                                                    style="cursor: pointer">
                                                                    <span class="input-group-text">-</span>
                                                                </div>
                                                                <input type="text" class="qty-input form-control"
                                                                    maxlength="3" max="10"
                                                                    value="{{ $data['item_quantity'] }}">
                                                                <div class="input-group-append increment-btn changeQuantity"
                                                                    style="cursor: pointer">
                                                                    <span class="input-group-text">+</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="cart-product-grand-total">
                                                            <span
                                                                class="cart-grand-total-price">{{ number_format($data['item_quantity'] * $data['item_price'], 2) }}</span>
                                                        </td>
                                                        <td style="font-size: 20px;">
                                                            <button type="button"
                                                                class="delete_cart_data btn shadow-0 btn-close">
                                                                <li class="fa fa-trash-o"></li>
                                                            </button>
                                                        </td>
                                                        @php $total = $total + ($data["item_quantity"] * $data["item_price"]) @endphp
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table><!-- /table -->
                                    </div>
                                </div><!-- /.shopping-cart-table -->
                                <div class="row">

                                    <div class="col-md-8 col-sm-12 estimate-ship-tax mt-4">
                                        <div>
                                        </div>
                                    </div><!-- /.estimate-ship-tax -->

                                    <div class="col-md-4 col-sm-12 mt-4">
                                        <div class="cart-shopping-total">
                                            {{-- <div class="row">
                                                <div class="col-md-6">
                                                    <h6 class="cart-subtotal-name">Subtotal</h6>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6 class="cart-subtotal-price">
                                                        $
                                                        <span
                                                            class="cart-grand-price-viewajax">{{ number_format($total, 2) }}</span>
                                                    </h6>
                                                </div>
                                            </div> --}}
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h6 class="cart-grand-name">Grand Total</h6>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6 class="cart-grand-price">
                                                        $
                                                        <span
                                                            class="cart-grand-price-viewajax">{{ number_format($total, 2) }}</span>
                                                    </h6>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="cart-checkout-btn text-center">

                                                        <div class="btn btn-sm btn-success btn-block checkout-btn" onclick="document.getElementById('order_holder').style.display='block'">
                                                            CHECKOUT</div>

                                                    </div>

                                                </div>

                                                <div class="col-md-7">
                                                    <a href="/show/{{ $store->store_id }}"
                                                        class="btn btn-sm btn-upper btn-outline-dark"
                                                        style="font-size: 0.8rem">Continue Shopping</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="order_holder" style="border: 1px solid rgb(177, 176, 176); margin-top: 50px; display: none;">
                                    <div class="col-md-9 offset-md-1" style="margin-top: 45px">
                                        <h4 class="form-title">Add Your Info</h4>
                                        <hr>

                                        <form action="/order/add_order"
                                            method="post">
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
                                            
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="email">Full Name</label>
                                                        <input type="text" class="form-control" name="name"
                                                            placeholder="Enter Your Full Name"
                                                            value="{{ old('name') }}">
                                                        <span class="text-danger">
                                                            @error('name')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                                <input name="store_id" value="{{ $store->id }}" type="hidden" >
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <label for="email">Phone Number</label>
                                                        <input type="text" class="form-control" name="phone"
                                                            placeholder="Enter Your Phone Number"
                                                            value="{{ old('phone') }}">
                                                        <span class="text-danger">
                                                            @error('phone')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="name">Address</label>
                                                <input type="text" class="form-control" name="address"
                                                    placeholder="Enter Your Address" value="{{ old('address') }}">
                                                <span class="text-danger">
                                                    @error('address')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <button type="submit" class="btn btn-outline-dark btn-rounded">Place Your Order</button>
                                            </div>
                                            <br>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- /.shopping-cart -->
                        @endif
                    @else
                        <div class="row">
                            <div class="col-md-12 mycard py-5 text-center">
                                <div class="mycards">
                                    <h4>Your cart is currently empty.</h4>
                                    <a href="/show/{{ $store->store_id }}" class="btn btn-sm btn-upper btn-outline-dark"
                                        style="font-size: 0.8rem">Continue Shopping</a>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div> <!-- /.row -->
        </div><!-- /.container -->
    </section>

    <script>

    </script>

@endsection
