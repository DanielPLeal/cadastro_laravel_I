<!DOCTYPE html>
<html>
	<head>
		<link href="{{ URL::to('css/app.css') }}" rel="stylesheet">	
		<title>Cadastro de Produtos</title>
		<meta name="csrf-token" content="{{ csrf_token() }}}">
		<style>
		 	body {
				padding-top: 20px;
		 	}	
		 	.navbar {
		 		margin-bottom: 20px;
		 	}		
		</style>
	</head>
<body>
	<div class="container">
		@component('componente_navbar', ["current" => $current])
		@endcomponent
		<main role="main">
			@hasSection('body')
				@yield('body')
			@endif
		</main>
	</div>
	
	<script src="{{ URL::to('js/app.js') }}" type="text/javascript"></script>

	@hasSection('javascript')
		@yield('javascript')
	@endif

</body>
</html>