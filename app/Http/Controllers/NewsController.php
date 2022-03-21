<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function listAll() {
        $news = News::all();

        return view('news', ['news' => $news]);
    }

    public function preview() {
      $news = News::all()
              ->take(2);

      return view('news-preview', ['news' => $news]);
    }

    public function fullView($id) {
      $news = News::findOrFail($id);
      return view('singleNews', ['news' => $news]);
    }
}
