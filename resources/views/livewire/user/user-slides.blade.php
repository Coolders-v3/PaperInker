@extends('layouts.app')
@section('content')
@include('livewire.user.logo-user')
  <section class="profile">
    <div class="profilePic">
      <figure>
        <img src="{{ $userImg }}" alt="">
      </figure>
      <span class="userName">{{ $user->name }}</span>
    </div>
    <p class="userDescription">
      {{ $userDescription }}
    </p>
  </section>

  @if (!$user->isWriter)
    <section class="illustratorSample">
      <figure>
        <a href="{{ url('/showIllustrator') }}">
        <img src="{{ $highlightedWork->description }}" alt="">
        </a>
      </figure>
      {{-- <div class="imgInfo">
        <span class="imgTitle">{{ $highlightedWork->title }}</span>
        <span class="imgGenre">{{ $highlightedWork->genre }}</span>
        <span class="imgYear">{{ $highlightedWork->year }}</span>
      </div> --}}
    </section>
  @endif

  @if ($user->isWriter)
    <section class="writerSample">
      <a href="{{ url('/showWriter') }}" >
      <p >
        {{-- {{ $highlightedWork->title }}<br />
        {{ $highlightedWork->genre }}<br />
        {{ $highlightedWork->year }}<br /> --}}
        {{ $highlightedWork->description }}<br />
      </p>
    </a>
    </section>
  @endif

  </section>
  <div class="slideButtons">
    <a class="slideBtnLinks" href="{{ url('/slides') }}"><span class="iconify likeBtn" data-icon="cil:heart"
        data-inline="false"></span></a>
    <a class="slideBtnLinks" href="{{ url('/slides') }}"><span class="iconify nextBtn" data-icon="bi:x-lg"
        data-inline="false"></span></a>
  </div>
@endsection
