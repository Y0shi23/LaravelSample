<div class="container">
    <table class="table table-striped table-hover">
        <tr>
            <td>名前</td>
            <td>カナ</td>
            <td>性別</td>
            <td>email</td>
            <td>年齢</td>
            <td>ファイル</td>
            <td>コメント</td>
            <td>変更</td>
            <td></td>
        </tr>
        @foreach ($showData as $data)
        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->name_kana}}</td>
            <td>{{ $data->gender }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->age }}</td>
            <td>{{ $data->file }}}</td>
            <td>{{ $data->comment }}</td>
        <td>
            <a href="/sample/vali/edit/{{ $data->name }}" class="btn btn-primary">修正</a>
        </td>
            <td>
            <!-- モーダルウィンドウを呼び出すボタン -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">削除</button>
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
                    <div class="modal-body">

                    </div>

                    <p>削除します。よろしいですか？</p>

                    <!-- フッターの設定 -->
                    <div class="modal-footer">
                        <form method="POST" action="/sample/vali/destroy/{{ $data->name }}">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <input type="submit" class="btndel btn-primary btn-sm btn-dell" value="いいえ">
                            <input type="submit" class="btn btn-danger btn-sm btn-dell" value="はい">
                        </form>
                    </div>
                </div>
            </div>
            </div>
            </td>
        </tr>
        @endforeach
    </table>
</div>