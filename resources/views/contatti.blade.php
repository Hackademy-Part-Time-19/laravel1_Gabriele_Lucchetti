<x-layout>
    <x-navbar />

    <form style="margin-top:100px" action={{ route('messaggio') }} method="POST">
        @csrf
        <x-logicaIF></x-logicaIF>

        <div class="mb-3">
            <label for="nome" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="nome" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Indirizzo e-mail</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Testo del messaggio</label>
            <input type="text" class="form-control" name="text" id="text">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
