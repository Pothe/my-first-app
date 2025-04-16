@extends('Layouts.app')
@section('title','create new tag')
    
@section('content')
<div class="container my-5">
  @include('components.error')
    <div class="row">
      <div class="d-flex justify-content-between mb-2">
        <h3>Create Tag</h3>
        <a class="btn btn-success" href="{{ route('admin.tags') }}" role="button"><i class="bi bi-arrow-left-circle"></i></a>
      </div>
      <!-- Blog entries-->
      <div class="col-lg-12">
        <div class="card p-3">
          <form method="POST" action="{{ route('admin.tag.store')}}">
            @csrf
            <div class="mb-3">
              <label for="tag" class="form-label">Tag</label>
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

