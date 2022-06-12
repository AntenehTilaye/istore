@extends('layouts.front', ['title' => $store->store_name.' - Your Cart','current' => 3])
@section('content')

    <section class="section" style="margin-top: 120px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mycard py-5 text-center">
                    <div class="mycards">
                        <h4>Your Order is Successfully Placed</h4>
                        <h5>and your Order ID is {{ $order->id }}</h5>
                        <h3 class="mt-6">Thank You for Shopping</h3>
                        <a href="/show/{{ $store->store_id }}" class="btn btn-sm btn-upper btn-outline-dark"
                            style="font-size: 0.8rem">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>

    </script>

@endsection
