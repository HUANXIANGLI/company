<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        return view('index.index');
    }

    public function contact(){
        return view('index.contact');
    }

    public function single(){
        return view('index.single');
    }

}
