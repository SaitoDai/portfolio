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
<div class="mw-80 mx-auto d-flex justify-content-center flex-column">
  <div class="d-flex mb-5 flex-column">
    <p class="display-6 text-center mx-auto">{{ $image->caption }}</p>
    <div class="mx-auto">{{ $image->description }}</div>
  </div>
  <div class="d-flex justify-content-center mb-5">
    <a href="{{ route('items.index') }}">TOP</a>
  </div>
</div>
@endsection