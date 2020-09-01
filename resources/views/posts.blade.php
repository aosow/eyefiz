@extends('layout')

@section('title')
    Articles
@endsection

@section('content')

    <div class="container">
        <div class="row my-5">
            <div class="col-md-12">
                <h1>Tous les articles</h1>
            </div>
        </div>
        <div class="row mb-5">

            @foreach ($posts as $post)

            <div class="col-md-6 mb-4">
                <div class="card post-card">
                    <img src="{{ $post->img }}" class="card-img-left" alt="img">
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $post->title }}</h5>
                        <span>{{ $post->created_at->format('j M Y') }}</span>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>

@endsection

