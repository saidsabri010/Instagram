@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-8">
    <img src="/storage/{{$post->image}}" class="w-100" alt="">
</div>
   <div class="col-4">
       <div>
           <div class="d-flex align-items-center">
            <div class="pr-20">
                <img src="/storage/{{$post->user->profile->image}}" class="rounded-circle w-100" style="max-width:40px" alt="">
            </div>
            <div class="pl-2">
                <div class="font-weight-bold">
                    <a href="/profile/{{$post->user->id}}"><span class="text-dark">{{$post->user->username}}</span></a>
                    <a class="pl-2" href="#">Follow</a>
                </div>
            </div>
           </div>
           <hr>
           <p>
               <span  class="font-weight-bold">
                   <a href="/profile/{{$post->user->id}}"><span class="text-dark">{{$post->user->username}}</span></a>
                </span> {{$post->caption}}
            </p>
           
       </div>
   </div>
    </div>
</div>
@endsection