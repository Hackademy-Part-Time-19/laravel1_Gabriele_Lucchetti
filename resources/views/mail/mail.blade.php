<x-layout>
    <x-navbar />
    <div style='margin-top:100px;'>
        <h1>L'utente "{{ $name }}" ti ha contattato!</h1>
        <h4>Ecco il suo messaggio:</h4>
        <p>"{{ $textMessage }}"</p>
    </div>
</x-layout>
