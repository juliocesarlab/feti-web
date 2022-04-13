<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\News;
use App\Models\Banner;
use Illuminate\Support\Facades\File;

class GenericsController extends Controller
{
  function index() {
    $partners = Partner::All()->sortByDesc('created_at');
    $banners = Banner::All()->sortByDesc('created_at');
    
    $news = News::all()
    ->sortByDesc('created_at')
    ->take(2);

    return view('index', ['news' => $news, 'partners' => $partners, 'banners' => $banners]);
  }

  function edicts() {
    $edictsPath = public_path('docs/edicts');
    $edictsFiles = File::allFiles($edictsPath);

    return view('edicts.index', ['edicts' => $edictsFiles]);
  }
}
