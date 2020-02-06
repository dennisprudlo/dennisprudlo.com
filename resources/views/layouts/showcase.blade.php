<!DOCTYPE html>
<html lang="{!! app()->getLocale() !!}" dir="ltr">
	@include('layouts.global.head')
	<body>
		<div class="showcase">
			<div class="showcase--left"></div>
			<div class="showcase--right"></div>
			<div class="showcase__overlay"></div>
		</div>
		<div class="showcase__panel">
			@yield('content')
		</div>
		@include('layouts.global.scripts')
	</body>
</html>
