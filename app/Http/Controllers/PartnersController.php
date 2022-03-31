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


}
