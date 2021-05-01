@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-3">
          <img  class="img-fluid" src="http://techfameplus.com/wp-content/uploads/2015/01/Spartan-Logo-design-By-Haider-Ali.png" class="img-rounded">
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <h2> <b> {{ Auth::user()->username }}</b> </h2>
                <a href="/p/create">Add new Post</a>
            </div>
            <a href="/profile/{{$user->id}}/edit">Edit profile</a>
            <div class="d-flex">
                <div class="pl-5" > <strong>{{$user->posts->count()}}</strong> Posts </div>
                <div class="pl-5" ><strong>7K</strong> Followers</div>
                <div class="pl-5" ><strong>500</strong> Following</div>
            </div>
            <div class="font-weight-bold pt-4" >{{$user->profile['title']}}</div>
            <div>
                {{$user->profile['description']}}
            </div>
            <div><a href="#">{{$user->profile['url']}}</a></div>
        </div>
    </div>
    <div class="row pt-5 ">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4" >
            <a href="/p/{{$post->id}}">
                <img  src="/storage/{{$post->image}}" style="  width:  100%; height: 100%;">
            </a>
        </div>
        @endforeach
       
    </div>
</div>
@endsection
