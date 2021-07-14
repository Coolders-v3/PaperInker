@extends('layouts.app')

@section('content')
  @livewire('user-info')
 
  @livewire('read-writer')
 
 

  <div class="buttons">
    <span class="iconify createBtn" data-icon="ant-design:plus-circle-outlined" data-inline="false"></span>
  </div>

@endsection

