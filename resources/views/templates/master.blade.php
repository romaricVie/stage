<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('templates/partials/_header')
<body>
	@include('templates/partials/_nav')
		<section>
			 @yield('content')
		</section>
	@include('templates/partials/_footer')
</body>
</html>