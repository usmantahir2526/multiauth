<!DOCTYPE html>
<html>
<head>
	<title>Writer Index</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
</head>
<body>
<br>
<br>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				@if (session()->has('success'))
					<p class="alert alert-success">{{session()->get('success')}}</p>
				@endif
				<h2 class="text-center text-primary">Writer Registration Form</h2>
				<form action="/writer" method="POST">
					@csrf
					<label>Enter Name:</label>
					<input type="text" name="name" placeholder="Enter Name" required="" class="form-control">
					<label>Enter Email:</label>
					<input type="email" name="email" placeholder="Enter Email" required="" class="form-control">
					<label>Enter Password:</label>
					<input type="password" name="password" placeholder="Enter Password" required="" class="form-control">
					<br>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>	
	</div>

</body>
</html>