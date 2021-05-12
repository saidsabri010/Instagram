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
                <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width:40px" alt="">
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
       <form class="d-flex align-items-center"
                    method="post" 
                    action="/p/{{$post->id}}"> 
            
                    @csrf
                    @method('DELETE')
            
                    <button
                      type="submit"
                      onclick="return confirm('Are you sure?')"
                      class="btn btn-sm btn-fill btn-primary">Remove</button>
                  </form>
   </div>
    </div>
</div>
@endsection