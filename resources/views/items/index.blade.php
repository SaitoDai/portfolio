@extends('layouts.app')

@section('titel')
   <titel>ポートフォリオ</title>
@endsection

@section('content')
   @if(Auth::id() == null)
   @else
      <div class="d-flex mt-5">
         <a class="mx-auto" href="{{ route('items.create') }}">+Add</a>
      </div>
   @endif
   <div class="mt-5 mb-5 container">
      <div class="mt-5">
         <h4>2DCG</h4>
         <div class="row align-items-baseline">
            @foreach($images as $image)
               @if($image->category->id == 1)
                  <a class="col-4 text-center" href="{{ route('images.show', $image) }}">
                     <img class="d-inline-block" src="{{ asset($image->path) }}" />
                  </a>
               @endif
            @endforeach
         </div>
      </div>
      <div class="mt-5">
         <h4>3DCG</h4>
         <div class="row align-items-baseline">
            @foreach($images as $image)
               @if($image->category->id == 2)
                  <a class="col-4 text-center" href="{{ route('images.show', $image) }}">
                     <img class="d-inline-block" src="{{ asset($image->path) }}" />
                  </a>
               @endif
            @endforeach
         </div>
      </div>
      <div class="mt-5">
         <h4>3D Animation</h4>
         <div class="text-center mt-5">
            <video controls src="{{ asset( 'storage/20240506101.mp4' ) }}"></video>
         </div>
      </div>
      <div class="mt-5">
         <h4>Analog Painting or Drawing</h4>
         <div class="row align-items-baseline">
            @foreach($images as $image)
               @if($image->category->id == 4)
                  <a class="col-4 text-center mb-3" href="{{ route('images.show', $image) }}">
                     <img class="d-inline-block" src="{{ asset($image->path) }}" />
                  </a>
               @endif
            @endforeach
         </div>
      </div>
      <div class="mt-5">
         <h4>Metal Craft</h4>
         <div class="row align-items-baseline">
            @foreach($images as $image)
               @if($image->category->id == 5)
                  <a class="col-4 text-center" href="{{ route('images.show', $image) }}">
                     <img class="d-inline-block" src="{{ asset($image->path) }}" />
                  </a>
               @endif
            @endforeach
         </div>
      </div>
      <div class="mt-5">
         <h4>Programming</h4>
         <div class="row align-items-baseline">
            @foreach($images as $image)
               @if($image->category->id == 6)
                  <a class="col-6 text-center" href="{{ route('images.show', $image) }}">
                     <img class="d-inline-block" src="{{ asset($image->path) }}" />
                  </a>
               @endif
            @endforeach
         </div>
      </div>
   </div>
@endsection