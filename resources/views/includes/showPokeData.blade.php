<div>
    <form action="/hello_world/index2" method="GET" onsubmit="doSomething();return false;">
        <label for="text">テキスト: </label>
        <input type="text" name="text">
        <input type="submit" name="send" value="検索">
    </form>
</div>

<div>
    @if(!empty($decode))
    <table>
        <tr>
            <th>色違いの姿</th>
            <th>通常の姿</th>
        </tr>
        <tr>
            <th><img src="{{$decode['sprites']['front_shiny']}}" title="{{$decode['name']}}"></th>
            <th><img src="{{$decode['sprites']['front_default']}}" title="{{$decode['name']}}"></th>
        </tr>
        <tr>
            <th>種族値</th>
            <th>ステータス</th>
        </tr>
        <tr>
            <td>HP</td>
            <td>{{$decode['stats'][5]['base_stat']}}</td>
        </tr>
        <tr>
            <td>攻撃</td>
            <td>{{$decode['stats'][4]['base_stat']}}</td>
        </tr>
        <tr>
            <td>防御</td>
            <td>{{$decode['stats'][3]['base_stat']}}</td>
        </tr>
        <tr>
            <td>特攻</td>
            <td>{{$decode['stats'][2]['base_stat']}}</td>
        </tr>
        <tr>
            <td>特防</td>
            <td>{{$decode['stats'][1]['base_stat']}}</td>
        </tr>
        <tr>
            <td>素早</td>
            <td>{{$decode['stats'][0]['base_stat']}}</td>
        </tr>
    </table>
    @endif
</div>