<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function standard(){

        return view('standard');
    }

    public function grade(){

        return view('grade');
    }

    public function subject(){

        return view('subject');
    }



}
