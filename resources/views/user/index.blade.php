<x-layout>
    
    <x-slot:title>{{config("app.name")}} </x-slot:title>

    <x-navbar/>
    <h1 class="intestazione" style="margin-top:100px">{{ config('app.name') }}</h1>

    <h2>Benvenuto {{auth()->user()->name}}</h2>
    <p>Inserisci un'articolo da recensire {{ auth()->user()->name }}</p>
    
    
</x-layout>