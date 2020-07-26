<html>
<head>
<title>
Form
</title>
</head>
<body>
<form action="usercontroller" method="POST">
@csrf
<input type="text" name="user"><br> <br>
<input type="password" name="password"><br> <br>
<button tyep ="submit"> Submit</button>
</form>
</body>
</html>
