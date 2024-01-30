<x-layout>
    
    <x-slot:title>{{config("app.name")}} </x-slot:title>

    <x-navbar/>
    <h1 class="intestazione" style="margin-top:100px">{{ config('app.name') }}</h1>
    <p>{{ $descrizione }}</p>
    <h1 >Ciao a tutti</h1>
    
</x-layout>