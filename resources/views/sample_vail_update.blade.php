<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- js -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
<script src="{{ asset('/js/dialog.js') }}"></script>
<!-- CSS -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/pepper-grinder/jquery-ui.css">

  <title>バリデーションのサンプル</title>
  <style>
    h1 { font-size: 16px; }
    .form_wrap { padding: 10px; }
    .errors {
      width: 300px;
      font-size: 12px;
      color: #e95353;
      border: 1px solid #e95353;
      background-color: #f2dede;
    }
    .complete {
      padding-left: 10px;
      width: 290px;
      font-size: 12px;
      color: #2a88bd;
      border: 1px solid #2a88bd;
      background-color: #a6e1ec;
    }
    .modal-dialog {
      display: flex;
      flex-direction: column;
      justify-content: center;
      min-height: 100%;
      margin: auto;
      pointer-events: none;
    }


  .modal-content {
    pointer-events: all;
  }
  .modal_footer{
    display: inline-block;
  }
  </style>

</head>
<body>
<h1>サンプルフォーム</h1>
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
        <td><input type="text" name="name" value="{{$showData->name}}"></td>
      </tr>
      <tr>
        <td>苗字(カナ)</td>
        <td><input type="text" name="" value="{{$showData->name_kana}}"></td>
      </tr>
      <tr>
        <td>メールアドレス</td>
        <td><input type="text" name="" value="{{$showData->email}}"></td>
      </tr>
      <tr>
        <td>性別</td>
        <td>

        @if ($showData->gender == 1)
          <input type="radio" name="gender" value="1" checked="checked">男
          <input type="radio" name="gender" value="2">女
        @else
          <input type="radio" name="gender" value="1">男
          <input type="radio" name="gender" value="2"checked="checked">女
        @endif

        </td>
      </tr>
      <tr>
        <td>年齢</td>
        <td><input type="text" name="" value="{{$showData->age}}"></td>
      </tr>
      <tr>
        <td>ファイル</td>
        <td><input type="file" name="" values="{{$showData->file}}"></td>
      </tr>
      <tr>
        <td>コメント</td>
        <td><textarea name="" >{{$showData->comment}}</textarea></td>
      </tr>
    </table>
    <p>
      <input type="submit" value="送信">
    </p>
  </form>
</div>
</body>
</html>