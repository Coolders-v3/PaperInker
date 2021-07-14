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
    <span class="iconify createBtn" data-icon="ant-design:plus-circle-outlined" data-inline="false"></span>
  </div>

@endsection

