<head>
	<!-- SEO -->
	<meta charset="utf-8">
	<meta name="viewport"		content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="keyword"		content"dennis prudlo dennisprudlo berlin portfolio ios web development freelance full stack frontend backend front back end @yield('meta-keywords')">
	<meta name="description"	content="I am a highly motivated full stack web & iOS developer based in the heart of Europe – Berlin. I started to learn programming on my own at age 13. Curious about new technologies and new possibilities in development I improved my skills in various languages since then.">
	<meta name='copyright'		content='Copyright &copy; {{ Carbon\Carbon::now()->year }} Dennis Prudlo'>
	<meta name='language'		content='{!! app()->getLocale() !!}'>
	<meta name='robots'			content='index,follow'>

	<meta name="mobile-web-app-capable"					content="yes">
	<meta name="theme-color"							content="white">
	<meta name="screen-orientation"						content="portrait">
	<meta name='apple-mobile-web-app-capable'			content='yes'>
	<meta name="apple-mobile-web-app-title"				content="Dennis Prudlo">
	<meta name='apple-touch-fullscreen'					content='yes'>
	<meta name='apple-mobile-web-app-status-bar-style'	content='white'>
	<meta name='format-detection'						content='telephone=no'>
	<link rel="apple-touch-icon"						href="{!! asset('/images/favicon/200.png') !!}">
	<link rel="icon" sizes="192x192"					href="{!! asset('/images/favicon/200.png') !!}">
	<link rel="apple-touch-startup-image"				href="{!! asset('/images/favicon/512.png') !!}">
	@yield('seo')

	<meta property="og:site_name"	content="Hi, I am Dennis Prudlo | dennisprudlo.com">
	<meta property="og:title"		content="Hi, I am Dennis Prudlo | dennisprudlo.com">
	<meta property="og:description"	content="I am a highly motivated full stack web & iOS developer based in the heart of Europe – Berlin. I started to learn programming on my own at age 13. Curious about new technologies and new possibilities in development I improved my skills in various languages since then.">
	<meta property="og:url"			content="https://dennisprudlo.com">
	<meta property="og:secure_url"	content="https://dennisprudlo.com">
	<meta property="og:type"		content="website">
	<meta property="og:image"		content="{!! asset('/images/favicon/256.png') !!}">

	<title>@yield('title', 'Hi, I am Dennis Prudlo') | dennisprudlo.com</title>

	{{-- Favicon --}}
	<link rel="icon" href="{!! asset('/images/favicon/256.png') !!}" type="image/png">
	{{-- Bootstrap --}}
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	{{-- Fonts --}}
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	{{-- Icons --}}
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	{{-- Custom --}}
	<link rel="stylesheet" href="{!! asset('css/dennisprudlo.min.css') !!}">
	@yield('css')
</head>
