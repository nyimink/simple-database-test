<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Role</title>
</head>
<body>

        <?php
            
            include ('mysql.php');

            $db = connect();

            $id = $_GET['id'];

            $result = $db->query("SELECT * FROM roles WHERE id = $id");

            $row = $result->fetch();

        ?>

        <h1>Update Role</h1>
        <form action="update.php" method="post">
            <input type="hidden" name="id" placeholder="id" value="<?= $row->id ?>">
            <input type="text" name="name" placeholder="Name" value="<?= $row->name ?>"> <br><br>
            <input type="text" name="value" placeholder="Value" value="<?= $row->value ?>"> <br><br>

            <button type="submit">Update</button>
        </form>
    
</body>
</html>