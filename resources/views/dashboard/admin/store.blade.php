@extends('layouts.app', ['title' => 'stores', 'current' => 2])
@section('content')
    <div class="container row">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>Store Owner</th>
                    <th>Store Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stores as $store)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('storage/images/' . $store->logo) }}" class="rounded-circle" alt="Logo"
                                    style="width: 45px; height: 45px" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">{{ $store->name }}</p>
                                    <p class="text-muted mb-0">{{ $store->email }}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">
                                {{ $store->store_name == null ? 'Not Created Yet' : $store->store_name }}</p>

                            <p>
                                <a style="float: left; display: inline;" href="/show/{{ $store->store_id }}"
                                    class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                                    View Store
                                </a>
                            </p>
                        </td>
                        <td>
                            @if ($store->status == 1)
                                <span class="badge badge-success rounded-pill d-inline">
                                    Active
                                </span>
                            @else
                                <span class="badge badge-warning rounded-pill d-inline">
                                    Not Active
                                </span>
                            @endif
                        </td>
                        <td>


                            @if ($store->status == 1)
                                <form style=" float:left; display: inline;"
                                    action="{{ route('admin.deactivate_store', $store->id) }}" method="post">
                                    @csrf
                                    @method('PUT')

                                    <button type="submit" class="btn btn-outline-warning btn-rounded btn-sm fw-bold"
                                        data-mdb-ripple-color="dark">
                                        Deactivate
                                    </button>
                                </form>
                            @else
                                <form style=" float:left; display: inline; margin-left: 10px;"
                                    action="{{ route('admin.activate_store', $store->id) }}" method="post">
                                    @csrf
                                    @method('PUT')

                                    <button type="submit" class="btn btn-outline-indigo btn-rounded btn-sm fw-bold"
                                        data-mdb-ripple-color="dark">
                                        Activate
                                    </button>
                                </form>
                            @endif
                            <form style=" float:left; display: inline"
                                action="{{ route('admin.remove_store', $store->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-rounded btn-sm fw-bold"
                                    data-mdb-ripple-color="dark">
                                    Remove
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="col-12 mt-4">
            {{ $stores->links() }}
        </div>
    </div>
@endsection
