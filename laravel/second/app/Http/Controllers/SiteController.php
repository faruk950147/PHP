<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //home
    function Home(){
        return view('home');
    }
    function StudentAdd(){
        return view('student-add');
    }
    function StudentAbout(){
        return view('student-about');
    }
    function StudentName($name){
        return view('student-name', ['name' => $name]);
    }
}
