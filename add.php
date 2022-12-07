<?php


        $db = new PDO('mysql:dbhost=localhost;dbname=practisedb', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]);


        $name = $_POST['name'];
        $value = $_POST['value'];

        $sql = "INSERT INTO roles (name, value) VALUES ( :name, :value)";
        // echo $sql;
        // $db->query($sql);

        $statement = $db->prepare($sql);
        $statement->execute([ "name" => $name, "value" => $value ]);

        header('location: index.php');