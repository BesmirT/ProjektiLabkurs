



<?php



include "dbcon.php";
   


     if(isset($_POST["login"])){

        if(empty($_POST["username"])    ||  empty($_POST["password"])){
        echo "Name or password its empty";


        }


        else {


            $query="SELECT * FROM people WHERE name=:username AND password=:password";

            $statement=$pdo->prepare($query);
            $statement->execute(


                array(

                    'username' => $_POST["username"],
                    'password' => $_POST["password"],
                   


                )

            );

            $count=$statement->rowCount();

            if($count>0)
            {
                $_SESSION["username"]=$_POST["username"];



                  if(empty($_POST["access"]=="admin") || empty($_POST["username"]=="admin") ){

                        echo "<h1>You are user you not acces to data <h1>";
                    }
                    else{


                header("location:login_s.php");
            }



            if(empty($_POST["access"]=="user") ){ 

           
            }
            else {
                   header("location:puser.php");

            }
            
            }

            else{

              echo "wrong data or not register ";
             
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
<input type="text" name="access" placeholder="access"> <br>

<input type="password" name="password" placeholder="passsword"><br>

<input type="submit" name="login" class="button" value="Login">

</form>
</div>
  <div class="contbutton">
<button><a style="text-decoration:none"href="index.php">Back Home</a></button>
</div>


<div class="h1">
   <h1> You dont have account Please Sign up <button><a style="text-decoration:none" href="addusers.php">Sign up </a></button> </h1> 
</div>
</div>





</body>
</html>








