<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { {
            $categories = ['name' => $request->name, 'description' => $request->description];

            Category::create($categories);
            return redirect('Category')->with(['success' => 'Categoria aggiunta con successo']);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        Category::find($category->id);
        return view('category.show', ['category' => Category::find($category->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $Category)
    {

        return view('category.edit', compact('Category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category, $id)
    {

        $category->find($id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect('Category')->with(['success' => 'Categoria aggiornata con successo']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category, $id)
    {

        $category->find($id)->destroy($id);

        return redirect()->back()->with('delete', 'Categoria eliminata con successo');
    }
}
