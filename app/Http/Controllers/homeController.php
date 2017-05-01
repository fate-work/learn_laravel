<?php

namespace App\Http\Controllers;

use App\home;
use Illuminate\Http\Request;
use App\user;

class homeController extends Controller
{
    public function welcome(){
        $user=user::find(1);
        return view("welcome",compact('user'));
    }
    public function about(){
        return view("about");
    }
}
