


<?php

	session_start();









	if(isset($_SESSION["username"]))
	{
		echo "Welcome "  .$_SESSION["username"];



		echo' <a href="loguot.php" ';
	}







	?>
	<html>


<script >
	
	alert("you are log in now ");

</script>



<button><a href="index.php">Go to  Home page </a></button>
	<button><a href="showuser.php">Show user Delete or Edit</a> </button>





	</html>