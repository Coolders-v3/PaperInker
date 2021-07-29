@extends('layouts.app')
@section('content')
@include('livewire.user.logo-user')
<section class="profile">
    <div>    
    <div class= "illustrationBox">
    </div>
</section>
<div class="illustrationDetail">
</div>
    <div class="slideButtons">
        <a class="slideBtnLinks" href="{{ url('/slides') }}"><span class="iconify likeBtn" data-icon="cil:heart"
            data-inline="false"></span></a>
        <a class="slideBtnLinks" href="{{ url('/showIllustrator') }}"><span class="iconify chatBtn" data-icon="bi:chat" data-inline="false"></span></a>
      </div>


</div>

@endsection
