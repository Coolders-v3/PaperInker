@extends('layouts.app')
@section('content')
@livewire('user-info')
  @foreach ($illustrations as $illustration)
  <article class="samples">
    <div class="sampleCard">
      <figure class="sampleImg">
        <img src="{{ $illustration->jobIllustration }}">
      </figure>
      <div class="btn-group dropend dropDownMenu">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="iconify imgMenuDots" data-icon="heroicons-solid:dots-horizontal" data-inline="false"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#" class="dropdown-item">Edit</a></li>
          <li><a href="#" class="dropdown-item">Delete</a></li>
        </ul>
      </div>
    </div>
  </article>
  @endforeach
  <div class="buttons">
    <span class="iconify createBtn" data-icon="ant-design:plus-circle-outlined" data-inline="false"></span>
  </div>
@endsection