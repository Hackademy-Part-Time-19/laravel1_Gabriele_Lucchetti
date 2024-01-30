<x-layout>
    <x-slot:title>{{config("app.name")}} </x-slot:title>
    <x-navbar/>
    <h1 style="margin-top:100px">Chi sono</h1>
    <div>
        <p>{{ $descrizione }}</p>
    </div>
</x-layout>