<?php 
    session_start();
    $con = mysqli_connect("localhost", "root", "ciphron", "medio"); 
      // ("server", "user", "password", "db"); 
    $name = $_REQUEST['name']; 
  	$pass = $_REQUEST['pass'];
    if (!$con)  
  		die("Connection error: " . mysqli_connect_errno()); 
    $result = mysqli_query($con, "SELECT id, name, pass FROM user WHERE name='$name' "); 
    $row = mysqli_fetch_assoc($result);     /* fetch associative array */ 
    //echo $row['id'].' , '.$row["name"].' , '.$row["pass"].'<br>'; 

    if (md5($pass) == $row['pass']) {
 		echo 'Sie werden angemeldet';
 		$_SESSION['name'] = $row['name']; 
  		$_SESSION['id'] = $row['id']; 
    }
	else 
 		echo 'Falsche Anmeldedaten';
 ?>