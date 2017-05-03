<?php

namespace App\Http\Controllers;

use App\home;
use App\usersmobile;
use Illuminate\Http\Request;
use App\user;

class homeController extends Controller
{
    public function welcome(){
        $user=usersmobile::find(1)->mobile;
        return view("welcome",compact('user'));
    }
    public function about(){
        return view("about");
    }
}
