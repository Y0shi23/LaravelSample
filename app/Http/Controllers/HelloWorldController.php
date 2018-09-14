<?php

namespace App\Http\Controllers;

use App\Models\PokemonAPI;
use App\Models\Post;

class HelloWorldController extends Controller
{
    // getで/hello_world/indexにアクセスされた場合
    public function index () 
    {
        // Frameworksモデルのインスタンス化
        $md = new Post();

        // データ取得
        $datas = $md->getData();

        //$first_name = $datas[0]->id;
        //$last_name  = $datas[0]->name;
        // ビューを返す
         //return view('hello', $pokeApi);
        //return view('article.index')->with('data', $data);
        //return view('hello')->with($data[700]);

        // var_dump($decode);
        // var_dump($decode['name']);
        // return view('hello')->with('detas', $datas);

        return view('hello',compact('datas'));
        // return View::make('hello')->with('name', $title);

       //return view('hoge', ['pokeApi' => $pokeApi]);
       //return view('hello', compact('first_name','last_name'));  
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

?>
