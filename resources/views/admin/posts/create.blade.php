@extends('Layouts.app')
@section('title','create new category')
    
@section('content')
<div class="container my-5">
  @include('components.error')
    <div class="row">
      <div class="d-flex justify-content-between mb-2">
        <h3>Create Category</h3>
        <a class="btn btn-success" href="{{ route('admin.posts) }}" role="button"><i class="bi bi-arrow-left-circle"></i></a>
      </div>
      <!-- Blog entries-->
      <div class="col-lg-12">
        <div class="card p-3">
  
        </div>
      </div>
    </div>
  </div>
@endsection

