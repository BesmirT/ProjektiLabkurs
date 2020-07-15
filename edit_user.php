<?php 
	require 'contact.php';

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
		
		//Poashtu mundemi mos mi bo bind parametrat dhe tek metoda execute e bonja pass nje array
		//dhe e ka efektin e njejt
		/*$query->execute([
			'name' => $name,
			'email' => $email,
			'id' => $id,
		]);*/
		
        header("Location: addusers.php");
    }
?>

<div class="mt-2">
    <div class="container">
        

        <form method="post">
            <ul>
              <li>
              <input type="text" name="name" value="<?php echo $user['name']; ?>" placeholder="Enter your name"><br>
         </li>
         <li>
            <input type="text" name="email" value="<?php echo $user['email']; ?>" placeholder="Enter your email"><br>
        </li>
            <input type="text" name="password" value="<?php echo $user['password']; ?>" placeholder="Enter your pasword"><br>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>
