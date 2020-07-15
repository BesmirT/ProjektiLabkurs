<?php

	session_start();


	if(isset($_SESSION["username"]))
	{
		echo "Welcome" .$_SESSION["username"];

		header("location:index.php");

		echo "welcome o ti";
	}

	


	?>