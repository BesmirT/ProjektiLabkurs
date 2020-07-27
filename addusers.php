


<?php 


include 'dbcon.php';




?>  <?php 
      
      


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

                 echo"data insertted";
      
            $query->execute();
    
      
            header("Location:index.php");


        


}

}  
    
    ?>






    <!DOCTYPE html>
    <html>
    <link rel="stylesheet" type="text/css" href="travel.css">
    <head>
        <title>Signupi</title>



    </head>
    <body>
    
   

    <div class="all1">
        <div class="cont1">
            <form action="" method="POST">
                <input type="text" name="name" placeholder="Enter your name"><br>
                <input type="text" name="email" placeholder="Enter your email"><br>
                <input type="password" name="password" placeholder="Enter your password"><br>

                <input type="submit" name="submit"   value="Sign up">
            </form>

           
        </div>
        <div class="allbutton">
 <button><a style="text-decoration:none"  href="index.php">Go to home </a></button>
</div>

   <h2> You have account Sign in  <button><a style="text-decoration:none"  href="contact.php">Sign In</a></button> </h2>


  
   
    </div>



 </body>
    </html>
