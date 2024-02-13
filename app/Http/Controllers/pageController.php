<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use Illuminate\Http\Request;
use App\Models\Article;

class pageController extends Controller
{
    public function store(StoreArticleRequest $request)
    {
        // $article= new Article();
        // $article->title ='Titolo di prova';
        // $article->category='Elettronica';
        // $article->description='Descrizione di prova';
        // $article->body='Corpo del articolo';
        // $article->save();

        $validated = $request->validated();
        $article = Article::create($validated);
        $request->hasFile('image');
        $request->file('image')->isValid();
        $imageExt = $request->file('image')->extension();
        $imagePath = $request->file('image')->storeAs('images', 'copertina_articolo' . $article['id'] . "." . $imageExt);
        $article->image = $imagePath;
        $article->save();


        return redirect()->back()->with(['success' => 'Articolo inserito con successo!']);
    }

    public function create()
    {
        return view('create');
    }



    public function index()
    {
        return view('articoli', ['articoli' => article::all()]);
    }



    public function byCategory($category)
    {
        $articlesByCategory = Article::where('category',$category);
        foreach ($this->articoli as $article) {

            if ($article['category'] == $category) {
                $articlesByCategory[] = $article;
            }
        }
        return view('byCategory', ['articoli' => $articlesByCategory]);
    }

    public function show($id)
    {

        return view('dettaglio', ['articolo' => Article::find($id)]);
    }
}
