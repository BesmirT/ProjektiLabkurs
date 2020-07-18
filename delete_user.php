<?php
    include 'contact.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $query = "DELETE FROM people WHERE id= :id";
    $query = $pdo->prepare($query);

    $query->execute(['id' => $id]);


    header("Location: showuser.php");


    ?>