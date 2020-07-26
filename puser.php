<?php
	include 'dbcon.php';


	if(isset($_SESSION["username"]))
	{
		
    $name=($_SESSION["username"]);



	}

    
    
	$query = $pdo->query("SELECT name,email ,password ,id FROM people WHERE 

		name='$name'");
    $people = $query->fetchAll();







?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="contact.css">
<head>
	<title> User Data</title>
</head>
<body>




	
            <table>
                <thead>
                	<div class="userd">
                    <tr>
                    	Your Data!You can Change
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </div>


                </thead>
                <tbody>
                </tbody>



                    <?php 

                 
               


                    foreach($people as $user):  ?>




                        <tr>
                            <td><?php echo $user['name']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                              <td><?php echo $user['password']; ?></td>
                            <td><a href="edit_user.php?id=<?php echo
                            $user['id']; ?>">Edit</a></td>
                          
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
       <button><a href="index.php">Go to  Home page </a></button>
       
     	
    </div>
</body>
</html>