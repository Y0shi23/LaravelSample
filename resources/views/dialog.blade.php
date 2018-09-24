@extends('sample_vali')
@section('dialog')
<!-- モーダルウィンドウを呼び出すボタン -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">クリックするとモーダルウィンドウが開きます。</button>

<!-- モーダルウィンドウの中身 -->
<!-- モーダルウィンドウの表示位置を指定 -->
<div class="modal" id="myModal">
   <!-- モーダルウィンドウの中身の外観を整理 -->  
   <div class="modal-dialog modal-lg">
     <!-- モーダルウィンドウの中身の外観を整理 -->
     <div class="modal-content">
       <!-- ヘッダーの設定 -->
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title">Modal タイトル</h4>
       </div>
       <!-- 内容の設定 -->
       <div class="modal-body">Modal内容</div>
          あああ
       <!-- フッターの設定 -->
       <div class="modal-footer">
         <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
        </div>
     </div>
   </div>
 </div>
@endsection