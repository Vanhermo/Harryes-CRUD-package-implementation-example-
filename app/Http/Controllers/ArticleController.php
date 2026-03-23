<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $articles = Article::all();
        return view ('list_articles', ['data' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
        return view('list_articles');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);
        Article::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
        ]);
        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $article = Article::findOrFail($id);
        return view('show_article', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect('/articles');
    }
}
