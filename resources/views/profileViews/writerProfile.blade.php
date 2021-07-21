@extends('layouts.app')

@section('content')
  @livewire('user-info')
  <article class="samples">
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

