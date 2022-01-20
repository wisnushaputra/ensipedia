@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-5"><img class="img-fluid rounded mb-4 mb-lg-0" src="/img/welcome.png" alt="..." /></div>
        <div class="col-lg-7">
            <h1 class="font-weight-light">Halo, selamat datang di Ensipedia</h1>
            <p>sudah jelas kan jadi di web ini kalian bisa membuat informasi atau tulisan 
                tentang apapun yang ingin kalian tulis, atau kalian juga bisa melihat hasil karya tulis orang lain ...</p>
            <a href="/posts" class="btn btn-primary">Look All Posts</a>
        </div>
    </div>
</div>
@endsection