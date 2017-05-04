<?php

namespace App\Http\Controllers;

use App\home;
use App\sometag;
use App\usersmobile;
use App\video;
use Illuminate\Http\Request;
use App\user;
use App\usersrole;
use App\role;
use App\somepost;
use App\somevideo;

class homeController extends Controller
{
    public function welcome(){
        $post=somepost::first();
        foreach ($post->tags as $tag){
            $tag . "<hr>";
        }
        //return view("welcome",compact('user'));
    }
    public function about(){
        return view("about");
    }
}
