<x-layout>
    <x-navbar />

    <form style="margin-top:100px;margin-left:15px;" action={{ route('article.store') }} method="POST" enctype="multipart/form-data">
        @csrf
        <x-logicaIF></x-logicaIF>

        <div class="mb-3">
            <label for="nome" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-4"><span class="text-danger">
                @error('title')
                    {{ $message }}
                @enderror
            </span></div>
        <div class="mb-3">
            <label for="text" class="form-label">Categoria</label>
            <select>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4"><span class="text-danger">
                @error('category')
                    {{ $message }}
                @enderror
            </span></div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione articolo</label>
            <input type="text" class="form-control" name="description" value="{{ old('description') }}"
                id="password">
        </div>
        <div class="mb-4"><span class="text-danger">
                @error('description')
                    {{ $message }}
                @enderror
            </span></div>
        <div class="mb-3">
            <label for="text" class="form-label">Corpo dell'articolo</label>
            <input type="text" class="form-control" name="body" id="body" value="{{ old('body') }}">
        </div>
        <div class="mb-4"><span class="text-danger">
                @error('body')
                    {{ $message }}
                @enderror
            </span></div>
        <div class="mb-3">
            <label for="image" class="form-label">Carica un'immagine <span style="color:grey; font-size:14px; margin-left:10px;">(Opzionale)</span></label>
            <input type="file" class="form-control" name="image" id="image" value="{{ old('image') }}">
        </div>
        <div class="mb-4"><span class="text-danger">
            @error('image')
                {{ $message }}
            @enderror
        </span></div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @if (session()->has('success'))
        <div style="display:flex;align-items:center; justify-content:center; background-color:#00A86B" class=" mt-4">
            <span style="color:white; font-size:28px; font-weight:bold;">{{ session('success') }}</span>
        </div>
    @endif
</x-layout>
