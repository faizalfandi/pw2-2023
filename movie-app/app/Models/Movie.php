<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'no'=> 1,
            'judul'=> 'The shawshank Redemption',
            'poster'=> 'Image.png',
            'genre'=> 'genre',
            'negara'=> 'USA',
            'tahun'=> 1994,
            'rating'=> 9.8,
        ],

        [
            'no'=> 2,
            'judul'=> 'titanic',
            'poster'=> 'Image.png',
            'genre'=> 'Drama',
            'negara'=> 'USA',
            'tahun'=> 1997,
            'rating'=> 8.6,
        ],

        [
            'no'=> 3,
            'judul'=> 'Seven samurai',
            'poster'=> 'Image.png',
            'genre'=> 'action',
            'negara'=> 'japan',
            'tahun'=> 1954,
            'rating'=> 8.9,
        ],

        [
            'no'=> 4,
            'judul'=> '2012',
            'poster'=> 'Image.png',
            'genre'=> 'fiksi ilmiah',
            'negara'=> 'USA',
            'tahun'=> 2009,
            'rating'=> 9.3,
        ],

        [
            'no'=> 5,
            'judul'=> 'fast and furios 9',
            'poster'=> 'Image.png',
            'genre'=> 'Action',
            'negara'=> 'USA',
            'tahun'=> 2021,
            'rating'=> 9.0,
        ],
        
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}

