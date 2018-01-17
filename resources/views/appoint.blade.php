<html>
<head><title>sign in</title>

        <link href = "css/booking.css" rel = "stylesheet" >
        <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Concert+One|Lobster|Monoton|Righteous" rel="stylesheet">

</head>


<body>

	

	<div class = "header">

	 <h2 text-right>Blushing vision Beauty parlour</h2>
	
	</div>
	
		<div class = "booking_form">
			<form class= "" action="appoint_action" method="post">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="text" name="name" placeholder= "Enter User Name"><br>
					<input type="text" name="email" placeholder= "Enter User email"><br>

					<label>	service</label><br>
					<input list="service" name= "service" >
					<datalist id = "service"palceholder="select service you want" >
						<option value="	Hair Cut"></option>
						<option value="facial"></option>
						<option value="cleansing"></option>
						<option value="makeup"></option>
						<option value="waxing"></option>
						<option value="hair_treatment"></option>
						<option value="nail art"></option>
					</datalist><br>
					<input type="date" name= "date" palceholder="select service you want"><br>

					<input type="submit" value="Submit" name="submit"> 
					<input type="submit" value="Cancle" name= "cancle">
			</form>
		</div>
	</div>

</body>
</html>