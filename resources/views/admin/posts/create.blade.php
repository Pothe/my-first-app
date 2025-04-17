@extends('Layouts.app')
@section('title','create new post')
    
@section('content')
<div class="container my-5">
  @include('components.error')
    <div class="row">
      <div class="d-flex justify-content-between mb-2">
        <h3>Create new post</h3>
        <a class="btn btn-success" href="{{ route('admin.posts') }}" role="button"><i class="bi bi-arrow-left-circle"></i></a>
      </div>
      <!-- Blog entries-->
      <div class="col-lg-12">
        <div class="card p-3">
          <form method="POST" action="{{ route('admin.post.store') }}">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input
                type="text"
                class="form-control"
                id="title"
                name="title"
              />
            </div>
            <div class="mb-3">
              <label for="content" class="form-label">Content</label>
              <textarea
                class="form-control"
                id="content"
                name="content"
                rows="5"
              ></textarea>
            </div>
            <div class="mb-3">
              <label for="thumbnail" class="form-label"
                >Choose Thumbnail</label
              >
              {{-- <input
                class="form-control"
                type="file"
                id="thumbnail"
                name="thumbnail"
              /> --}}
            </div>
            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
              <select
                class="form-select"
                name="cat_id"
                aria-label="Default select example"
              >
                <option selected>Select Category</option>
                @foreach ($category as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
               
              </select>
            </div>
            <div class="mb-3">
              <label for="tags" class="form-label">Tag</label>
              <div class="tag-wrapper">
                
                @foreach ($tags as $item)
                <div class="form-check form-check-inline">
                 
                  <input
                  class="form-check-input"
                  type="checkbox"
                  name="tags[]"
                  value="{{ $item->id }}"
                  id="tag{{ $item->id }} "
                />
                <label class="form-check-label" for="tag{{ $item->id }}">{{ $item->name }}</label>
                 
                 
                </div>
                @endforeach              
               
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

  
        </div>
      </div>
    </div>
  </div>
@endsection

