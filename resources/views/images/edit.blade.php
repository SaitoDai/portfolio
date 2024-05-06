@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center mb-5">
    <img class="edit-img mt-5" src="{{ asset($image->path) }}" />
</div>
<form action="{{ route('items.update', $image) }}" method="post">
  @csrf
  @method('patch')
  <div class="d-flex justify-content-center flex-column mb-5">
    <input class="mb-2 form-control mx-auto edit-caption" type="text" name="caption" value="{{ $image->caption }}"/>
    <textarea class="form-control mx-auto edit-description" name="description" rows="10">{{ $image->description }}</textarea>
  </div>
  <div class="d-flex">
    <div class="m-auto">
      <button class="btn btn-success">update</button>
    </div>
  </div>
</form>
@if(Auth::user())
  <form class="mt-5 mb-5 d-flex">
    <div class="mx-auto">
      <button class="btn btn-danger">delete</button>
    </div>
  </form>
@endif
@endsection