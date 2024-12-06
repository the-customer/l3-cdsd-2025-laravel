<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = $this->getAllArticles();
        return view('articles.index', compact('articles'));
    }


    private function getAllArticles()
    {
        $articles = [
            ['id' => 1, 'titre' => 'Macky Sall : la grosse rumeur', 'contenu' => 'Contenu de l\'article 1', 'image' => 'https://images.seneweb.com/dynamic/modules/news/images/gen/fb/1bd0327d40a6c4019deb1b2d33c1c3b492493193.jpg'],
            ['id' => 2, 'titre' => 'Sport
            Test antidopage : pourquoi Modou Lô a accepté de patienter deux heures à l’Arène nationale après sa victoire contre Siteu (un proche)', 'contenu' => 'Contenu de l\'article 1', 'image' => 'https://images.seneweb.com/dynamic/modules/news/images/gen/fb/3bedf0c42bcb4124e1b9677797f9fdf67067c61f.jpg'],
            ['id' => 3, 'titre' => 'Samuel Sarr : son dossier se corse', 'contenu' => 'Contenu de l\'article 1', 'image' => 'https://images.seneweb.com/dynamic/modules/news/images/gen/fb/24ac5c9dd2113e375450f7eae722f64ea159a954.jpeg'],
            ['id' => 4, 'titre' => 'Le Président Wade est retourné en France, il a voyagé avec...', 'contenu' => 'Contenu de l\'article 1', 'image' => 'https://images.seneweb.com/dynamic/modules/news/images/gen/fb/bee7995d0a982247e9bd5fa8c25e0e9e926faccd.jpg'],
            ['id' => 5, 'titre' => 'Assemblée nationale : Les véhicules des anciens députés récupérés', 'contenu' => 'Contenu de l\'article 1', 'image' => 'https://images.seneweb.com/dynamic/modules/news/images/gen/fb/34f6ccdc111e7415460f89ec29aabd7d92546bd7.jpg'],

        ];
        return $articles;
    }
}
