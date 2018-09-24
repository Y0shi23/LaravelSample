@if ($errors->any())
<div class="errors">
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
@endif

@isset ($status)
<div class="complete">
    <p>バリデーションを通過しました</p>
</div>
@endisset

<div class="form_wrap">
    <form method="post" action="{{ route('validation.confirm') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <table>
        <tr>
            <td>名前</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>苗字(カナ)</td>
            <td><input type="text" name="name_kana"></td>
        </tr>
        <tr>
            <td>メールアドレス</td>
            <td><input type="text" name="addless"></td>
        </tr>
        <tr>
            <td>性別</td>
            <td>
                <input type="radio" name="gender" value="1">男
                <input type="radio" name="gender" value="2">女
            </td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><input type="text" name="age"></td>
        </tr>
        <tr>
            <td>ファイル</td>
            <td><input type="file" name="file"></td>
        </tr>
        <tr>
            <td>コメント</td>
            <td><textarea name="comment"></textarea></td>
        </tr>
    </table>
    <p>
        <input type="submit" value="送信">
    </p>
    </form>
</div>