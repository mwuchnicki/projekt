<?php

	session_start();
	
	session_unset();
	
	header('Location: projekt/index.php');

?>