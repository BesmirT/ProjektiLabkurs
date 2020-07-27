<?php 
	require 'dbcon.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $sql = 'SELECT * FROM people WHERE id = :id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);

    $user = $query->fetch();
	
	if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];   
        $password=$_POST['password'];

   $sql = 'UPDATE people SET name = :name, email = :email, password=:password WHERE id = :id ';
        $query = $pdo->prepare($sql);
        $query->bindParam('name', $name);
        $query->bindParam('email', $email);
        $query->bindParam('password',$password);
        $query->bindParam('id', $id);

        $query->execute();
		
	
		
        header("Location: contact.php");
    }
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="travel.css">
<head>
    <title>Edit</title>
</head>
<body>

</body>
</html>

<div class="mt-2">  

    <div class="Data">
    Edit your Data
    </div>

        

        <form method="post">
            <ul>
              <li>Name
              <input type="text" name="name" value="<?php echo $user['name']; ?>" placeholder="Enter your name"><br>
         </li>
         <li>
            Email
            <input type="text" name="email" value="<?php echo $user['email']; ?>" placeholder="Enter your email"><br>
        </li>
        <li>Password
            <input type="text" name="password" value="<?php echo $user['password']; ?>" placeholder="Enter your pasword"><br></li>



              <input type="submit" name="submit" value="Submit" class="button">
        </ul>
        </form>

</div>

</body>
</html>