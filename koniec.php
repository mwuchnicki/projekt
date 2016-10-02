<?php
    session_start();  
    //jeżeli nie jest zalogowany to wróc do strony logowania
    if (!isset($_SESSION['zalogowany'])) 
    {
        header('Location: index.php');
        exit();//przekierowuje i wstrzymuje reszte kodu
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TYTUŁ</title>
	<link rel="stylesheet" type="text/css" href="css/start.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script src='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.js'></script>
    <link href='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.css' rel='stylesheet' />
</head>
    
<!--<script>  
  var powitanie="Witaj na stronie! Strona autorstwa Mateusza Wuchnickiego. Wszelkie prawa zastrzeżone";
  alert(powitanie);
  naglowek.innerHTML=powitanie;  
</script>-->
    <body>
	    


    	<div class="header">
            <p class="nag">Nazwa Aplikacji</p>
    	</div>

        <img class="logo" src="img/logo_1.png" alt="logo"/>

    	<div class="container">
            <h2>DZIĘKUJEMY ZA WYPEŁNIENIE GEOANKIETY</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum quam et lorem hendrerit, nec hendrerit ipsum aliquet. Aliquam id facilisis felis, id mollis sapien. Cras lacus lectus, varius ac mollis a, ullamcorper eget libero. Curabitur id ipsum tortor. Integer cursus nunc ut imperdiet viverra. Cras at ipsum semper, porttitor risus id, dignissim orci. Nullam dictum nisi risus. Sed porta purus at nulla scelerisque, vel bibendum metus posuere. Phasellus non laoreet purus. In hac habitasse platea dictumst. Vestibulum pretium quis augue blandit eleifend. Aenean commodo mollis magna at vehicula. Curabitur tempor ante quis odio convallis, vel rhoncus nisi luctus. Duis nisi lacus, molestie in euismod vitae, efficitur blandit lorem. Praesent rutrum ex dui, ut tincidunt lacus accumsan at.</p>
            <br> 
<?php
	echo "<p>Witaj ".$_SESSION['login'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
    
?>
        <!--<button class="button" onclick="window.location.href='logowanie.html' ">Wyloguj</button>-->

        </div>  
        
		<div class="footer">
			Prawa autorskie | &copy; 2016
		</div>
    </body>
</html>
