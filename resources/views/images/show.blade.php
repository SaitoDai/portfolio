@extends('layouts.app')

@section('content')
@if(Auth::user())
  <div class="mt-5 d-flex">
    <div class="ms-auto mx-auto">
      <a href="{{ route('items.edit', $image) }}">edit</a>
    </div>
  </div>
@endif
<div class="d-flex justify-content-center mb-5">
    <img class="mt-5" src="{{ asset($image->path) }}" />
</div>
<div class="d-flex flex-column mb-5">
  <p class="display-6 mx-auto">{{ $image->caption }}</p>
  <div class="mx-auto">{{ $image->description }}</div>
</div>
<div class="d-flex justify-content-center mb-5">
  <a href="{{ route('items.index') }}">TOP</a>
</div>
@endsection