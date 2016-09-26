<?php
    $dir = 'sqlite:G:/wwwroot/SQLite/user_information.db';
    $dbh = new PDO($dir) or die ("cannot open");

    $myusername = $_POST['user'];
    $mypassword = $_POST['pass'];

    $myusername = stripslashes($myusername);
    $mypassword = stripslashes ($mypassword);

    $query = "SELECT * FROM user_information WHERE username='$myusername' AND password='$mypassword'";
    $result = mysql_query($query);
    $count = mysql_num_rows($result);

    if($count==1){
    echo'worked';
    }

?>