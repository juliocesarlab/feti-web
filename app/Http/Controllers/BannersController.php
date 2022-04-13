<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannersController extends Controller
{

  public function index() {
    $banners = banner::All()->sortByDesc('created_at');

    return view('banners.banners-dashboard', ['banners' => $banners]);
  }

  public function create() {
    return view('banners.create-banner');
  }

  public function store(Request $request) {
    $banner = new banner;

    $banner->title = $request->title;
    $banner->link = $request->link;

    // Image Upload
    if($request->hasFile('banner') && $request->file('banner')->isValid()) {

        $requestImage = $request->banner;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('images/banners'), $imageName);

        $banner->image = $imageName;
    }

    $banner->save();

    return redirect('/dashboard/banners');
  }

  public function edit($id) {
    $banner = banner::findOrFail($id);
    
    return view('banners.edit-banner', ['banner' => $banner]);
  }

  public function Update(Request $request,$id) {
    $banner = banner::findOrFail($id);

    $banner->title = $request->title;
    $banner->link = $request->link;

    if($request->hasFile('banner') && $request->file('banner')->isValid()) {

      unlink('images/banners/'.$banner->image);
      
      $requestImage = $request->banner;

      $extension = $requestImage->extension();

      $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

      $requestImage->move(public_path('images/banners'), $imageName);

      $banner->image = $imageName;
    }

    $banner->save();

    return redirect('/dashboard/banners');
  }

  public function destroy($id) {
    $banner = Banner::findOrFail($id);
      $isDeleted = Banner::destroy($id);

      if ($isDeleted) {
        unlink('images/banners/'.$banner->image);
        return redirect('/dashboard/banners');
      }
  }

}

