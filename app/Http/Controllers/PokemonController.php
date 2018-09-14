<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PokemonAPI;
use App\Models\Post;

class PokemonController extends Controller
{
        // getで/hello_world/indexにアクセスされた場合
        public function index(Request $request) {
            
            $error = '';
            //echo $_SERVER['REQUEST_URI'];
            //var_dump($_GET);

            if(!empty($_GET['text'])){
                $api = new PokemonAPI;
                $pokeApi = $api->getData($_GET['text']);
                $decode = json_decode($pokeApi, true);
                
                //var_dump($decode['stats']);
                return view('pokemon',compact('decode'));
            }
            else {
                $error = 'ポケモン名(英名)または番号を入力してください。';
                //return view('pokemon');
                return view('pokemon', ['error' => $error]);
            } 
        }
        // getで/hello_world/index/createにアクセスされた場合
        public function create()
        {
            $first_name = "aaa";
            $last_name  = "bbb";
            return view('hello', compact('first_name','last_name'));
        }

        // getで/hello_world/index/{$message}にアクセスされた場合
        public function show($message)
        {
            return view('article.index')->with('message',$message);
        }
}
