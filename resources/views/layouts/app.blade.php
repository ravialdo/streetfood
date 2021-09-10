<!doctype html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <!-- My Style -->
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">

	@livewireStyles
	
     <title>Korea Street Food</title>
</head>
<body>

     @yield('body')

	<!-- footer -->
	<div class="container-fluid bg-primary py-5">
		<div class="text-center">
			Copyright &copy; <span class="copyright">Korea Street Food</span> 2021
		</div>
	</div>
	
     <!-- IonIcons JS -->
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <!-- Bootstrap Bundle JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	@livewireScripts
</body>
</html>