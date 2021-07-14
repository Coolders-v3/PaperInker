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
        <tr>
          <td>Example Book 1</td>
          <td>Comedy</td>
          <td>2015</td>
        </tr>
        <tr>
          <td>Example Book 2</td>
          <td>Thriller</td>
          <td>2016</td>
        </tr>
        <tr>
          <td>Example Book 3</td>
          <td>Romance</td>
          <td>2019</td>
        </tr>
        <tr>
          <td>Example Book 1</td>
          <td>Comedy</td>
          <td>2015</td>
        </tr>
        <tr>
          <td>Example Book 2</td>
          <td>Thriller</td>
          <td>2016</td>
        </tr>
        <tr>
          <td>Example Book 3</td>
          <td>Romance</td>
          <td>2019</td>
        </tr>
        <tr>
          <td>Example Book 1</td>
          <td>Comedy</td>
          <td>2015</td>
        </tr>
        <tr>
          <td>Example Book 2</td>
          <td>Thriller</td>
          <td>2016</td>
        </tr>
        <tr>
          <td>Example Book 3</td>
          <td>Romance</td>
          <td>2019</td>
        </tr>
        <tr>
          <td>Example Book 1</td>
          <td>Comedy</td>
          <td>2015</td>
        </tr>
        <tr>
          <td>Example Book 2</td>
          <td>Thriller</td>
          <td>2016</td>
        </tr>
        <tr>
          <td>Example Book 3</td>
          <td>Romance</td>
          <td>2019</td>
        </tr>
      </tbody>
    </table>
  </article>
  <div class="buttons">
    <span class="iconify likeBtn" data-icon="cil:heart" data-inline="false"></span>
    <span class="iconify crossBtn" data-icon="emojione-monotone:cross-mark" data-inline="false"></span>
  </div>
@endsection
