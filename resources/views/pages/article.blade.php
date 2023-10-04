<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singolo_Article</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


    <ul class="nav justify-content-center bg-danger">
        <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active text-white" href="/chi_sono">Chi sono</a>
        </li>
    </ul>

    <h1 class="text-center fst-italic">I miei prodotti...</h1>
    <hr>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200/201" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article['title'] }}</h5>
                        <p class="card-text">{{ $article['description'] }}</p>
                        <a href="{{ route('articles') }}" class="btn btn-primary">Ritorna agli Articoli.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
