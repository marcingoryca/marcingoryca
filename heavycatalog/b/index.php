<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user = 'root';
        $pass = 'root';

        $connection = 'mysql:host=localhost;dbname=heavycatalog';

        try {
            $pdo = new PDO($connection, $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection not established' . $e->getMessage();
        }

        if (isset($_POST[''])) {
            $query = 'SELECT * FROM bands WHERE id= ?';
            $stmt = $pdo->query($query);
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>