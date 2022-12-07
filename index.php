<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Roles</title>
</head>
<body>

        <h1>Role list</h1>

            <?php

                include('mysql.php');

                $db = connect();

                // $db = new PDO('mysql:dbhost=localhost;dbname=practisedb', 'root', '', [
                //     PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                // ]);

                $result = $db->query("SELECT * FROM roles");
            ?>

            <ul>
                <?php while($row = $result->fetch()) : ?>
                    <li>
                        <?= $row->name ?> <?= $row->value ?>
                        <a href="edit.php?id=<?= $row->id ?>">Edit</a>
                        <a href="del.php?id=<?= $row->id ?>">Del</a>
                    </li>
                <?php endwhile ?>
            </ul>

            <a href="new.php">Add new?</a>
</body>
</html>