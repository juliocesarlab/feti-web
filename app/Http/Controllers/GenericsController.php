<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\News;

class GenericsController extends Controller
{
  function index() {
    $partners = Partner::All()->sortByDesc('created_at');
    
    $news = News::all()
    ->sortByDesc('created_at')
    ->take(2);

    return view('index', ['news' => $news, 'partners' => $partners]);
  }
}
