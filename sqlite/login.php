<?php
    $dir = 'sqlite:C:/sqlite/users.db';
    $dbh = new PDO($dir) or die ("cannot open");
    
    $myid = $_POST['id'];
    $mylogin = $_POST['user'];
    $mypassword = $_POST['pass'];

    $myid = stripslashes($myid);
    $mylogin = stripslashes($mylogin);
    $mypassword = stripslashes ($mypassword);

    $query = "SELECT * FROM users WHERE empid='$myid' AND login='$mylogin' AND password='$mypassword'";
    $result = mysql_query($query);
    $count = mysql_num_rows($result);

    if($count==1){
    echo'worked';
    }

?>
