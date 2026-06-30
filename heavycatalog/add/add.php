<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $message = "";

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
    // Removing white spaces from user input

        $bandName = trim($_POST['band-name']);
        
    // Checking if this band already exists in a database

        $checkQuery = 'SELECT COUNT(*) FROM bands WHERE name = :name';
        $checkStmt = $pdo->prepare($checkQuery);
        $checkStmt->bindParam(':name', $bandName);
        $checkStmt->execute();

        if ( $checkStmt->fetchColumn() > 0 ) {

            $message = "This band already exists!";

        } else {

            $query = 'INSERT INTO bands(name) VALUES (:name)';
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':name', $bandName);
            $stmt->execute();

            $message = "Band added succesfully!";

        }
    } else {
        $message = "Unexpected error!";
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
    <header>
        <h2><?php echo $message; ?></h2>
    </header>
</body>
</html>