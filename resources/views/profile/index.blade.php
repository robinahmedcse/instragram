@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 ">
            <img src="{{asset('/photo/logo.jpg')}}" class="logo_body">


        </div>
        <div class="col-8 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>  {{ $user->username }} </h1>
                <a href="/p/create">Add New Post</a>
                
            </div>
            
         
             <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
          
            
            
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count() }}</strong> Post</div>
                <div class="pr-5"><strong>20K</strong> Followers</div>
                <div class="pr-5"><strong>100</strong> Following</div>
            </div>
            
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
             <div class="">{{$user->profile->description}}</div>
             <div class=""><a href="#">{{$user->profile->url ?? 'N/A' }}</a></div>


        </div>

    </div> <!--end of row-->
    
    <div class="row pt-5 ">
     @foreach($user->posts as $post)
        <div class="col-4 pb-5">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image }}" class="w-100">
            </a>
        </div>
     @endforeach
    </div>







</div>
@endsection
