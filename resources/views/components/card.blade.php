<div class="col-3">

    <div class="card" style="width: 100%; height:500px;">
        
        <img style="width: 100%;height:250px;object-fit:cover;" src={{Storage::url($immagine)}} class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $titolo}}</h5>
            <p class="card-text">{{ $descrizione}}</p>
            <p class="card-text">{{ $category}}</p>
            <a href="{{ route('articolo.show', ['id' => $chiave]) }}" class="btn btn-primary">Vai
                all'articolo</a>
        </div>
    </div>
</div>