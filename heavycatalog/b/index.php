<?php

/*
   Presenting results of a search

*/

$result = NULL;
$message = "";
// TODO: Change this!
$user = 'root';
$pass = 'root';
$connection = 'mysql:host=localhost;dbname=heavycatalog';

try {
    $pdo = new PDO($connection, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection not established' . $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['searcher'])) {
        $bandName = trim($_POST['searcher']);
        $query = 'SELECT * FROM bands WHERE name=:name';
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':name', $bandName);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $message = "There is no such band yet!";
        }
    } else {
        $message = "Sorry, no data!";
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
    <header>
        <h1>Bands</h1>
    </header>

    <section id="band-details">
        <h2>Band details</h2>
        <?php

            // Test only 
            // TODO: Change result set to something nice and useful
            if (isset($result)) {
                foreach ($result as $row) {
                    echo $row['id'] . $row['name'] . $row['formed_in'] . $row['country'];
                }
            } else {
                echo $message;
            }

        ?>
    </section>
</body>
</html>