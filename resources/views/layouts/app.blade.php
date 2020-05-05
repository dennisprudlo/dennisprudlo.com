<!DOCTYPE html>
<html lang="{!! app()->getLocale() !!}" dir="ltr">
	<head>
		@include('layouts.head.base')
		@include('layouts.head.seo')
		@include('layouts.head.styles')
	</head>
	<body>
		@yield('content')
		@include('layouts.scripts.scripts')
	</body>
</html>
