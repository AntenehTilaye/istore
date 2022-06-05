@extends('layouts.store_app', ['title' => 'Orders', 'current' => 4])
@section('content')
    <div class="container row">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>Ordered By</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Time</th>
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
