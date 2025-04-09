@extends('Layouts.app')
@section('title', "all categories")
    

@section('content')

<div class="container my-5">
  {{-- @if (session('success'))
       <div class="alert alert-primary alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif --}}

@if(session('success'))
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });
    Toast.fire({
        icon: "success",
        title: "{{ session('success') }}"
    });
</script>
@endif
    <div class="row">
      <div class="d-flex justify-content-between mb-2">
        <h3>Category List</h3>
        <a class="btn btn-success" href="{{route('admin.cat.create')}}" role="button"
          ><i class="bi bi-plus-circle-fill"></i></a
        >
      </div>
      <!-- Blog entries-->
      <div class="col-lg-12">
        <div class="card p-3">
          <table
            id="datatable"
            class="table table-striped"
            style="width: 100%"
          >
            <thead>
              <tr>
                <th>No</th>
                <th>Category</th>
                <th style="width: 100px">Action</th>
              </tr>
            </thead>
            <tbody>

       
              @foreach ($categories as $item)
              <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $item ->name }}</td>
                <td>
                  <a
                    class="btn btn-primary btn-sm"
                    href="{{ route('admin.cat.edit',['id' => $item->id ]) }}"
                    role="button"
                    ><i class="bi bi-pencil-square"></i></a
                  > 
                  
                  <form action="{{ route('admin.cat.destroy',$item->id) }}" method="post">
                    @method('delete')
                    @csrf

                    <button type="submit" type="button" onclick="return confirm('Are you sure you want to delete this user?')" class="btn-danger"><i class="bi bi-trash3-fill"></i> </button>
                  </form>
                  
                
                </td>
              </tr>
              @endforeach
             
              
            </tbody>
            
          </table>
        </div>
      </div>
    </div>
  </div>
  @endsection