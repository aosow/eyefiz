<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @yield('title') - Test Eyefiz
        </title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">

    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <div class="container">

                <a class="navbar-brand" href="{{ route('homepage') }}">Test Eyefiz</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item @if($menu == 'homepage')active @endif">
                            <a class="nav-link" href="{{ route('homepage') }}">Accueil</a>
                        </li>
                        <li class="nav-item @if($menu == 'products')active @endif">
                            <a class="nav-link" href="{{ route('products') }}">Produits</a>
                        </li>
                        <li class="nav-item @if($menu == 'posts')active @endif">
                            <a class="nav-link" href="{{ route('posts') }}">Articles</a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>

        <div class="main-content">

            @yield('content')

        </div>

        <footer class="footer">
            <div class="container text-center">
              <span>Test Eyefiz, Par Alpha Oumar SOW</span>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        <script src="/js/index.js"></script>

    </body>
</html>
