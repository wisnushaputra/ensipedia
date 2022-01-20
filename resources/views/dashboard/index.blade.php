@extends('dashboard.layouts.main')



@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome, {{ auth()->user()->name }}</h1>
  </div>
  <p>Disini adalah dashboard milik anda, pada dashboard ini anda bisa membuat postingan...</p><br>
  <p>jika anda ingin melihat semua postingan ...</p>
  <a href="/posts" class="btn btn-primary">Look All Posts</a>

@endsection