<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function contact(){
        return view('contact');
    }

    public function blogPost($id , $welcome = 1){
        $pages = [
            1 => [
                'title' => 'from Page 1',
            ],
            2 => [
                'title' => 'from Page 2',
            ],
            ];
        
        $welcomeMsg = [1 => '<b>Hello</b> ', 2 => 'Welcome to '] ;   
    
        return view('blog-post',[ 
            'data' => $pages[$id], 
            'welcome' => $welcomeMsg[$welcome]
            ]);  
    }
}
