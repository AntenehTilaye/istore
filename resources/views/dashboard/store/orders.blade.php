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
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>Ordered By</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Date & Time</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        
                        <td>
                            <p class="fw-bold mb-1">{{ $order->name }}</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{ $order->address }}</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{ $order->phone }}</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{ $order->created_at }}</p>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{ $order->status == 0? 'new' : ($order->status == 1? 'processing' : 'delivered') }}</p>
                        </td>
                        <form action="{{ route('store.destory_order', $order->id) }}" method="post">
                            <td>
                                <a href="/store/{{ $order->id }}/detail"
                                    class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    view
                                </a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-outline-danger btn-rounded btn-sm fw-bold"
                                    data-mdb-ripple-color="dark">
                                    Remove
                                </button>
                            </td>
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
@endsection
