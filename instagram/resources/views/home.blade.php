@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-3">
          <img  class="img-fluid" src="http://techfameplus.com/wp-content/uploads/2015/01/Spartan-Logo-design-By-Haider-Ali.png" class="img-rounded">
        </div>
        <div class="col-9">
            <div>
                <h2> <b> {{ Auth::user()->username }}</b> </h2>
            </div>
            <div class="d-flex">
                <div class="pl-5" > <strong>10K</strong> Posts </div>
                <div class="pl-5" ><strong>7K</strong> Followers</div>
                <div class="pl-5" ><strong>500</strong> Following</div>
            </div>
            <div class="font-weight-bold pt-4" >{{$user->profile->title}}</div>
            <div>
                {{$user->profile->description}}
            </div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-4 ">
        <div class="col-4" >
            <img  src="https://images.pexels.com/photos/48753/pexels-photo-48753.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" style="width:100%">
        </div>
        <div class="col-4" >
            <img src="https://images.pexels.com/photos/7057/desk-office-computer-imac.jpg?auto=compress&cs=tinysrgb&h=750&w=1260" style="width:100%">
        </div>
        <div class="col-4">
            <img src="https://images.pexels.com/photos/7374/startup-photos.jpg?auto=compress&cs=tinysrgb&h=750&w=1260" style="width:100%">
        </div>
    </div>
</div>
@endsection
