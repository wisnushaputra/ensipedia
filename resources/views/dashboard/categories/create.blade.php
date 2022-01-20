@extends('dashboard.layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New category</h1>
  </div>
  <div class="col-lg-8">
      <form action="/dashboard/categories" method="post" class="mb-5">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
          @error('name')
          <div class="invalid-feedback">
          {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control" id="slug" name="slug" required value="{{ old('slug') }}">
        </div>
        <button type="submit" class="btn btn-primary">Create Category</button>
      </form>
  </div>

  <SCript>
      const title = document.querySelector('#name');
      const slug = document.querySelector('#slug');

      title.addEventListener('change', function(){
          fetch('/dashboard/categories/checkSlug?name=' + title.value)
          .then(response => response.json())
          .then(data => slug.value = data.slug)
      });
  </SCript>
@endsection