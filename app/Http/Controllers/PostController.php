<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //dodawanie usuwanie wyswietlanie postów

    // metoda index wyświetla wszystkie posty
    public function index() 
    {
        // return Post::latest('date')->toSql();
        $posts = Post::latest('date')->get();
        return view('pages.posts', compact('posts'));
        
    // kolejne zapis który daje ten sam efekt
    // return view('pages.posts', [
    //     // 'nazwa zmiennej przekazana do widoku' => wartość zmiennej 
    //     'posts' => $posts        
    // ]);
    // return view('pages.posts')->with('posts', $posts);
    // return view('pages.posts')->withPosts($posts);
    }
    public function show($id)
    {
        // $posts = Post::where('id', $id)->first();
        // // zwraca model
        // $posts = Post::where('id', $id)->get();
        // // zwraca kolekcje i dopiero iterujemy
        // $posts = Post::whereId('id', $id);
        // // metoda specjalna dla laravela z klasy Model gdzie Id oznacza nazwę kolumny w szukanym modelu
        $post = Post::findOrFail($id);
        // ostatnia metoda to użycie findOrFail - metoda sprawdza się jedynie przy wyszukiwaniu po indeksie
        // if(is_null($post)) return abort(404); jest to samo co findOrfail($id)
        return view('pages.post', compact('post'));
    }
}
