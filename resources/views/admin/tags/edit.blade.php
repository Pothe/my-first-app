@extends('Layouts.app')
@section('title','edit the category')
    
@section('content')
<div class="container my-5">
    <div class="row">
      <div class="d-flex justify-content-between mb-2">
        <h3>update Category</h3>
        <a class="btn btn-success" href="#" role="button"><i class="bi bi-arrow-left-circle"></i></a>
      </div>
      <!-- Blog entries-->
      <div class="col-lg-12">
        <div class="card p-3">
          <form method="POST"​ action="{{ route('admin.tag.update',$tag->id) }}">  
           @csrf
           @method('PUT')
            <div class="mb-3">
              <label for="tag" class="form-label">Category</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ $tag->name }}"/>
            </div>
            <button type="submit" class="btn btn-primary">update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

