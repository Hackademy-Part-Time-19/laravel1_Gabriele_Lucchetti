<x-layout>
    
    <x-slot:title>{{config("app.name")}} </x-slot:title>

    <x-navbar/>
    <h1 class="intestazione" style="margin-top:100px">{{ config('app.name') }}</h1>
    <p>{{ $descrizione }}</p>
    <h2>Guarda le nostre recensioni di elettronica</h2>
    
</x-layout>