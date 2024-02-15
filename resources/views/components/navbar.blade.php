<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="row">
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
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('contattaci') }}">Contattaci</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('article.create') }}">Crea il Tuo Articolo!</a>
                    </li>
                    @guest
                        <li class="nav-item" style="margin-left:50px;">
                            <a href="{{ route('register') }}" class="nav-link">Registrazione</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item" style="margin-left:50px;">
                            <form action="logout" method="POST">
                                @csrf
                                <button type="submit">Esci</button>
                            </form>

                        </li>
                        <li>
                            <a href="{{ route('profile') }}" class="nav-link">Profilo</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>

</nav>
