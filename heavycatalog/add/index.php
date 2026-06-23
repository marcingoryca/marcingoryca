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

    <section id="add-new-buttons">
        <h2>Add</h2>
        <p>Add new band:<button name="add-new-band" type="button">+</button></p>
        <p>Add new album:<button name="add-new-album" type="button">+</button></p>
        <p>Add new genre:<button name="add-new-genre" type="button">+</button></p>
        <p>Add new person:<button name="add-new-person" type="button">+</button></p>
        <p>Add new track:</button name="add-new-track" type="button">+</button></p>
    </section>

    <section id="add-band">
        <h2>Add new band:</h2>

        <form action="" method="post">
            <p><label for="band-name">Band Name:</label><input id="band-name" type="text" name="band-name"></p>
            <p><label for="band-country">Country:</label><input id="band-country" type="text" name="band-country"></p>
            <p><label for="band-origin">Origin:</label><input id="band-origin" type="text" name="band-origin"></p>
            <p><label for="band-formed-in">Formed in:</label><input id="band-formed-in" type="text" name="band-formed-in"></p>
            <button type="submit" name="band-add-submit">Click to add</button>
        </form>
    </section>

    <section id="add-album">
        <h2>Add album:</h2>
        <form action="" method="post">
        <p><label for="album-title">Album Title:</label><input id="album-title" type="text" name="album-title"></p>
        <p><label for="album-release-year">Album Release Year:</label><input id="album-release-year" type="text" name="album-release-year"></p>
        <button type="submit" name="album-add-submit">Click to add</button>
        </form>
    </section>

    <section id="add-genre">
        <h2>Add genre:</h2>
        <form action="" method="post">
            <p><label for="genre-name">Genre:</label><input id="genre-name" name="genre-name"></p>
            <button type="submit" name="genre-add-submit">Click to add</button>
        </form>
    </section>

    <section id="add-person">
        <h2>Add person:</h2>
        <form action="" method="post">
            <p><label for="person-firstname">First Name:</label><input id="person-firstname" type="text" name="person-firstname"></p>
            <p><label for="person-lastname">Last Name:</label><input id="person-lastname" type="text" name="person-lastname"></p>
            <p><label for="person-role">Role:</label><input id="person-role" type="text" name="person-role"></p>
            <p><label for="person-band">Band:</label><input id="person-band" type="text" name="person-band"></p>
            <button type="submit" name="person-add-submit">Click to add</button>
        </form>    
    </section>

    <section id="add-track">
        <h2>Add track:</h2>
        <form action="" method="post">
            <p><label for="track-title">Track title:</label><input type="text" id="track-title" name="track-title"></p>
            <p><label for="track-duration">Track duration:</label><input type="number" id="track-duration" name="track-duration"></p>
            <button type="submit" name="track-add-submit">Click to add</button>
        </form>
    </section>

</body>
</html>