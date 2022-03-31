<?php

namespace App\Http\Controllers;

use App\Models\Partner;


use Illuminate\Http\Request;

class PartnersController extends Controller
{
  public function index() {
    $partners = Partner::All()->sortByDesc('created_at');

    return view('partners.partners-dashboard', ['partners' => $partners]);
  }

  public function create() {
    return view('partners.create-partner');
  }

  public function store(Request $request) {
    $partner = new Partner;

    $partner->name = $request->name;

    // Image Upload
    if($request->hasFile('banner') && $request->file('banner')->isValid()) {

        $requestImage = $request->banner;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('images/partners'), $imageName);

        $partner->image = $imageName;
    }

    $partner->save();

    return redirect('/dashboard/parceiros');
  }

}
