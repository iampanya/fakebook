<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;

use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    function index(){
      $profile = Profile::firstOrNew(['user_id' => Auth::user()->getId()]);
      $posts = Auth::user()->posts()->orderBy('id', 'desc')->get();
      return view('profile.index')->with(['profile' => $profile, 'posts' => $posts]);
    }

    function edit() {
      $profile = Profile::firstOrNew(['user_id' => Auth::user()->getId()]);

      return view('profile.edit')->with('profile', $profile);
    }

    function store(Request $request) {
      $profile = Profile::firstOrNew(['user_id' => Auth::user()->getId()]);

      $profile->titlename = $request->titlename;
      $profile->firstname = $request->firstname;
      $profile->lastname = $request->lastname;
      $profile->user_id = Auth::user()->getId();
      $profile->work = $request->work;
      $profile->school = $request->school;
      $profile->hometown = $request->hometown;
      $profile->livetown = $request->livein;
      $profile->save();

      return redirect('/profile');
    }
}
