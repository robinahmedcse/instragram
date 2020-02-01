<div>@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" method="post" enctype="multipart/form-data">
        @csrf
        
         <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>Add New Post</h1>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Post Caption</label>
                <div class="col-md-8">
                    <input id="name" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" 
                           name="caption" value="{{ old('caption') }}" 
                           required  autofocus>

                    @if ($errors->has('caption'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('caption') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="row">
                  <label for="image" class="col-md-4 col-form-label text-md-right">Post Image</label>
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
                <button class="btn btn-primary">Add New Post</button>
            </div>
            </div>
            
        </div>
    </div>
        
    </form>
</div>    
@endsection
</div>