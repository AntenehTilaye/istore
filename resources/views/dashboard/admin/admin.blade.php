@extends('layouts.app', ['title' => 'admins', 'current' => 3])
@section('content')
    
    <div class="container row">
        <div class="mx-3 my-2 mt-3">
            <div class="col-6">
                <a href="{{ route('admin.newadmin') }}" class="btn btn-outline-dark" data-mdb-ripple-color="dark">Add Admin</a>
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
                <th>Admin Name</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                        src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                        class="rounded-circle"
                        alt=""
                        style="width: 45px; height: 45px"
                        />
                    <div class="ms-3">
                      <p class="fw-bold mb-1">{{ $admin->name }}</p>
                      <p class="text-muted mb-0">{{ $admin->email }}</p>
                    </div>
                  </div>
                </td>
                
                  
                  
                  <form action="{{ route('admin.destroy', $admin->id) }}" method="post">
                    <td>
                    <a href="/admin/{{ $admin->id }}/edit"
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
            {{ $admins->links() }}
          </div>
    </div>
@endsection