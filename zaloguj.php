<?php

	session_start();
	//jezeli nie jest ustawiony login i haslo w globalnej tablicy POST to wróć do logowania
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		exit(); //zakończ wykonywanie dalszego kodu
	}

	require_once "users.db";
	$polaczenie = new PDO('sqlite:users.db'); 
	//$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno. "Opis".$polaczenie->connect_error;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		
		//bezpieczeństwo przed wstrzykiwanie sql
		//ENT_QUOTES - zamienia na encje " i '

		$login = htmlentities($login, ENT_QUOTES, "UTF-8"); //encja html (znaki nie będą częścią htmla)
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");

		$sql = "SELECT * FROM users WHERE login='$mylogin' AND password='$mypassword'";
			
		//%s - tam gdzie przebywa zmienna string
		//sqlite_escape_string - wykrywa wstrzykiwanie sql i blokuje

		if ($result = $polaczenie->query(
			sprintf("SELECT * FROM users  WHERE user='%s' AND pass='%s'",
			sqlite_escape_string($polaczenie,$login),
			sqlite_escape_string($polaczenie,$haslo))))

		{
			$ilu_userow = $result->num_rows;
			if($ilu_userow>0)
			{
				$_SESSION['zalogowany'] = true; //flaga - że jesteśmy zalogowani
				
				$wiersz = $result->fetch_assoc();
				//$_SESSION['empid'] = $wiersz['empid']; - może posłużyć do zapisywania zmian w bazie
				$_SESSION['login'] = $wiersz['login'];
				
				unset($_SESSION['blad']); //usuń zmienną z sesji (jeśli wszystko wyżej się zgadza)
				$result->free_result();
				header('Location: start.php'); //pamięta że jesteśmy już zalogowani
				
			} else {
				
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: index.php'); //wraca do logowania bo zle login/haslo
				
			}
			
		}
		
		$polaczenie->close();
	}
	
?>