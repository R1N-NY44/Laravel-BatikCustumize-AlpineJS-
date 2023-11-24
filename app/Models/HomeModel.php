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
            'Price' => 'Rp250.000 - Rp300.000'
        ],
        [
            'Img' => 'coupleBatik02.jpeg',
            'Desc' => 'Batik Garis',
            'Price' => 'Rp350.000 - Rp400.000'
        ],
        [
            'Img' => 'coupleBatik03.jpg',
            'Desc' => 'Batik Tutul Modern',
            'Price' => 'Rp450.000 - Rp500.000'
        ],
        [
            'Img' => 'coupleBatik04.jpeg',
            'Desc' => 'Batik Tutul',
            'Price' => 'Rp350.000 - Rp400.000'
        ],
        [
            'Img' => 'coupleBatik05.webp',
            'Desc' => 'Batik Garis Modern',
            'Price' => 'Rp250.000 - Rp300.000'
        ],
        [
            'Img' => 'coupleBatik06.jpeg',
            'Desc' => 'Batik Loreng Modern',
            'Price' => 'Rp150.000 - Rp400.000'
        ],
        [
            'Img' => 'coupleBatik07.jpeg',
            'Desc' => 'Batik Loreng',
            'Price' => 'Rp250.000 - Rp300.000'
        ],
        [
            'Img' => 'coupleBatik08.jpeg',
            'Desc' => 'Batik Loreng',
            'Price' => 'Rp450.000 - Rp500.000'
        ],
        [
            'Img' => 'coupleBatik09.webp',
            'Desc' => 'Batik Loreng Modern',
            'Price' => 'Rp350.000 - Rp500.000'
        ]
    ];

    public static function carouselData(){
        return collect(self::$Carousel);
    }
}
