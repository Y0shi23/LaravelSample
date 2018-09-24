<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;

class News extends Controller
{
    // getで/hello_world/indexにアクセスされた場合
    public function index () 
    {
        return view('news');
    }
}

?>
