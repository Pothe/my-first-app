@extends('Layouts.app')
@section('title','create new category')
    
@section('content')
<div class="container my-5">
    <div class="row">
      <div class="d-flex justify-content-between mb-2">
        <h3>Create Category</h3>
        <a class="btn btn-success" href="{{ route('admin.cat') }}" role="button"><i class="bi bi-arrow-left-circle"></i></a>
      </div>
      <!-- Blog entries-->
      <div class="col-lg-12">
        <div class="card p-3">
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
  </div>
@endsection

