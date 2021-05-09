<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;
class ProfileController extends Controller
{
   
    public function index(User $user)
    {
        return view('profiles.index',compact('user'));
    }

    public function edit(User $user)
    {
       return view('profiles.edit',compact('user'));
    }

    public function update(User $user)
    {
      $data = request()->validate([
          'title' => 'required',
          'description' => 'required',
          'url' => '',
          'image' => '',
      ]);
      if(request('image')) {
        $imagePath = request('image')->store('profile','public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(800,800);
        $image->save();
      }
      auth()->user()->profile->update(array_merge(
        $data,
        ['image'=>$imagePath]
      ));
      return redirect("/profile/{$user->id}");
    }
}
