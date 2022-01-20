@extends('dashboard.layouts.main')


@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-9">
            <h1>{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back to all my post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Delete this post?')"><span data-feather="x-circle"></span> Delete</button>
            </form>
            @if ($post->image)
                <div style="max-height: 400px; overflow:hidden">
                    <img src="{{ asset($post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">   
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="" class="img-fluid mt-3">   
            @endif
            <article class="my-3">
                {!! $post->body  !!}
            </article>
            
        </div>
    </div>
</div>
@endsection