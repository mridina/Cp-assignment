<html>
<head><title>parlour log in</title>
<link href = "css/log.css" rel = "stylesheet" >
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>

<body>
<div class = "full">
@extends('navigation')

@section('content')

<div class = "container">


<div class = "form-contain">

<form method="post" action="login_check">
		<h2> Log in here</h2>
			
<input type="hidden" name="_token" value="{{csrf_token()}}">
<label>Email-id</label>
<input type= "text" placeholder= "Email id" name= "em" required><br>

<lable> Password</lable>
<input type= "password" placeholder= "password" name= "pwd" required><br>

<div class= "button">
		<input type="submit" value="Submit" name="submit"> 
		<input type="submit" value="Cancle" name= "cancle">

</div>
					

</form>
</div>
</div>
@endsection
</div>
</body>


</html>