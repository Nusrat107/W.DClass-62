<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-commerce Website</title>
	
    @include('Frontend.include.style')
</head>
<body>
	
 @include('Frontend.include.header')
	<main>
		@yield('contant')
	</main>



    @include('Frontend.include.footer')
	@include('Frontend.include.script')
</body>
</html>