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

<?php
echo "<p>Witaj ".$_SESSION['login'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
    
?>

    	<div class="header">
            <p class="nag">Nazwa Aplikacji</p>
    	</div>

        <img class="logo" src="img/logo_1.png" alt="logo"/>

    	<div class="container">
            <h2>DANE RESPONDENTA</h2>

            <p class="bold">Płeć</p>
            <input type="radio" name="Płeć" value="Kobieta" />Kobieta
            <input type="radio" name="Płeć" value="Mężczyzna" />Mężczyzna</p>
            
            <p class="bold">Wiek</p>
            <p class="form"><input type="radio" name="Wiek" value="15-19" />15-19<br />
            <input type="radio" name="Wiek" value="20-29" />20-24<br />
            <input type="radio" name="Wiek" value="30-39" />25-29<br />
            <input type="radio" name="Wiek" value="40-60" />30-34<br />
            <input type="radio" name="Wiek" value="40-60" />35-39<br />
            <input type="radio" name="Wiek" value="40-60" />40-44<br />
            <input type="radio" name="Wiek" value="40-60" />45-49<br />
            <input type="radio" name="Wiek" value="40-60" />50-54<br />
            <input type="radio" name="Wiek" value="40-60" />55-59<br />
            <input type="radio" name="Wiek" value="40-60" />60-64<br />
            <input type="radio" name="Wiek" value="40-60" />65-69<br />
            <input type="radio" name="Wiek" value="więcej niż 60" />Więcej niż 70</p>
            <br>
            <p class="bold">Miejsce zamieszkania</p>
            <input type="text" name="" list="lista">
                <datalist id="lista">
                <option value="Wieś">
                <option value="Miasto do 20 tyś. mieszkańców">
                <option value="Miasto od 20 tyś. do 50 tyś. mieszkańców">
                <option value="Miasto od 50 tyś. do 100 tyś. mieszkańców">
                <option value="Miasto od 100 tyś. do 200 tyś. mieszkańców">
                <option value="Miasto od 200 tyś. do 500 tyś. mieszkańców">
                <option value="Miasto powyżej 50 tyś. mieszkańców">
                </datalist>
            </input>
            <br><br>
            <p class="bold">Wykształcenie</p>
            <input type="text" name="" list="lista1">
                <datalist id="lista1">
                <option value="Podstawowe">
                <option value="Gimnazjalne">
                <option value="Zasadnicze zawodowe">
                <option value="Średnie">
                <option value="Wyższe">
                </datalist>
            </input>
            <br><br>
            <p class="bold">Status zawodowy</p>
            <input type="text" name="" list="lista2">
                <datalist id="lista2">
                <option value="Uczeń">
                <option value="Student">
                <option value="Wolny zawód">
                <option value="Emeryt/rencista">
                <option value="Bezrobotny">
                </datalist>
            </input>
            <br><br> 
            <!--<p class="bold">Województwo</p>
            <input type="text" name="" list="lista">
                <datalist id="lista">
                <option value="dolnośląskie">
                <option value="lubelskie">
                <option value="lubuskie">
                <option value="łódzkie">
                <option value="małopolskie">
                <option value="mazowieckie">
                <option value="opolskie">
                <option value="podkarpack">
                <option value="podlaskie">
                <option value="pomorskie">
                <option value="śląskie">
                <option value="świętokrzyskie">
                <option value="warmińsko-mazurskie">
                <option value="wielkopolskie">
                <option value="warmińsko-mazurskie">
                <option value="zachodniopomorskie">
                </datalist>
            </input>
            --> 
        <br>

        <button class="button" onclick="window.location.href='start.html' ">Powrót</button>     
        <button class="button" onclick="window.location.href='etap1.html' ">Przejdź do mapy</button>

        <br><br>
        </div>  
        
		<div class="footer">
			Prawa autorskie | &copy; 2016
		</div>
    </body>
</html>