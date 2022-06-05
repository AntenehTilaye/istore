@extends('layouts.store_app', ['title' => 'categories', 'current' => 3])
@section('content')
    
    <div class="container row">
        <div class="mx-3 my-2 mt-3">
            <div class="col-6">
                <a href="{{ route('store.newcategory') }}" class="btn btn-outline-dark" data-mdb-ripple-color="dark">Add Category</a>
            </div>
        </div>
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
                <th>Category Name</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categorys as $category)
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <div class="ms-3">
                      <p class="fw-bold mb-1">{{ $category->name }}</p>
                    </div>
                  </div>
                </td>
                
                  
                  
                  <form action="{{ route('store.destory_category', $category->id) }}" method="post">
                    <td>
                    <a href="/store/{{ $category->id }}/edit_category"
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
            {{ $categorys->links() }}
          </div>
    </div>
@endsection