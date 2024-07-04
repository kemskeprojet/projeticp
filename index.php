<!DOCTYPE html>
  <html>
      <head>
          <title> </title>
          <link rel= "stylesheet"href ="style.css"/>
          <style>

	/* .blocHeader{
		display: flex;
		height:40px;
		padding: 5px 5px;
		flex-flow: row wrap;
		 
		background-color:#F5F5DC; 
	} */

	.marqueur marquee{
		position: absolute;
		top: 1px;
		left: 150 px;
		text-align: center; 
		color: orange;
		border:none;
	}
	
	.marqueur marquee span{
		 
		margin:5px;
		padding: 10px;
		 color: white;
		font-size:25px;
		opacity: 1px;
	   
      
	}
	 .blocHeader img{
		height:40px;
		width: 450px;
		padding: 0px;
		flex-flow: row wrap;
		justify-content: space-between;
		 
	}
	

/* Message bulle */
	/* a span{
		               
	} */
a span{
    
     margin-top:23px;
     margin-left:-35px;
}
a span{
    color:white;
     background:rgba(0,0,0,.9);
     padding:15px;
     border-radius:5px;
     box-shadow:0 0 2px rgba(0,0,0,.5);
}
a span{
 
     transform:scale(0) rotate(-12deg);
}	
	a:hover span, a:focus span{
     transform:scale(1) rotate(0);        
}

a span{
     
     transition:all .25s;
}

a span{
      
     opacity:0;
}
a:hover span, a:focus span{
     
    opacity:1;
    content:""; 
    border-left:10px solid transparent;
    border-right:20px solid transparent;
    border-top: 20px solid #139ee0;
    position: absolute;
}

body {
            background-image: url('dé.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: -1;
            padding: -1;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

  </style>
  
   
<body>
		<div class="marqueur">
			<marquee  behavior="alternate" style="border:solid" scrolldelay="2">
				<span>BIENVENUE  SUR DEPLAY<span>
			</marquee>
		</div>
	</div>
		</div>
      <button> <a href="">Jouer En tant que Visiteur</a></button>
      <button> <a href="">Se connecter</a></button>
      <button> <a href="formulaire1.php">Creer un compte</a></button>
   </body>
  </html>