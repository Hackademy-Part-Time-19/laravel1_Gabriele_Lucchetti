<x-layout>
    <x-navbar />
    <form style="margin-top:100px;margin-left:15px;" action={{ route('register') }} method="POST">
        @csrf

        <h1> FORM DI REGISTRAZIONE! </h1>
        <div class="mb-3">
            <label for="name" class="form-label">Nome e Cognome</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-4"><span class="small text-danger">
            @error('name')
                {{ $message }}
            @enderror
        </span></div>
        <div class="mb-3">
            <label for="email" class="form-label">E-Mail</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-4"><span class="small text-danger">
                @error('email')
                    {{ $message }}
                @enderror
            </span></div>


        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-4"><span class="small text-danger">
                @error('password')
                    {{ $message }}
                @enderror
            </span></div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Conferma Password</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="{{ old('password') }}"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-4"><span class="small text-danger">
                    @error('password_confirmation')
                        {{ $message }}
                    @enderror
                </span></div>


        <button type="submit" class="btn btn-primary">REGISTRATI!</button>
    </form>
</x-layout>
