<x-layout>
    <x-navbar />
    <div class="container text-center" style="padding:20px;margin-top:100px;border:solid 3px rgba(0,0,0,0.5);width:50%">
        <form action="{{ route('Category.update', compact('Category')) }}" method="POST">
            @csrf
            @method('PUT')
            <h3>Modifica Categoria</h3>
            <div style="margin-top:20px">
                <label for="name">Modifica il nome della Categoria</label>
                <input type="text" name="name" id='name' placeholder={{ old('name',$Category->name) }}>
            </div>
            <div style="margin-top:20px">
                <label for="description">Modifica una descrizione</label>
                <input type="text" name="description" id='description' placeholder={{ old('description',$Category->description) }}>
            </div>
            <div class="col" style='margin-top:30px;'>
                <button class="btn btn-success" type="submit"> Salva Categoria</button>
            </div>

        </form>
    </div>
</x-layout>
