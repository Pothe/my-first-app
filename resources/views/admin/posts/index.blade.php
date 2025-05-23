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


  @include('components.alert')
  @include('components.error')

    <div class="row">
      <div class="d-flex justify-content-between mb-2">
        <h3>Category List</h3>
        <a class="btn btn-success" href="{{route('admin.post.create')}}" role="button"
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

       
              {{-- @foreach ($categories as $item) --}}
              <tr>
                {{-- <td>{{ $loop->iteration}}</td>
                <td>{{ $item ->name }}</td> --}}
                <td>
                  {{-- edit link --}}
                  <div class="d-flex">
                  <a
                  class="btn btn-primary btn-sm mx-2"
                  {{-- href="{{ route('admin.cat.edit',['id' => $item->id ]) }}" --}}
                  role="button"
                  ><i class="bi bi-pencil-square"></i></a> 

                  {{-- delete button --}}
                  {{-- <form action="{{ route('admin.cat.destroy',$item->id) }}" method="post"> --}}
                    {{-- @method('delete')
                    @csrf --}}
  
                    <button type="submit" type="button" onclick="return confirm('Are you sure you want to delete this user?')" class="btn-danger"><i class="bi bi-trash3-fill"></i> </button>
                  </form>
                </div>
                </td>    
              </tr>
              {{-- @endforeach --}}
             
              
            </tbody>
            
          </table>
        </div>
      </div>
    </div>
  </div>
  @endsection