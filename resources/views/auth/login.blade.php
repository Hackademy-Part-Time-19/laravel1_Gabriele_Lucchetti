<x-layout>
    <x-navbar />
    <form style="margin-top:100px;margin-left:15px;" action={{ route('login') }} method="POST"
        >
        @csrf


        <div class="mb-3">
            <label for="email" class="form-label">E-Mail</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-4"><span class="text-danger">
            @error('email')
                {{ $message }}
            @enderror
        </span></div>


        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-4"><span class="text-danger">
            @error('password')
                {{ $message }}
            @enderror
        </span></div>





        <button type="submit" class="btn btn-primary">LOGIN</button>
    </form>
</x-layout>
