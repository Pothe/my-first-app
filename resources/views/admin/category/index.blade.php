@extends('Layouts.app')
@section('title', "all categories")
    

@section('content')

<div class="container my-5">
    <div class="row">
      <div class="d-flex justify-content-between mb-2">
        <h3>Category List</h3>
        <a class="btn btn-success" href="{{route('admin.cat.create')}}" role="button"
          >Create</a
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
                  > ||
                  <a
                  class="btn btn-danger btn-sm"
                  href="{{ route('admin.cat.edit',['id' => $item->id ]) }}"
                  role="button"
                  ><i class="bi bi-trash3-fill \"></i></a
                >
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