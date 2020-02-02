 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$posts->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex">
                    <div class="pr-3">
                        <img src="{{$posts->user->profile->profileImage()}}"
                             class="rounded-circle w-100" style="max-width: 50px;">
                    </div>
                    <div>
                        <div class="font-weight-bold"><a href="/profile/{{$posts->user->id}}">
                                <span class="text-dark"> {{$posts->user->username}}</span>
                            </a>
                            <a href="#" class="pl-3">Follow</a>
                        </div>
                    </div>
                </div>
                <hr>
                
                <p>  <span class="font-weight-bold"><a href="/profile/{{$posts->user->id}}">
                   <span class="text-dark"> {{$posts->user->username}}</span>
                        </a></span> {{$posts->caption}}</p>
            </div>
        </div>
    </div>
 
</div>
@endsection 