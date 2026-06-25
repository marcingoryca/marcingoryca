<?php

$connect = 'mysql:host=localhost;dbname=heavycatalog';
$user = 'root';
$pass = 'root';

try {
    $pdo = new PDO($connect, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->query('SELECT id FROM bands');
} catch (PDOException $e) {
    die('Unable to connect' . $e);
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