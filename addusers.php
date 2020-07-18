


<?php 


include 'contact.php';




?>


  <?php 
			
      


           if(isset($_POST['submit'])){  




      
       if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"])){

            echo "data missign";


        }

       else{    
             $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = 'INSERT INTO people (name, email, password) VALUES (:name, :email, :password)';
        
        

            $query = $pdo->prepare($sql);
            $query->bindParam('name', $name);
            $query->bindParam('email', $email);
            $query->bindParam('password', $password);
			
            $query->execute();
		
			
            header("Location: index.php");
        


}

}  
    
    ?>



    <!DOCTYPE html>
    <html>
    <head>
        <title>Signupi</title>


    </head>
    <body>
    
    </body>
    </html>

    <div class="mt-2">
        <div class="container">
            <form action="contact.php" method="POST">
                <input type="text" name="name" placeholder="Enter your name"><br>
                <input type="text" name="email" placeholder="Enter your email"><br>
                <input type="password" name="password" placeholder="Enter your password"><br>

                <input type="submit" name="submit" value="Sign up">
            </form>

            <button><a href="index.php">Go to home </a></button>
        </div>



  
   
    </div>



