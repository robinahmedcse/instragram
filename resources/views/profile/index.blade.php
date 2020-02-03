@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 ">
            <img src="{{$user->profile->profileImage() }}" class="logo_body w-80 rounded-circle">


        </div>
        <div class="col-8 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3"> 
                    <div class="h4">  {{ $user->username }} </div>
<!--                    <button class="btn btn-primary ml-4">Follow</button>-->
                        <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                </div>
                
                
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
