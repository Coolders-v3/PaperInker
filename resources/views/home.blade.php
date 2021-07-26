@extends('layouts.app')
@section('title', __('Dashboard'))
@section('content')
@if (Auth::user()->isWriter == true) {
  
    @include('livewire.texts.view', ['texts' => $texts])
     @include('livewire.texts.create', ['texts' => $texts])
      @include('livewire.texts.index', ['texts' => $texts])
       @include('livewire.texts.update', ['texts' => $texts])
      
   
} @elseif (Auth::user()->isWriter != true) {
    @include('livewire.illustrations.view', ['illustrations' => $illustrations])
      @include('livewire.illustrations.create', ['illustrations' => $illustrations])
        @include('livewire.illustrations.index', ['illustrations' => $illustrations])
          @include('livewire.illustrations.update', ['illustrations' => $illustrations])
       
}
@endif
@endsection


