@extends('layouts.app')
@section('personaldescription')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  @livewireStyles
  
  
</head>
<body>

  <title>User's name</title>
  
  @livewireScripts

<div class="container">
@livewire('image-upload')
<form class="form-horizontal" method="GET">
@foreach ($errors->all() as $error)
    <span class="alert alert-danger">{{ $error}}</span>
@endforeach
      <div class="form-group align-self-start">
          <h5 for="personaldescription">Tell us something about you</h5>
      <textarea wire:model= "file" name="personaldescription" id="personaldescription" cols="30" rows="10" class="form-control ml-1" value="{{ old('personaldescription')}}"></textarea>
      </div>
      <div class="form-group">
          <button type="submit" name="save-user-bio" class="btn btn-primary float-lg-left" method="POST" action="{{ route('illustrations') }}"> <!-- //canviar ruta cuando esté arreglado// -->
        Submit</button>
      </div>
</form>
	
{!! csrf_field() !!}

    </div>
      </div>
</div>
</body>
</html>
@endsection
