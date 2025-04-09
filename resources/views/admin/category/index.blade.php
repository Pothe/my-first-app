@extends('Layouts.app')
@section('title', "all categories")
    

@section('content')

<div class="container my-5">

  <h2>User List</h2>

  <!-- Button to open modal -->
  <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
      + Add New User
  </button>

  <!-- Bootstrap Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <form method="POST" action="{{ route('admin.cat.store')}}">
          @csrf
          <div class="mb-3">
            <label for="tag" class="form-label">Category</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="tag" name="name" />
           @error('name')
          <div class="invalid-feedback">
           {{ $message }}
          </div>
               
           @enderror
          </div>
          <button type="submit" class="btn btn-primary">save</button>
        </form>

      </div>
    </div>
  </div>

  {{-- @if (session('success'))
       <div class="alert alert-primary alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif --}}

@if(session('success'))
  @include('components.alert')
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
                  {{-- edit link --}}
                  <div class="d-flex">
                  <a
                  class="btn btn-primary btn-sm mx-2"
                  href="{{ route('admin.cat.edit',['id' => $item->id ]) }}"
                  role="button"
                  ><i class="bi bi-pencil-square"></i></a> 

                  {{-- delete button --}}
                  <form action="{{ route('admin.cat.destroy',$item->id) }}" method="post">
                    @method('delete')
                    @csrf
  
                    <button type="submit" type="button" onclick="return confirm('Are you sure you want to delete this user?')" class="btn-danger"><i class="bi bi-trash3-fill"></i> </button>
                  </form>
                </div>
                </td>
                

            
                  {{-- <a
                  class="btn btn-primary btn-sm"
                  href="{{ route('admin.cat.edit',['id' => $item->id ]) }}"
                  role="button"
                  ><i class="bi bi-pencil-square"></i></a> --}}
              
                  
                {{-- <form action="{{ route('admin.cat.destroy',$item->id) }}" method="post">
                  @method('delete')
                  @csrf

                  <button type="submit" type="button" onclick="return confirm('Are you sure you want to delete this user?')" class="btn-danger"><i class="bi bi-trash3-fill"></i> </button>
                </form>    --}}
               
              </tr>
              @endforeach
             
              
            </tbody>
            
          </table>
        </div>
      </div>
    </div>
  </div>
  @endsection