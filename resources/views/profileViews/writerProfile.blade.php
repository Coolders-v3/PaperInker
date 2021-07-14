@extends('layouts.app')

@section('content')
@livewire('test-component')
  <section class="writerProfile">
    <div class="writerProfilePic">
      <figure>
        <img
          src="https://cultivatedculture.com/wp-content/uploads/2019/12/LinkedIn-Profile-Picture-Example-Sami-Viitama%CC%88ki-.jpeg"
          alt="">
      </figure>
      <span class="writerName">Writer's Name</span>
    </div>
    <p class="writerDesc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
      the industry's standard dummy text ever since the 1500s.</p>
  </section>
  <article class="writerSample">
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Genre</th>          
          <th scope="col">Year</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($texts as $text)
        <tr>
          <td>{{ $text->title }}</td>
          <td>{{ $text->jobGenre }}</td>          
          <td>{{ $text->yearOfCreation }}</td>
        </tr>
       @endforeach
      </tbody>
    </table>
  </article>
  <div class="buttons">
    <span class="iconify likeBtn" data-icon="cil:heart" data-inline="false"></span>
    <span class="iconify crossBtn" data-icon="emojione-monotone:cross-mark" data-inline="false"></span>
  </div>

@endsection

