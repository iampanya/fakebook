<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    function index(){
      return view('profile.index')->with('name', 'Panya');
    }

    function edit() {
      return view('profile.edit');
    }
}
