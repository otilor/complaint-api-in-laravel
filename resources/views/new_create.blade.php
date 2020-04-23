<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap/css/bootstrap.css">
	<title>Oya pele</title>
	<style type="text/css">
		.bg-1 {
			background-color: #000041;
			color: white;
			font-family: Product Sans;
			line-height: 1.5;
			
			margin-bottom: 3px;
			

		}

		.bg-2 {
			margin-top: 0px;
			background-color: #474e5d;
			color: white;
			font-family: JetBrains Mono;
			line-height: 1.5;
			padding-top: 39px;
			padding-bottom: 39px;

		}
		.form-control{
			font-family: JetBrains Mono;
			border: none;
			border-radius: 0px;
		}

		.btns{
			border: none;
			padding: 10px;
			background-color: #000000;
			color: #ffffff;
		}

		.btns:hover{
			border: none;
			padding: 10px;
			background-color: #474e5d;
			color: #ffffff;
			cursor: pointer;
		}

		
	</style>
</head>
<body>
	<div class="text-center">
		

		
	</div>
	<div class="bg-2 text-center">
			TimeTable Application by Gabriel Akinyosoye
	</div>

	<div class="container-fluid">
		@include ('inc.messages')
		<form name = "submit_email" action = "{{ action('AdminController@store') }}" method="POST">
			{{ csrf_field() }}
			<input type="email" class = "bg-1 form-control" name="email" placeholder="Your Email - File will be sent to this mail!">			
			<div class="">
				<input type="submit" name="" class="btns form-control" value="Generate">
			</div>
			
		</form>

		
			<a class = "btn btn-dark my-4" href="/">Go Home</a>
		
	</div>



<script type="text/javascript">
	document.submit_email.email.focus()
</script>
</body>
</html>