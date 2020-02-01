<div>@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$userById->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        
         <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>Edit Profile</h1>
            </div>
            
<!--            title-->
            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>
                <div class="col-md-8">
                    <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" 
                           name="title" value="{{ old('title')?? $userById->profile->title }}" 
                           required  autofocus>

                    @if ($errors->has('caption'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title')  }}</strong>
                    </span>
                    @endif
                </div>
            </div>
<!--            Description-->
               <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                <div class="col-md-8">
                    <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" 
                           name="description" value="{{ old('description') ?? $userById->profile->description }}" 
                           required  autofocus>

                    @if ($errors->has('caption'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

<!--            url-->
       <div class="form-group row">
                <label for="url" class="col-md-4 col-form-label text-md-right">Url</label>
                <div class="col-md-8">
                    <input id="description" type="text" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" 
                            name="url" value="{{ old('url') ?? $userById->profile->url}}" 
                           required  autofocus>

                    @if ($errors->has('caption'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('url') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            
            
           <!--            image--> 
            
            <div class="row">
                  <label for="image" class="col-md-4 col-form-label text-md-right">Profile Image</label>
                  <div class="col-md-8"> 
                <input type="file" class="form-control-file" id="image" name="image">
                  @if ($errors->has('image'))
                 
                        <strong>{{ $errors->first('image') }}</strong>
                 
                    @endif
                     </div> 
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                 <div class="col-md-8 pt-4 ">
                <button class="btn btn-primary">Update Profile Info</button>
            </div>
            </div>
            
        </div>
    </div>
        
    </form>
</div>    
@endsection
</div>