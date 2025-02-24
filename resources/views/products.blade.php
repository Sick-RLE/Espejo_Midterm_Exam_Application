<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 600px; margin: auto; text-align: center; }
        .movie { border: 1px solid #ddd; padding: 10px; margin: 10px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Movies List</h1>
        @foreach($movies as $movie)
            <div class="movie">
                <h2>{{ $movie['title'] }}</h2>
                <p><strong>Genre:</strong> {{ $movie['genre'] }}</p>
                <p><strong>Year:</strong> {{ $movie['year'] }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
