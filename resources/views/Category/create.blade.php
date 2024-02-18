<x-layout>
    <x-navbar/>
    <div class="container text-center" style="padding:20px;margin-top:100px;border:solid 3px rgba(0,0,0,0.5);width:50%">
        <form action="{{ route('Category.store') }}" method="POST">
            @csrf
            <h3>Crea Categoria</h3>
            <div style="margin-top:20px">
                <label for="name">Crea il nome della Categoria</label>
                <input type="text" name="name" value={{ old("name") }}>
            </div>
            <div style="margin-top:20px">
                <label for="description">Crea una descrizione</label>
                <input type="text" name="description" value={{ old('description') }}>
            </div>
            <div class="col" style='margin-top:30px;'>
                <button class="btn btn-success" type="submit"> Salva Categoria</button>
            </div>

        </form>
    </div>
</x-layout>