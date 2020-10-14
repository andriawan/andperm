<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<div>
		@if(count($errors) > 0)
			{{ $errors }}
		@endif
		<form action="/login" method="POST" >
			@csrf
			<input type="text" name="email">
			<input type="password" name="password">
			<input type="submit" value="Submit">
		</form>
	</div>

</body>
</html>