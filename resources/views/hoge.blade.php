<!doctype html>
<html lang="ja" ng-app="myApp">
<head>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js"></script>
<script type="text/javascript" src="js/test.js"></script>
<script src="{{ asset('/js/test.js') }}"></script>


</head>
<body ng-controller="myCtrl">
    <form novalidate name="myForm" ng-submit="addUser()">
    
        <!-- text -->
        <p>
        Name:<input type="text" name="name" ng-model="user.name" required ng-minlength="5" ng-maxlength="10">
        <!-- 入力チェック(未入力)) -->
        ※必須
        <span ng-show="myForm.name.$error.required"></span>
        <!-- 入力チェック(最小文字数未満)) -->
        <span ng-show="myForm.name.$error.minlength">too short</span>
        <!-- 入力チェック(文字数オーバー) -->
        <span ng-show="myForm.name.$error.maxlength">too long</span>
        </p>

        <!-- 郵便番号 -->
        <p>
        郵便番号:<input type="text" name="postalCode" ng-model="user.postalCode" required ng-pattern="/^[0-9]{3}-[0-9]{4}$/">
        <!-- 入力チェック(最小文字数未満)) -->
        <span ng-show="myForm.postalCode.$error.pattern"> ハイフン有「123-4567」で入力</span>
        </p>

        <!-- number -->
        <p>
        Age:<input type="number" name="age" ng-model="user.age">
        <!-- 入力チェック(数字以外) -->
        <span ng-show="myForm.age.$error.number">Not valid number</span>
        </p>

        <!-- email -->
        <p>
        Email:<input type="email" name="email" ng-model="user.email">
        <!-- 入力チェック(フォーマットがemailじゃない) -->
        <span ng-show="myForm.email.$error.email">Not valid email</span>
        </p>

        <!-- checkbox -->
        <!-- <p>18歳以上ですか？<input type="checkbox" ng-model="user.adult" ng-init="user.adult=true"></p> -->
        <p>18歳以上ですか？<input type="checkbox" ng-model="user.adult"></p>

        <!-- radiobutton -->
        <p>
        Gender:
        <input type="radio" ng-model="user.gender" value="man">man
        <input type="radio" ng-model="user.gender" value="woman">woman
        </p>

        <!-- select -->
        <p>
        BirthYear:
        <select ng-model="user.year" ng-options="year for year in years">
        <option value="">選択してください</option>
        </select>
        </p>

        適当に作った:
        <input type="text" name="tekitou" ng-model="user.tekitou">
        <!-- submit -->
        <p><input type="submit" value="add"></p>

        <pre>@{{user|json}}</pre>
    </form>

    @{{$pokeApi.sprites.front_shiny_female}}

<div ng-controller="myList">
    <h1>ng-repeat</h1>
    タイトル名、価格をテキストボックス入力すると、検索結果に反映<br />
    2）ng-model属性
    <input type="text" ng-model="query">
    <table>
    <tr><td>タイトル名</td><td>価格</td><td>発売日</td></tr>
    1）ng-repeat属性
    3)フィルター
    <tr ng-repeat="list in ctmls|filter:query">
    <td>@{{list.title}}</td>
    <td>@{{list.price | number}}円</td>
    <td>@{{list.published | date: 'yyyy年MM月dd日'}}</td>
    </tr>
    </table>
</body>
</html>
