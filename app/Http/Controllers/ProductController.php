<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $movies = [
            ["title" => "Inception", "genre" => "Sci-Fi", "year" => 2010],
            ["title" => "The Dark Knight", "genre" => "Action", "year" => 2008],
            ["title" => "Interstellar", "genre" => "Sci-Fi", "year" => 2014],
            ["title" => "Parasite", "genre" => "Thriller", "year" => 2019],
            ["title" => "Avengers: Endgame", "genre" => "Superhero", "year" => 2019],
            ["title" => "Gladiator", "genre" => "Action", "year" => 2000],
            ["title" => "The Lord of the Rings: The Fellowship of the Ring", "genre" => "Fantasy", "year" => 2001],
            ["title" => "Finding Nemo", "genre" => "Animation", "year" => 2003],
            ["title" => "The Grand Budapest Hotel", "genre" => "Comedy", "year" => 2014],
            ["title" => "Mad Max: Fury Road", "genre" => "Action", "year" => 2015],
            ["title" => "La La Land", "genre" => "Romance", "year" => 2016],
            ["title" => "Get Out", "genre" => "Horror", "year" => 2017],
            ["title" => "Black Panther", "genre" => "Superhero", "year" => 2018],
            ["title" => "Joker", "genre" => "Crime", "year" => 2019],
            ["title" => "1917", "genre" => "War", "year" => 2019],
            ["title" => "The Social Network", "genre" => "Drama", "year" => 2010],
            ["title" => "Django Unchained", "genre" => "Western", "year" => 2012],
            ["title" => "Gravity", "genre" => "Sci-Fi", "year" => 2013],
            ["title" => "The Revenant", "genre" => "Adventure", "year" => 2015],
            ["title" => "Deadpool", "genre" => "Superhero", "year" => 2016],
            ["title" => "A Star Is Born", "genre" => "Drama", "year" => 2018],
            ["title" => "The Matrix", "genre" => "Sci-Fi", "year" => 1999],
            ["title" => "Frozen", "genre" => "Animation", "year" => 2013],
            ["title" => "Guardians of the Galaxy", "genre" => "Superhero", "year" => 2014],
            ["title" => "The Wolf of Wall Street", "genre" => "Drama", "year" => 2013],
            ["title" => "Blade Runner 2049", "genre" => "Sci-Fi", "year" => 2017]
        ];

        return view('products', compact('movies'));
    }
}
