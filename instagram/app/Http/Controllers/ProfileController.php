<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;
class ProfileController extends Controller
{
   
    public function index(User $user)
    {
      $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
      $followersCount = count((array)$user->profile->followers);
      $followingCount = $user->following->count();
        return view('profiles.index',compact('user', 'follows', 'followersCount','followingCount'));
    }

    public function edit(User $user)
    {
       return view('profiles.edit',compact('user','follows','followersCount'));
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
        $arr = ['image'=>$imagePath];
      }
      auth()->user()->profile->update(array_merge(
        $data,
        $arr ?? []
      ));
      return redirect("/profile/{$user->id}");
    }
}
