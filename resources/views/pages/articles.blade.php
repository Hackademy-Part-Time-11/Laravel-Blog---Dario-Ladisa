<x-layout-main>

    <x-slot:title>Prodotti</x-slot>

    <h1 class="text-center fst-italic">I miei prodotti...</h1>
    <hr>
    <p class="text-danger text-center fst-italic">Sforneremo prossimamente. Ci scusiamo per il disagio.</p>

  
            @foreach ($articles as $article)
                <div class="col-md-4">
                    @if ($article['visible'])
                       <x-article-card :title="$article['title']" 
                       :description="$article['description']"
                       :article-id="$article['id']"
                       />
                    @else
                        <p>Articolo non disponibile.</p>
                    @endif
                </div>
            @endforeach

</x-layout-main>