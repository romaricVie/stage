<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('templates/partials/_header')
<body>
		<section>
			 @yield('content')
		</section>
	@include('templates/partials/_footer')
</body>
</html>