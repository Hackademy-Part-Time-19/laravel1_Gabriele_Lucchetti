<x-layout>
    <x-navbar />
    <div style="margin-top:100px">
        <h1 style="margin-left:20px;">{{ config('app.name') }}</h1>
        <h3 class="text-center" style="margin-top:20px;margin-bottom:20px;">Ecco gli articoli presenti</h3>

    </div>


    <div class="container">
        <div class="row ">
            @if ($articoli == null)
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Non ci sono articoli</h5>
                        </div>
                    </div>
                </div>
            @else
                @foreach ($articoli as $chiave => $articolo)
                    <x-card :titolo="$articolo['title']" :descrizione="$articolo['description']" 
                    :category="$articolo['category']" :body="$articolo['body']"  :chiave="$articolo['id']"/>

                    
                @endforeach
            @endif


        </div>
    </div>
</x-layout>
