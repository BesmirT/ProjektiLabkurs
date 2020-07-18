



<?php



session_start();

$host="localhost";
$username="root";
$password="";
$database="labkurs";
$message="";	

try{
    $pdo = new PDO("mysql:host=localhost;dbname=labkurs", "root" , "");

   
    echo "database connect";    


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
}







catch(PDOException $error){
    die("Unsuccessful connection");
    echo "database not connect";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>contact</title>
</head>
<body>

	<?php

	if(isset($message)){

		echo '<label class="text-danger">'.$message.'</label>';
	}


	?>


	<form  method="POST"> 

<input type="text" name="username" placeholder="name"> <br>

<input type="password" name="password" placeholder="passsword"><br>

<input type="submit" name="login" class="button" value="Login">

<button><a href="index.php">Back Home</a></button>



   <h1> You dont have account Please Sign up <button><a href="addusers.php">Sign up </a></button> </h1>


</body>
</html>








