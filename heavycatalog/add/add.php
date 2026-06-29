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

    if (isset($_POST['band-name']) && isset($_POST['band-country']) && isset($_POST['band-formed-in'])) {
// Removing white spaces from user input

        $bandName = trim($_POST['band-name']);
        $bandCountry = trim($_POST['band-country']);
        $formedIn = trim($_POST['band-formed-in']);

// Checking if this band already exists in a database

        $checkQuery = 'SELECT COUNT(*) FROM bands WHERE name = :name';
        $checkStmt = $pdo->prepare($checkQuery);
        $checkStmt->bindParam(':name', $bandName);
        $checkStmt->execute();
        /*$checkStmt->execute([
            'name' => $bandName, 'country' => $bandCountry, 'formed_in' => $formedIn
        ]);*/

        if ( $checkStmt->fetchColumn() > 0 ) {
            $message = "This band already exists!";
        } else {
            $bandOrigin = trim($_POST['band-origin']);
            $query = 'INSERT INTO bands(name, country, formed_in, origin) VALUES (:name, :country, :formed_in, :origin)';
            $stmt = $pdo->prepare($query);
            //$stmt->bindParam(':name', $bandName);
            $stmt->execute([
                'name' => $bandName,
                'country' => $bandCountry,
                'formed_in' => $formedIn,
                'origin' => $bandOrigin
            ]);

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