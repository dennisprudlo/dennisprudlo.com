@extends('layouts.app')

@section('content')
	@include('layouts.components.navigation.topbar')
	<div class="section" id="about">
		<div class="layout__sheet">
			<h1>Hi, I am Dennis Prudlo</h1>
			<p>...a highly motivated <span class="-highlight">full stack web & iOS developer</span> based in the heart of Europe – Berlin. I started to learn programming on my own at age 13. Curious about new technologies and new possibilities in development I improved my skills in various languages since then.</p>
			<p>While developing websites and mobile applications I found out that I am very concerned about the overall design and usability. Turns out, I am a <span class="-highlight">UI/UX enthusiast</span>. User experience is the name of the game.</p>
		</div>
	</div>
	<div class="section" id="portfolio">
		<div class="layout__sheet">
			@foreach ($portfolio as $name => $properties)
				@include('components.project', ['name' => $name, 'properties' => $properties])
			@endforeach
		</div>
	</div>

	<br><br><br><br>

	<div class="section" id="feed">
		<div class="layout__extended-sheet">
			<div class="feed">
				@foreach ($images as $url => $date)
					<div class="feed__image" style="background-image: url({{ $url }})">
						<div class="feed__image-title">
							<span class="interaction--no-select">{{ $date->isoFormat('MMM D') }}</span>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	@include('layouts.components.footer')
@endsection
