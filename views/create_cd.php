<html>
<head>
    <title>Cd Organizer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>You created a new cd</h1>
        <p>Title: {{ newcd.getTitle }}</p>
        <p>Artist: {{ newcd.getArtist }}</p>
        <p>Price: {{ newcd.getPrice }}</p>
        <p>Cover Art: {{ newcd.getCoverArt }}</p>
        <p><a href="/">Home</a></p>
    </div>
</body>
</html>
