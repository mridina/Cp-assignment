
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Concert+One|Lobster|Monoton|Righteous" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->

        <link href = "css/style.css" rel = "stylesheet" >


        <style>
                
        </style>
        
    </head>
    <body >
    <div class = "parlour_body">


@extends('navigation')

@section('content')


<div class = "slider">
    <div class="w3-content w3-section" style="max-width:1500px">
        <div class = "slider_mm">
          <img class="mySlides w3-animate-top" src="../img/mm.jpg" style="width:100%">
        </div>                                    
         <div  class = "slider_mm">
             <img class="mySlides w3-animate-bottom" src="../img/my.jpg" style="width:100%">
          </div>
          <div  class = "slider_mm">
             <img class="mySlides w3-animate-top" src="../img/aaa.jpg" style="width:100%">
          </div>
      </div>
</div>




        <div class = "section">
          <p>At the Beauty Parlour, we believe in beauty with a conscience.
          We have create a salon that offers the highest quality hair service in a setting that is healthier for the environment,
           our guest and our staff. The Beauty parlour is designed and built primarily with recycled materails; the floor is made of 
           reclamied wood from a local grain elevator - preserving and showcasting its natural texture- and most of the fixtures 
           and furniture and refurdished or original vintage pieces.

           <div class = "image_section">
              <img src = "../img/woman-massage-720-400.jpg" width="50%">


           </div>


        </div>

        <hr>


        <div class = "service">

        <h2> Service WE Provide</h2>

          <div class = "hair_cut">
            <h3 class = "text-center"> Hair cut</h3>
            <p>The right haircut makes all the difference. Our professionals start
             with a thorough consultation and customize each cut for the client’s 
             most beautiful result. </p>


          </div>

          <div class = "facial">
            <h3 class = "text-center"> Facial</h3>
            <p>The right haircut makes all the difference. Our professionals start
             with a thorough consultation and customize each cut for the client’s 
             most beautiful result. </p>


          </div>

           <div class = "hair_extansions">
            <h3 class = "text-center">Hair Extensions</h3>
            <p>The right haircut makes all the difference. Our professionals start
             with a thorough consultation and customize each cut for the client’s 
             most beautiful result. </p>


          </div>



        </div>



</p>
</div>



<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500);    
}
</script>




@endsection                         
</div>
                         
    </body>
</html>
