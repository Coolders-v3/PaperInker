@extends('layouts.app')

@section('content')
<div class="form-group">
  {{-- <form class="form-group" method="POST" action="">   --}}      
    <input wire:model="title" class="form-control mb-3 mt-3" type="text" placeholder="Title" aria-label="default input example" required>
    @error('title') <span> {{ $message }} </span> @enderror

    <input wire:model="genre" class="form-control mb-3 mt-3" type="text" placeholder="Genre" aria-label="default input example" required>
    @error('genre') <span> {{ $message }} </span> @enderror

    <input wire:model="year" class="form-control mb-3 mt-3" type="text" placeholder="Year" aria-label="default input example" required>
    @error('year') <span> {{ $message }} </span> @enderror

    <input type="textarea" wire:model="description" class="form-control mb-3 mt-3" cols="30" rows="5" placeholder="Description" required></textarea>
    @error('description') <span> {{ $message }} </span> @enderror

    <button wire:click="store" class="btn btn-primary">Save</button>
 {{--  </form> --}}
</div>

@endsection
