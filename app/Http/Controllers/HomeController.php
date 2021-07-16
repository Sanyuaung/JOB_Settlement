<?php


namespace App\Http\Controllers;


class HomeController extends Controller
{
    function home()
    {
        return view('home');
    }

    function JCBHome()
    {
        return view('JCBHome');
    }
    function MPUHome()
    {
        return view('MPUHome');
    }
 }
