<html   >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
      <link href='https://fonts.googleapis.com/css?family=Sunshiney' rel='stylesheet'>
        <!-- Styles -->

        <link href = "css/log.css" rel = "stylesheet" >
        <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Concert+One|Lobster|Monoton|Righteous" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
        <style>
                
        </style>
        
    </head>
    <body >

    <div class = "section"> 
    @if(Session::has('success'))
        <div class ="alert alert-success">
            
            {{Session::get('success')}}
        </div>
    @endif
        <div class = "tab">
          <button class = "tablinks" onclick="openDash(event,'Home')"
          id="defaultOpen"><i class= "fa fa-home"></i>Home</button>
          <button class = "tablinks" onclick="openDash(event,'Profile')"><i class= "fa fa-user">profile</button>
          <button class = "tablinks")"><a href="appoint"> Book service</a></button>
          <button class = "tablinks")"><a href="{{URL::to('/update')}}"> Update service</a></button>
          

        </div>

        <div id= "Home" class = "tabcontent">

        <div class = "tab_home">

            <div class = "head_tab"><h3>Blusing Vision Beauty Parlour</h3>
            <h5>Shankhamul Marg, New Baneshwor, Kathmandu.</h5>
              <a href= "{{URL::to('/logout')}}">Logout</a>                              
            </div>

            <div class= "left_side">
            <p >Blush Hair Salon & Make-up Studio

is a perfect reflection of the Bucks County community it serves: sophisticated 
and discerning but also warm and approachable. We pride ourselves in providing
some of the most highly skilled, NY-trained hair and make-up artists in the area,
combined with an echelon of personalized service that is second to none. Our goal
is to create long-term relationships with our clients, so we are committed to do
whatever it takes to ensure your complete satisfaction, including reservicing you 
at no additional cost if necessary.
We invite you to browse our site to learn more about what sets Blush apart.</p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/pPqySxcuSbo" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>


     </div>
            <div class= "mid_section">

            <h2>Welcome to Blush:</h2>
            <p>
            Where You’ll Get the Best Service Ever; 
            That’s Our Personal Guarantee.
            Creating the right look for you – 
            one that fits your personality, your lifestyle, 
            your sense of beauty – is best accomplished with a highly
            skilled stylist who will work in partnership with you.
            Someone who can listen to your wants and desires and have a 
            true commitment to your personal satisfaction. That is what
            you will find at Blush. We have a long-term perspective about our 
            clients and if we don’t achieve exactly what you want the first time around,
             you have our personal guarantee that we will do whatever it takes to achieve
            your style goals. That’s the Blush Difference.
            <p>
            <img src = "../img/12h.png" width="50%">


            </div>
        

            </div>
        </div>

        <div id= "Profile" class = "tabcontent">

        <div class = "tab_home">

            <div class = "head_tab"><h3>Blusing Vision Beauty Parlour</h3>
            <h5>Shankhamul Marg, New Baneshwor, Kathmandu.</h5>
                                            
            </div>
        </div>

        
        </div>


        
        <div id= "Service" class = "tabcontent">

        <h3>Service We Provide for you</h3>
        <p></p>

        </div>

        <div id= "Bill" class = "tabcontent">

        <h3>11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111</h3>
        <p>ahsjdajgsd</p>

        </div>
a
        

        <script>
        function openDash(evt, dashName){
          var i, tabcontent,tablinks;
          tabcontent= document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(dashName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
        </script>
                         
    </body>
</html>
