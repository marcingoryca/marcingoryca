<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $connect = 'mysql:host=localhost;dbname=heavycatalog';
    $user = 'root';
    $pass = 'root';

    try {
        $pdo = new PDO($connect, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    } catch (PDOException $e) {
        die('Unable to connect' . $e);
    }

    if (isset($_POST['band-name'])) {

        $query = 'INSERT INTO bands(name) VALUES (:name)';
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':name', $_POST['band-name']);
        $stmt->execute();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    
</body>
</html>