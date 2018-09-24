<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Log;

class FormSave extends Model
{
    // table名
    protected $table = 'formuser';

    public $timestamps = false;

    // 表示用のデータを取得
    public function getData(){
        $datas = DB::table($this->table)->get();
        return $datas;
    }

    public function selectData($name) {
        #$datas = DB::table($this->table)->delete();

        $datas = [
            'selData' => '',
            'flag' => false
        ];
        // トランザクションの開始
        \DB::beginTransaction();
        try {
            $datas['selData'] = DB::table($this->table)->where('name', '=', $name)->get();
            $datas['flag'] = true;
            DB::commit();
            return $datas;
        // 失敗
        } catch (\Exception $e) {
            $failed = false;
            $datas['selData'] = Log::error($e->getMessage());
            $datas['flag'] = DB::rollback();
            return $datas;
        }
    }

    public function setData(Array $datas) {

        // トランザクションの開始
        \DB::beginTransaction();
        try {
            // formuserテーブルにデータを登録する
            $res = DB::table($this->table)->insert([
                'name'      => $datas['name'],
                'name_kana' => $datas['name_kana'],
                'gender'    => $datas['gender'],
                'email'     => $datas['addless'],
                'age'       => $datas['age'],
                'file'      => $datas['file'],
                'comment'   => $datas['comment']
            ]);
            $success = true;
            DB::commit();
            return $success;

        // 失敗
        } catch (\Exception $e) {
            $failed = false;
            Log::error($e->getMessage());
            DB::rollback();
            return $failed;
        }

        //DB::transaction(function () use($datas) {

        //});
    }
    // データの削除
    public function deleteData($request) {
        #$datas = DB::table($this->table)->delete();
        // トランザクションの開始
        \DB::beginTransaction();
        try {
            DB::table($this->table)->where('name', '=', $request->name)->delete();
            $success = true;
            DB::commit();
            return $success;
        // 失敗
        } catch (\Exception $e) {
            $failed = false;
            Log::error($e->getMessage());
            DB::rollback();
            return $failed;
        }
    }
}
?>