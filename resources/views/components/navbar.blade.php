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
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contattaci') }}">Contattaci</a>
                </li>
            </ul>
        </div>
    </div>
</nav>