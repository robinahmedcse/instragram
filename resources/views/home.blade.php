@extends('layouts.app')

@section('content')
<div class="container">


    <!--    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>-->
    <div class="row">
        <div class="col-4 ">
            <img src="{{asset('/photo/logo.jpg')}}" class="logo_body">


        </div>
        <div class="col-8 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>  {{ $user->username }} </h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>350</strong>Post</div>
                <div class="pr-5"><strong>20K</strong>Followers</div>
                <div class="pr-5"><strong>100</strong>Following</div>
            </div>
            
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
             <div class="">{{$user->profile->description}}</div>
             <div class=""><a href="#">{{$user->profile->url ?? 'N/A' }}</a></div>


        </div>

    </div> <!--end of row-->
    
    <div class="row pt-5">
        <div class="col-4 ">
            <img src="{{asset('/photo/3.png')}}" class="w-100">
        </div>
         <div class="col-4">
            <img src="{{asset('/photo/4.png')}}" class="w-100">
        </div>
         <div class="col-4">
            <img src="{{asset('/photo/5.jpg')}}" class="w-100">
        </div>
    </div>







</div>
@endsection
