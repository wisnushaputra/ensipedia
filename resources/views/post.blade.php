@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 mb-5">
            <h1>{{ $post->title }}</h1>

            <p>By : <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in  
                    <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

                    @if ($post->image)
                    <div style="max-height: 400px; overflow:hidden">
                        <img src="{{ asset($post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">   
                    </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">   
                    @endif
            <article class="my-3">
                {!! $post->body  !!}
            </article>
            


            <a href="/posts">Back To Post</a>
        </div>
    </div>
</div>
   
@endsection