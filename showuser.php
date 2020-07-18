<?php
	require 'contact.php';
    
	$query = $pdo->query('SELECT * FROM people');
    $people = $query->fetchAll();
?>
       
	<div class="mt-2">
        <div class="container">
 
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($people as $user):  ?>

                        <tr>
                            <td><?php echo $user['name']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                              <td><?php echo $user['password']; ?></td>
                            <td><a href="edit_user.php?id=<?php echo $user['id']; ?>">Edit</a></td>
                            <td><a href="delete_user.php?id=<?php echo $user['id']; ?>">Delete</a></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <button><a href="index.php">Go to Home Page</a></button>
        </div>
    </div>