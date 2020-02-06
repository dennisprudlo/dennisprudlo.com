<!DOCTYPE html>
<html lang="{!! app()->getLocale() !!}" dir="ltr">
	@include('layouts.global.head')
	<body>
		@yield('content')
		@include('layouts.global.scripts')
	</body>
</html>
