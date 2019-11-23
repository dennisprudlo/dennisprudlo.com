<div class="project">
	<div class="project__title">
		<div style="background-image: url({{ $properties->appIconUrl }})"></div>
		<h3>{{ $name }}</h3>
	</div>
	<div class="project__preview">
		<p>{{ $properties->description }}</p>
		<div class="project__screens">
			@foreach($properties->imageUrls as $imageUrl)
				<div style="background-image: url({{ $imageUrl }})"></div>
			@endforeach
		</div>
	</div>
</div>
