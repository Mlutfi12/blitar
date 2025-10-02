<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::where('status', 'published')
            ->latest('published_at')
            ->paginate(10);

        return view('news.index', compact('news'));
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('news.show', compact('news'));
    }
}
