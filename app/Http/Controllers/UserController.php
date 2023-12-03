<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;

class UserController extends Controller
{
    public function Index(){
        return view('welcome',[
            'Carousel' => HomeModel::carouselData(),
        ]);
    }
}
