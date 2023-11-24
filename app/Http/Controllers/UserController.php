<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index(){
        return view('welcome',[
            'Carousel' => HomeModel::carouselData(),
        ]);
    }
}
