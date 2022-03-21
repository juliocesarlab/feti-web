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

    public function createForm() {
      return view('createNews');
    }

    public function create(Request $request) {
      $news = new News;

      $news->title = $request->title;
      $news->content = $request->content;


      // Image Upload
      if($request->hasFile('banner') && $request->file('banner')->isValid()) {

          $requestImage = $request->banner;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('images/news'), $imageName);

          $news->image = $imageName;
      }

      $news->save();

      return redirect('/noticias')->with('msg', 'Notícia criada com sucesso');
    }
}
