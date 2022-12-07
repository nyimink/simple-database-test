<?php


    include ('mysql.php');

    $db = connect();

    $id = $_GET['id'];

    $sql = "DELETE FROM roles WHERE id = $id";

    $db->query($sql);

    header('location: index.php');