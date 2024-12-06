@extends('layouts.base')

@section('title')
    Toto
@endsection
@section('content')
<section id="latest-post">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4 py-3" data-masonry='{"percentPosition": true }'>
            @foreach($articles as $article)
                <div class="col-lg-4">
                    <div class="card bg-light rounded-4 shadow border-0">
                        <a href="#">
                            @if (!$article->image)
                                    <img src="{{ env('DEFAUL_ARTICLE_IMG') }}" class="card-img-top">
                            @else

                                <img src="{{ $article->image }}" class="card-img-top">
                            @endif
                        </a>

                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#"
                                    class="text-decoration-none">
                                    {{ Str::limit($article->title,40) }}
                                </a>
                            </h4>
                            <p class="card-text mt-3">
                                {{ Str::limit($article->content,100) }}
                            </p>
                        </div>
                        <div class="card-footer border-0">
                            <a href="#"
                                class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
