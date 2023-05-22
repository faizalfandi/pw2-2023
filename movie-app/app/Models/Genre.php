<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'no'=> 1,
            'nama genre'=> 'komedi',
            'deskripsi'=> 'Genre komedi adalah genre film dimana penekanan utama adalah pada kelucuan',
        ],
        [
            'no'=> 2,
            'nama genre'=> 'Romantis',
            'deskripsi'=> 'Genre romantis adalah genre film yang menceritakan kisah cinta yang tercipta diantara para tokoh',
        ],
        [
            'no'=> 3,
            'nama genre'=> 'Animasi',
            'deskripsi'=> 'Genre animasi adalah genre film yang merupakan karya tangan (gambar) yang bergerak',
        ],
        [
            'no'=> 4,
            'nama genre'=> 'Aksi',
            'deskripsi'=> 'Genre aksi adalah genre film yang biasanya sangat menegangkan saat ditonton',
        ],
        [
            'no'=> 5,
            'nama genre'=> 'Horor',
            'deskripsi'=> 'Genre horor adalah genre cerita rekaan yang dimaksudkan untuk menimbulkan perasaan takut atau ngeri bagi penyimaknya',
        ],

        
        
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}

