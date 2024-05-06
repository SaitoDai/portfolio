@extends('layouts.app')

@section('titel')
   <titel>登録</title>
@endsection

@section('content')
<div class="mt-5 mb-5 py-5 d-flex align-items-center flex-column">
	<div class="mb-5">
		<h4>Upload</h4>
		<form action="{{ route('images.store') }}" method="post" enctype="multipart/form-data">
			@csrf
			@method('post')
			<input type="file" name="image"/>
			<select name="category_id">
				@foreach($categories as $category)
					<option value="{{ $category->id }}">{{ $category->name }}</option>
				@endforeach
			</select>
			<button class="btn btn-success" type="submit">Submit</button>
		</form>
	</div>
</div>
@endsection