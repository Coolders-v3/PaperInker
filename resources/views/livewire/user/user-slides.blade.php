@extends('layouts.app')
@section('content')
  <div>
    <section class="profile">
      <div class="profilePic">
        <figure>
          <img src="{{ $userImg }}" alt="">
        </figure>
        <span class="name">{{ $user->name }}</span>
      </div>
      <p class="description">
        {{ $userDescription }}
      </p>
    </section>
  </div>
  <section>
    @if (Auth::user()->isWriter)

    @endif

    @if (!Auth::user()->isWriter)
      <div class="writerSample">
        <p>
          Mei eu mollis albucius, ex nisl contentiones vix. Duo persius volutpat at, cu iuvaret epicuri mei. Duo posse
          pertinacia no, ex dolor contentiones mea. Nec omnium utamur dignissim ne. Mundi lucilius salutandi an sea, ne
          sea aeque iudico comprehensam. Populo delicatissimi ad pri. Ex vitae accusam vivendum pro.
        </p>
      </div>
    @endif
  </section>
  <div class="slideButtons">
    <span class="iconify likeBtn" data-icon="cil:heart" data-inline="false"></span>
    <span class="iconify nextBtn" data-icon="bi:x-lg" data-inline="false"></span>
  </div>
@endsection
