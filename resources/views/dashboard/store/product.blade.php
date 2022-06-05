@extends('layouts.store_app', ['title' => 'products', 'current' => 2])
@section('content')
    <div class="container row">
      <div class="mx-3 my-2 mt-3">
        <div class="col-6">
            <a href="{{ route('store.newproduct') }}" class="btn btn-outline-dark" data-mdb-ripple-color="dark">Add Product</a>
        </div>
    </div>
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>Product Picture</th>
                <th>product Name</th>
                <th>price</th>
                <th>Amount</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
              <tr>
                <td>
                  @if ($product->picture != null)
                            
                    <img class="form-logo" src="{{ asset('storage/images/'.$product->picture) }}" alt="Store Logo">
                  @else
                  <i class="fa fa-user form-no-logo" aria-hidden="true"></i>

                  @endif
                </td>
                <td>    
                      <p class="fw-bold mb-1">{{ $product->name }}</p>
                </td>
                <td>
                  <p class="fw-normal mb-1">{{ $product->price }}</p>
                </td>
                <td>
                  <p class="fw-normal mb-1">{{ $product->amount }}</p>
                </td>
                <form action="{{ route('store.destory_product', $product->id) }}" method="post">
                  <td>
                      <a href="/store/{{ $product->id }}/edit_product"
                          class="btn btn-link btn-rounded btn-sm fw-bold"
                          data-mdb-ripple-color="dark"
                          >
                          Edit
                      </a>

                      @csrf
                      @method('DELETE')

                        <button
                            type="submit"
                            class="btn btn-outline-danger btn-rounded btn-sm fw-bold"
                            data-mdb-ripple-color="dark"
                            >
                          Remove
                      </button>
                  </td>
                </form>
              </tr>
                    
              @endforeach
            </tbody>
          </table>
          <div class="col-12 mt-4">
            {{ $products->links() }}
          </div>
    </div>
@endsection