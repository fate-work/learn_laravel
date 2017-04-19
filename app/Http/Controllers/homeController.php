<?php

namespace App\Http\Controllers;

use App\home;
use Illuminate\Http\Request;

class homeController extends Controller
{
    /*todo Не забудь удалить это*/
    public function index(){
        //$data=home::all();
        $sum=5+6;
        //return $sum
        return view("welcome",compact("sum"));
    }
}
