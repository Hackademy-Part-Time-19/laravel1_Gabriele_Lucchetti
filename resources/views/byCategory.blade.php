<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <title>Blog</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('chisono') }}">Chi sono</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('articoli') }}">Articoli</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown" style="cursor:pointer;">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Categorie
                            </a>
                            <ul class="dropdown-menu">
                                @foreach ($categories as $category)
                                    <li><a class="dropdown-item"
                                            href="{{ route('articles.byCategory', $category) }}">{{ $category }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="margin-top:100px">
        @foreach ($articoli as $chiave => $articolo)
            <div class="col-3">

                <div class="card" style="width: 100%; height:500px;">
                    <img style="width: 100%;height:250px;object-fit:cover;" src={{ $articolo['immagine'] }}
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $articolo['titolo'] }}</h5>
                        <p class="card-text">{{ $articolo['descrizione'] }}</p>
                        <p class="card-text">{{ $articolo['category'] }}</p>
                        <a href="{{ route('articolo.show', ['id' => $chiave]) }}" class="btn btn-primary">Vai
                            all'articolo</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
