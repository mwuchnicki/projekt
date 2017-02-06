<?php
	
	session_start();
	//jeśli ktoś jest zalogowany
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: index.php');
		exit();//naychmiastowe dzialanie kody wyzej
	}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>GEOANKIETA - LOGOWANIE</title>

	<link rel="stylesheet" type="text/css" href="css/logowanie.css">


</head>

<body>
	<div class="header">
            <p class="nag">
            <?php 
            	$baza = './baza/generator.db'; 
            	$db = new SQLite3($baza) or die('Nie mogę otworzyć bazy!'); 

            	$results = $db->query(sprintf("SELECT tytul FROM przyklad")); 
                while($rows = $results->fetchArray(SQLITE3_ASSOC)) {
                print_r($rows['tytul']);
                };
        	?>	
    		</p>
    	</div>

        <img class="logo" src="img/logo_1.png" alt="logo"/>

    	<div class="container">
            <h2>PANEL LOGOWANIA</h2>
            <form action="zaloguj.php" method="post">
	
				<p class="logowanie">Login:<br><input type="text" name="login" /> <br><br>
				Hasło:<br><input type="password" name="haslo" /></p>
				<br>
				
				<input type="submit" value="Zaloguj się" />
				
				<!--<a href="start.html">Zaloguj się</a>-->
			</form>
		</br>

<?php 
	//pokazuje błąd logowania tylko jeśli istnieje w sesji 
	//(isset - czy jest ustawiona w sesji)
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>

        </div>  
        
		<div class="footer">
			Prawa autorskie | &copy; 2016
		</div>	
	


</body>
</html>

