<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>

	<h1>Welcome {{(\Auth::guard('writer')->check())? \Auth::guard('writer')->user()->name : 'N/A'}}</h1>

</body>
</html>