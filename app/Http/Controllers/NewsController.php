<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index() {
        $news = News::all()->sortByDesc('created_at');
        return view('news',  ['news' => $news]);
    }

    public function getAll() {
      $news = News::all();
      return view('news-dashboard',  ['news' => $news]);
    }

    public function preview() {
      $news = News::all()
              ->sortByDesc('created_at')
              ->take(2);

      return view('index', ['news' => $news]);
    }

    public function getOne($id) {
      $news = News::findOrFail($id);
      return view('singleNews', ['news' => $news]);
    }

    public function create() {
      return view('createNews');
    }

    public function store(Request $request) {
      $news = new News;

      $news->title = $request->title;
      $news->content = $request->content;
      $news->short_desc = $request->short_desc;


      // Image Upload
      if($request->hasFile('banner') && $request->file('banner')->isValid()) {

          $requestImage = $request->banner;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('images/news'), $imageName);

          $news->image = $imageName;
      }

      $news->save();

      return redirect('/noticias');
    }
}
