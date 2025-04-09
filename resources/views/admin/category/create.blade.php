@extends('Layouts.app')
@section('title','create new category')
    
@section('content')
<div class="container my-5">
    <div class="row">
      <div class="d-flex justify-content-between mb-2">
        <h3>Create Category</h3>
        <a class="btn btn-success" href="{{ route('admin.cat') }}" role="button">Back</a>
      </div>
      <!-- Blog entries-->
      <div class="col-lg-12">
        <div class="card p-3">
          <form method="POST" action="{{ route('admin.cat.store')}}">
            @csrf
            <div class="mb-3">
              <label for="tag" class="form-label">Category</label>
              <input type="text" class="form-control" id="tag" name="name" />
            </div>
            <button type="submit" class="btn btn-primary">save <i class="bi bi-floppy2"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

