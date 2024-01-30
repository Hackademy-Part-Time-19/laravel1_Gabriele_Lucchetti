<x-layout>
    <x-slot:title>Dettaglio</x-slot:title>
    <x-navbar/>
    <div style="margin-top:150px;margin-bottom:50px;">
        <button class="btn btn-primary" style="color:white;font-size:28px;width:500px"><a
                href="{{ route('articoli') }}"class="link" style="color:white; text-decoration:none">Torna alla pagina
                precedente</a></button>
    </div>
    <div class="card" style="width: 100%; height:1500px;">


        <h5 class="card-title text-center" style="font-size:44px;">{{ $articolo['titolo'] }}</h5>
        <img style="width: 100%;height:750px;object-fit:contain;margin-top:45px" src={{ $articolo['immagine'] }}
            class="card-img-top" alt="...">
        <div class="card-body mt-4 text-center">

            <p class="card-text" style="font-size:35px">
                Descrizione:{{ $articolo['descrizione'] . ' ' . $articolo['prezzo'] }}</p>
            <p class="card-text" style="font-size:35px">Categoria: {{ $articolo['category'] }}</p>




        </div>
    </div>
</x-layout>
