<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="ja" lang="ja">
 
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <title>フォームのサンプル（確認画面）</title>
  <style>
  dl { width:430px; }
  dt { float:left; }
  dd { margin-left:130px; }
  .error{ color: tomato; }
  </style>
</head>
<body>
<h1>フォームサンプル（確認画面）</h1>
<p>アンケートにご協力下さい</p>
 
<dl>
  <dt>名前:</dt>
  <dd>{{$name}}</dd>
</dl>
 
<dl>
  <dt>性別:</dt>
  @if ($gender == 1)
      <dd>男</dd>
  @else
      <dd>女</dd>
  @endif
</dl>

<dl>
  <dt>年齢:</dt>
  <dd>{{$age}}</dd>
</dl>
 
<dl>
  <dt>コメント:</dt>
  <dd>{{$comment}}</dd>
</dl>

 
</body>
</html>