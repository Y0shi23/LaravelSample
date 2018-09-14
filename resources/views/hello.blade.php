<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>My First Page</title>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js"></script>
  <script src="http://code.angularjs.org/1.5.3/angular-animate.min.js"></script>
  <script src="../assets/js/books.js"></script>
  <script src="{{ asset('/js/jquery.pagination.js') }}"></script>

</head>
<style>
div {
  transition: all linear 0.5s;
  background-color: lightblue;
  height: 100px;
  width: 100%;
  position: relative;
  top: 0;
  left: 0;
}
</style>
<body>
<? php /*COMMENT*/ ?>
  <h2>Hello World!!</h2>
  <p>皆さん、こんにちは</p>
  <p>Jun/04/2018</p>

  @foreach ($datas as $data)
    <p>No {{ $data->name }} ポケモン名 {{ $data->type_name }}</p>
  @endforeach

</body>
</html>