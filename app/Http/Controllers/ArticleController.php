<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class ArticleController extends Controller
{
    public function getArticles()
    {
        $articles = Article::all();
        return view('articles', compact('articles'));
    }

    public function searchArticle(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Article::class, ['name', 'description'])
            ->perform($request->get('search'));

        return view('search-result', compact('searchResults'));
    }
}
