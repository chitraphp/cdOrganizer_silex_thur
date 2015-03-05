<html>
<head>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
    <title>CD Organizer</title>
</head>
<body>
    <div class='container'>

        <h1> Create a new cd</h1>
        <form action='/create_cd' method='post'>
            <div class='form-group'>
                <label for='title'>Enter album title</label>
                <input id='title' name='title' type='text' class='form-control'>
            </div>
            <div class='form-group'>
                <label for='artist'>Enter artist</label>
                <input id='artist' name='artist' type='text' class='form-control'>
            </div>
            <div class='form-group'>
                <label for='price'>Enter price</label>
                <input id='price' name='price' type='number' class='form-control'>
            </div>
            <div class='form-group'>
                <label for='cover_art'>Enter cover art</label>
                <input id='cover_art' name='cover_art' type='text' class='form-control'>
            </div>
            <button type='submit' class='btn btn-success'>Submit</button>
        </form>

        <form action='/delete_all' method='post'>
            <div class='form-group'>
                <button class='btn btn-danger' type='submit'>Delete All</button>
            </div>
        </form>

        {% if cds is not empty  %}
        <h2>CD List</h2>
        <ul>
            {% for cd in cds %}
                <li><img src={{ cd.getCoverArt }}></li>
                <li>{{ cd.getTitle}} by {{ cd.getArtist}} ${{ cd.getPrice}}</li>
            {% endfor %}
        </ul>
        {% endif %}

    </div>
</body>
</html>
