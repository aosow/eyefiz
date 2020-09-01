@extends('layout')

@section('title')
    Accueil
@endsection


@section('content')

    <div class="bg d-flex align-items-center mb-5">

        <div class="container search-sec">
            <form action="{{ route('search') }}">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="text-center text-white mb-5">Test formulaire de recherche</h1>
                        <div class="row">
                            <div class="col-lg-5 col-md-5 p-0">
                                <input type="text" class="form-control search-slt" name="title" placeholder="Que recherchez vous">
                            </div>

                            <div class="col-lg-5 col-md-5 col-sm-12 p-0">
                                <select class="form-control search-slt" name="category">
                                    <option value="">- Selectionner la categorie -</option>
                                    @foreach ($categories as $cat)

                                    <option value="{{ $cat->id }}">{{ $cat->title }}</option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="col-lg-2 col-md-2 p-0">
                                <button type="submit" class="btn btn-danger wrn-btn">Recherher</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <div class="container">

        @if (count($products) > 0)

        <h2 class="text-center my-5">Produits</h2>

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

        <div class="text-center">
            <a href="{{ route('products') }}" class="btn btn-primary">Voir tous les produits </a>
        </div>

        @endif

        @if (count($posts) > 0)

        <h2 class="text-center my-5">Articles</h2>
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

        <div class="text-center mb-5">
            <a href="{{ route('posts') }}" class="btn btn-primary">Voir tous les articles </a>
        </div>

        @endif


    </div>


@endsection
