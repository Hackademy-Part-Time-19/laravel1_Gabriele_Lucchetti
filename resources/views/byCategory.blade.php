<!DOCTYPE html>
<x-layout>
   
    <x-navbar/>
    <div style="margin-top:100px">
        @foreach ($articoli as $chiave => $articolo)
        <x-slot:title>{{"Categoria:" . " " . $articolo['category']}}</x-slot:title>
        <x-card :titolo="$articolo['titolo']" :descrizione="$articolo['descrizione']" 
        :category="$articolo['category']" :img="$articolo['immagine']" :chiave="$chiave"/>
        @endforeach
    </div>
  
</x-layout>