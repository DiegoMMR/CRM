<!doctype html>

<html lang="es">
<head>
  <meta charset="utf-8">
  <title>@yield('title', 'Default') | Panel de Administración</title>
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>

<body>
	@include('admin.template.partials.nav')


<section>
@include('flash::message')
@include('admin.template.partials.errors')
	@yield('content')
</section>



<script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>


</body>
</html>