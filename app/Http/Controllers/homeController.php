<?php

namespace App\Http\Controllers;

use App\home;
use App\usersmobile;
use Illuminate\Http\Request;
use App\user;
use App\usersrole;
use App\role;

class homeController extends Controller
{
    public function welcome(){
        $role=usersrole::find(1)->roles;
        $user=role::find(2)->usersroles;
        return $role;
        //return view("welcome",compact('user'));
    }
    public function about(){
        return view("about");
    }
}
