<html>
<head><title>sign in</title>

        <link href = "css/sign_style.css" rel = "stylesheet" >
        <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Concert+One|Lobster|Monoton|Righteous" rel="stylesheet">

</head>


<body>
	<div class = "header">

	 <h2 text-right>Blushing vision Beauty parlour</h2>
	<a href="index">Back</a>

	</div>

	<div class = "section"> 
	@if(Session::has('success'))
		<div class ="alert alert-success">
			
			{{Session::get('success')}}
		</div>
	@endif


	<form class = "sign_in" action="sign_action" method="post">
	<h3> Sign Up Form</h3>
		<div class= "form_contains">
			

				<form method="post" action="">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type= "text" placeholder= "Enter User Name" name= "un" required>
					<input type= "text" placeholder= "Enter Full Name" name= "fn" required>
					<input type= "text" placeholder= "Contact Number" name= "cn" required>
					<input type= "text" placeholder= "Email id" name= "em" required>
					<input type= "text" placeholder= "address" name= "add" required>
					<input type= "password" placeholder= "password" name= "pwd" required>
					<input type= "password" placeholder= "Please Re-enter your password" name= "rpwd" required>
					<div class = "button">
					<input type="submit" value="Submit" name="submit"> 
					<input type="submit" value="Cancle" name= "cancle">
					</div>



				</form>

		</div>
	</form>

	</div>









</body>


</html>