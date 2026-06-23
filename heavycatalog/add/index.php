<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heavy Catalog, new home for heavy muic - ADD NEW</title>
</head>
<body>
    <figure>
        <h1>Heavy Catalog</h1>
        <h4>New Home for Heavy Music</h4>
    </figure>

    <section id="add-new-buttons">
        <h2>Add</h2>
        <p><label for="add-new-band">Add new band:</label><button name="add-new-band">+</button></p>
        <p><label for="add-new-album">Add new album:</label><button name="add-new-album">+</button></p>
        <p><label for="add-new-genre">Add new genre:</label><button name="add-new-genre">+</button></p>
        <p><label for="add-new-person">Add new person:</label><button name="add-new-person">+</button></p>
    </section>

    <section id="add-band">
        <h2>Add new band:</h2>

        <form action="" method="post">
            <p><label for="band-name">Band Name:</label><input type="text" name="band-name"></p>
            <p><label for="band-country">Country:</label><input type="text" name="band-country"></p>
            <p><label for="band-origin">Origin:</label><input type="text" name="band-origin"></p>
            <p><label for="band-formed-in">Formed in:</label><input type="text" name="band-formed-in"></p>
            <input type="submit" name="band-add-submit" value="Click to add">
        </form>
    </section>

    <section id="add-album">
        <h2>Add album:</h2>
        <form action="" method="post">
        <p><label for="album-title">Album Title:</label><input type="text" name="album-title"></p>
        <p><label for="album-release-year">Album Release Year:</label><input type="text" name="album-release-year"></p>
        <input type="submit" name="album-add-submit" value="Click to add">
    </section>

</body>
</html>