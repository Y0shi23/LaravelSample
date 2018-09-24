<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\FormSave;

class Sample_vali extends Controller {

    public function index() {
        $datas = new FormSave;
        $showData = $datas->getData();
        return view('sample_vali')->with('showData', $showData);
        // return view('hello',compact('datas'));
        // return view('sample_vali');
    }

    public function receiveData(Request $request) {
        // バリデーションルール
        //$validator = Validator::make($request->all(), [
        //    'name' => 'required|string|max:255',
        //    'gender' => 'required',
        //    'age' => 'required|integer',
        //    'file' => 'required|file|image|max:10000',
        //    'comment' => 'required',
        //])->validate();

        // バリデーションエラーだった場合
        //if ($validator->fails()) {
        //    return redirect('sample/error')
        //        ->withErrors($validator)
        //        ->withInput();
        //}
        //return view('sample_vali', ['status' => true]);

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'name_kana' => 'required|kana',
            'addless' => 'required|email',
            'gender' => 'required',
            'age' => 'required|integer|min:0|max:10000|between:0,100',
            'file' => 'required|file|image|max:10000',
            'comment' => 'required',
        ], [
            'required' => ':attributeは必須やねん',
            'addless' => ':attributeの書式のみ有効です',
            'between'  => ':attributeは:minから:maxまでやねん',
            'integer' => ':attributeは:整数のみ有効やねん',
            'max' => ':attributeは:maxまで有効',
        ], [
            'name' => '名前',
            'addless' => 'メールアドレス',
            'gender' => '性別',
            'age' => '年齢',
            'file' => 'ファイル',
            'comment' => 'コメント',
        ]);

        $datas = $request->all();
        // return view('validation.confirm')->with($data);
        return view('validation.store')->with($datas);
    }
    // データの登録
    public function save(Request $request){
        $datas = $request->all();
        $formSave = new FormSave;
        $inputData = $formSave->setData($datas);

        // 登録成功
        if ($inputData) {
            return view('validation.inputconfirm');
        // 登録失敗
        } else {
            // フォーム画面(入力画面)にリダイレクト
            return redirect('sample/vali')->withInput();
        }
    }
    // データの削除
    public function destroy(FormSave $formSave, Request $request){
            $deleteData = $formSave->deleteData($request);
            //削除する時の処理
            // 登録成功
            if ($deleteData) {
                $datas = $request->all();
                var_dump($request->name);
                return view('validation.test2');
            }
             // 登録失敗
             else {
                 // フォーム画面(入力画面)にリダイレクト 
                return view('validation.test2');
             }
    }
    public function edit(Request $request, FormSave $formsave, $name) {
        // 対象のデータを抽出する
        $datas = $formsave->selectData($name);
        // 登録成功
        if ($datas['flag']) {
            $showData = $datas['selData'][0];
            var_dump($showData);
            return view('sample_vail_update')->with('showData', $showData);
        }
         // 登録失敗
         else {
             // フォーム画面(入力画面)にリダイレクト 
            return view('validation.test2');
         }
        var_dump($datas);
    }
    public function updateReceiveData(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'name_kana' => 'required|kana',
            'addless' => 'required|email',
            'gender' => 'required',
            'age' => 'required|integer|min:0|max:10000|between:0,100',
            'file' => 'required|file|image|max:10000',
            'comment' => 'required',
        ], [
            'required' => ':attributeは必須やねん',
            'addless' => ':attributeの書式のみ有効です',
            'between'  => ':attributeは:minから:maxまでやねん',
            'integer' => ':attributeは:整数のみ有効やねん',
            'max' => ':attributeは:maxまで有効',
        ], [
            'name' => '名前',
            'addless' => 'メールアドレス',
            'gender' => '性別',
            'age' => '年齢',
            'file' => 'ファイル',
            'comment' => 'コメント',
        ]);

        $datas = $request->all();
        // return view('validation.confirm')->with($data);
        return view('validation.store')->with($datas);
    }

//    public function update(FormSave $formsave, Request $request) {
//        $datas = $request->all();
//        var_dump($datas);
//        return view('sample_vail_update')->with('request', $request);
//    }
}

