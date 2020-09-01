@extends('layout')

@section('title')
    Recherche
@endsection

@section('content')

    <div class="container">

        <div class="row my-5">

            <div class="col-md-12">
                @if ($title != null)
                <h2>
                    Resultat de recherche '{{ $title }}'
                    @if ($category != null)
                    dans la catégorie '{{ $category->title }}'
                    @endif
                </h2>
                @else
                <h2>Produits dans la categorie '{{ $category->title }}'</h2>
                @endif
            </div>

        </div>



        @if (count($products) > 0)

        <h4>Produits ({{ count($products) }})</h4>
        <div class="row mb-5">

            @foreach ($products as $product)

            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="{{ $product->img }}" class="card-img-top" alt="img">
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $product->title }}</h5>
                        <span>- {{ $product->category->title }} -</span>
                        <h5>{{ $product->price }} €</h5>
                    </div>
                </div>
            </div>

            @endforeach

        </div>

        @endif


        @if (count($posts) > 0)

        <h5>Artilcles ({{ count($posts) }})</h5>
        <div class="row mb-5">

            @foreach ($posts as $post)

            <div class="col-md-6 mb-3">
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

        @endif


        @if (count($posts) == 0 && count($products) == 0)

        <div class="row mb-5">
            <div class="col-md-8">
                <h4>Aucun resultat</h4>
            </div>
        </div>

        @endif

    </div>

@endsection

