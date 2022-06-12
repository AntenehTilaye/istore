@extends('layouts.store_app', ['title' => 'Orders', 'current' => 4])
@section('content')
    <div class="container row">
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
        <div class="col-md-5 mx-auto">
            <div class="row">
                <div class="key">Ordered By</div>
                <div class="value">{{ $theOrder->name }}</div>
            </div>
            <div class="row">
                <div class="key">Current Status</div>
                <div class="value">{{ $theOrder->status == 0? 'new' : ($theOrder->status == 1? 'processing' : 'delivered') }}</div>
            </div>

            <div class="row">
                
                <div class="key">Change Status to</div>
                <div class="col-md-5 mx-auto">
                    <form action="{{ route('store.update_order_status', $theOrder->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="1">
                            <button type="submit" class="btn btn-outline-dark btn-rounded btn-sm fw-bold"
                                data-mdb-ripple-color="dark">
                                Processing
                            </button>
                        
                    </form>
                </div>
                    <div class="col-md-5 mx-auto">
                    <form action="{{ route('store.update_order_status', $theOrder->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="status" value="2">
                        <button type="submit" class="btn btn-outline-dark btn-rounded btn-sm fw-bold"
                            data-mdb-ripple-color="dark">
                            Delivered
                        </button>
                    
                    </form>
                    </div>
            </div>
            
        </div>
        <div class="col-md-5 mx-auto">
            
            
            <div class="row">
                <div class="key">Address</div>
                <div class="value">{{ $theOrder->address }}</div>
            </div>
            <div class="row">
                <div class="key">Phone</div>
                <div class="value">{{ $theOrder->phone }}</div>
            </div>
            <div class="row">
                <div class="key">Ordered At</div>
                <div class="value">{{ $theOrder->created_at }}</div>
            </div>
        </div>
        
        
        <table class="table align-middle mb-0 bg-white mt-3">
            <thead class="bg-light">
                <tr>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price (Item)</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ordered as $order)
                    <tr>
                        <td>
                            <img
                            src="{{ asset('storage/images/'.$order->product_image) }}"
                            class="rounded-circle"
                            alt=""
                            style="width: 45px; height: 45px"
                            />
                        </td>
                        <td>
                            <p class="fw-bold mb-1">{{ $order->product_name }}</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{ $order->quantity }}</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{ $order->price }}</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{ $order->price * $order->quantity }}</p>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
      
    </div>
@endsection
