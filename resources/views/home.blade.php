<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>home</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">
                                <a 
                                    href="https://it.wikipedia.org/wiki/{{ str_replace(' ', '_', $movie->title) }}"
                                    target="_blank"
                                >Wiki</a>
                                <hr>
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>