<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class newsController extends Controller
{
    public function listAll() {
        $news = News::all();

        return view('news', ['news' => $news]);
    }

    public function home() {
      $news = News::all();

      return view('index', ['news' => $news]);
  }
}
