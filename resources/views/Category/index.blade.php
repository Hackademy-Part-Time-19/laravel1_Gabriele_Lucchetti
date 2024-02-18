<x-layout>
    <x-navbar></x-navbar>



    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome Categoria</th>
                <th scope="col">Descrizione Categoria</th>
                <th scope="col">Modifica o Cancella</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <button class="btn btn-success"><a style="color:aliceblue"
                                href="{{ route('Category.edit', ['Category' => $category->id]) }}">Modifica
                                {{ $category->name }}</a></button>
                        <form method="POST" action="{{ route('Category.destroy', ['Category' => $category->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                    Cancella
                                    {{ $category->name }}</button>
                        </form>
                    </td>

                </tr>
            @endforeach
            @if(session()->has('delete'))
            <div class="text-center bg-danger">
                <p style='color:aliceblue;'>{{session('delete')}}</p>
            </div>
            @endif
        </tbody>
    </table>
    <div class="row">
        <div class="container text-center">
            <button style="width:30%" class="btn btn-secondary" type="submit"><a
                    style="font-weight:bold;color:rgb(255, 255, 255)" href="{{ route('Category.create') }}">Vai al form
                    Categorie</a></button>
        </div>
    </div>
    @if (session()->has('success'))
        <div class="container text-center" style="width:100%;margin-top:20px">
            <div class="container text-center bg-success" style="width:50%; border-radius:5px; ">
                <h4>{{ session('success') }}</h4>
            </div>
        </div>
    @endif
</x-layout>
