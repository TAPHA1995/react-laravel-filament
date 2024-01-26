<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    // public function affichesondage(Request $request)
    // {
    //     return view('dashboard',['sondagePost' => Post::take(3)->get()]);
    // }


    public function affichesondage(Request $request)
    {

        return view('dashboard',[
           'posts' => Post::take(5)->get()
        ]);
        // $sondage = Post::all();
        // return view('dashboard')->with('posts', $sondage);
    }
}
