<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use Illuminate\Http\Request;
use App\Models\Article;

class pageController extends Controller
{
    public function store(StoreArticleRequest $request)
    {
      
        $validated = $request->validated();
        
        $article = Article::create($validated);
        if ($request->hasFile('image')) {
            $request->file('image')->isValid();
            $imageExt = $request->file('image')->extension();
            $imagePath = $request->file('image')->storeAs('public/images', 'copertina_articolo' . $article['id'] . "." . $imageExt);
            $article->image = $imagePath;
            $article->save();
        }


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

        //PROVARE A DICHIARARE UNA VARIABILE CHE VADA A SALVARE LE CATEGORIE ES: $CATEGORY=ARTICLE::WHERE('category,$category)
        $articlesByCategory = Article::where('category', $category)->get('category');
        
        return view('byCategory', ['categories' => $articlesByCategory]);
    }

    public function show($id)
    {

        return view('dettaglio', ['articolo' => Article::find($id)]);
    }

    
}
