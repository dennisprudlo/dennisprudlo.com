@extends('layouts.app')

@section('content')
	<div class="error">
		<div class="error__inner">
			<div class="error__inner-status">
				<h1>4<span></span>4</h1>
			</div>
			<h2>Oops! <span>Page Not Found</span></h2>
			<p>I don't know what you're looking for, but you won't find it here.</p>
			<a href="{!! route('get-index') !!}">Back to homepage</a>
		</div>
	</div>
@endsection
