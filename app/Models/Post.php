<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    // table名
    protected $table = 'monster_type';
    protected $guarded = array('id');

    public $timestamps = false;

    public function getData()
    {
      // $tableで定義したテーブル名の全件データを取得
      // select * from テーブル名と同じ
      $data = DB::table($this->table)
          ->select('monster.name', 'type.type_name')
          ->leftJoin('monster', 'monster_type.monster_id', '=', 'monster.id')
          ->leftJoin('type', 'type.id', '=', 'monster_type.type_id')->get();

      // 通常のSQLクエリも書ける。
      // $data = DB::select('select * from users where id = ?', [1]);

      // SELECT句の指定
      // select 
      //     name, 
      //     email as user_email
      // from user;
      // $users = DB::table('users')->select('name', 'email as user_email')->get();

      // INSERT文を実行
      // DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);

      // UPDATE文を実行
      // DB::update('update users set votes = 100 where name = ?', ['John']);

      // DELETE文の実行
      // DB::delete('delete from users');

      // 通常のSQL文を実行する
      // DB::statement('drop table users');
      // $data = DB::table($this->table)->where('name', 'フシギダネ')->first();


      return $data;
    }
}

?>