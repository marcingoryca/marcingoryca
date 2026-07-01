<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heavy Catalog, new home for heavy muic - ADD NEW</title>
</head>
<body>
    <header>
        <h1>Heavy Catalog</h1>
        <h4>New Home for Heavy Music</h4>
    </header>

    <section id="add-band">
        <h2>Add new band:</h2>

        <form action="add.php" method="post">
            <p><label for="band-name">Band Name:</label><input id="band-name" type="text" name="band-name"></p>
            <button type="submit" name="band-add-submit">Save</button>
        </form>
    </section>

</body>
</html>