



<?php



include "dbcon.php";
   


    if(isset($_POST["login"])){

    	if(empty($_POST["username"])	||	empty($_POST["password"])){
    		$messages='<label>"All fileds are required"</label>';


    	}


    	else {


    		$query="SELECT * FROM people WHERE name=:username AND password=:password";
    		$statement=$pdo->prepare($query);
    		$statement->execute(


    			array(

    				'username' => $_POST["username"],
    				'password' => $_POST["password"]



    			)

    		);

    		$count=$statement->rowCount();

    		if($count<=1)
    		{
    			$_SESSION["username"]=$_POST["username"];

    			header("location:login_s.php");
    		}

    		else{

    			$message= '<label> Wrong data </label>';
             
    		}
    	}
    }









?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="travel.css">
<head>
	<title>contact</title>
</head>
<body> 

    <div class="all">


    <div class="cont">

	<?php

	if(isset($message)){

		echo '<label class="text-danger">'.$message.'</label>';
	}


	?>


	<form  method="POST"> 

<input type="text" name="username" placeholder="name"> <br>

<input type="password" name="password" placeholder="passsword"><br>

<input type="submit" name="login" class="button" value="Login">

</form>
</div>
  <div class="contbutton">
<button><a style="text-decoration:none"href="index.php">Back Home</a></button>
</div>



   <h1> You dont have account Please Sign up <button><a style="text-decoration:none" href="addusers.php">Sign up </a></button> </h1>
</div>





</body>
</html>








