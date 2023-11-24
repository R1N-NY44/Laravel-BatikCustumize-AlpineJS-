<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeModel extends Model
{
    //use HasFactory;
    private static $Carousel = [
        [
            'Img' => 'coupleBatik01.jpeg',
            'Desc' => 'Batik Utul',
            'SeeMore' => 'See more'
        ],
        [
            'Img' => 'coupleBatik02.jpeg',
            'Desc' => 'Batik Garis',
            'Price' => 'Rp350.000'
        ],
        [
            'Img' => 'coupleBatik03.jpeg',
            'Desc' => 'Batik Utul Baru',
            'Price' => 'Rp350.000'
        ],
        [
            'Img' => 'coupleBatik01.jpeg',
            'Desc' => 'Batik Utul Baru',
            'Price' => 'Rp350.000'
        ],
        [
            'Img' => 'coupleBatik01.jpeg',
            'Desc' => 'Batik Utul Baru',
            'Price' => 'Rp350.000'
        ]
    ];
}
