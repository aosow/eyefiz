@extends('layout')

@section('title')
    Produits
@endsection

@section('content')

    <div class="container">
        <div class="row my-5">
            <div class="col-md-12">
                <h1>Tous les produits</h1>
            </div>
        </div>
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
    </div>

@endsection

