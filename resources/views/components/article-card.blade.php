<div class="card" style="width: 18rem;">
    <img src="https://picsum.photos/200/201" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$title}}</h5>
        <p class="card-text">{{$description}}</p>
        <a href="{{ route('article', $articleId)}}" class="btn btn-primary">Ritorna agli Articoli.</a>
    </div>
</div>