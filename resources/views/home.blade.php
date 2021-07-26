@extends('layouts.app')
@section('title', __('Dashboard'))
@section('content')
@if (Auth::user()->isWriter == true) {
    @include('livewire.texts.view', ['texts' => $texts])
} @elseif (Auth::user()->isWriter != true) {
    @include('livewire.illustrations.view', ['illustrations' => $illustrations])
}
@endif


@endsection
