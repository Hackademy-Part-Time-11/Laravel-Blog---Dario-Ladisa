<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

        <li class="nav-item">
            <a class="nav-link active text-white" href="/contatti">Contatti</a>
        </li>
    </ul>

    <h1 class="text-center fst-italic">I miei prodotti...</h1>
    <hr>
    <p class="text-danger text-center fst-italic">Sforneremo prossimamente. Ci scusiamo per il disagio.</p>

    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4">
                    @if ($article['visible'])
                        <div class="card" style="width: 18rem;">
                            <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article['title'] }}</h5>
                                <p class="card-text">{{ $article['description'] }}</p>
                                <a href="{{route('article',$article['id'])}}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    @else
                        <p>Articolo non disponibile.</p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>




    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
