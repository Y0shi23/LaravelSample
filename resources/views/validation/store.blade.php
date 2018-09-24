@extends('validation.layout')
@section('content')

    <h1>内容表示</h1>
    <div class="row">
        <div class="col-sm-12">
            <a href="/sample/vali" class="btn btn-primary" style="margin:10px;">フォームに戻る</a>
        </div>
    </div>

    <!-- table -->
    <form method="post" action="{{ route('validation.inputconfirm') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <table class="table table-striped">
    <input type="hidden" name="name" value="{{ old('confirming', 'false') }}">
        <tr>
            <td>名前</td>
            <td>
                <label>
                    <input type="hidden" name="name" value="{{ old('name', $name) }}">{{$name}}
                </label>
            </td>
        </tr>
        <tr>
            <td>名前</td>
            <td>
                <label>
                    <input type="hidden" name="name_kana" value="{{ old('name_kana', $name_kana) }}">{{$name_kana}}
                </label>
            </td>
        </tr>
        @if ($gender == 1)
        <tr>
            <td>性別</td>
            <td>
                <label>
                    <input type="hidden" name="gender" value="{{ old('gender', $gender) }}">男
                </label
            ></td>
        </tr>
        @else
        <tr>
            <td>性別</td>
            <td>
                <label>
                    <input type="hidden" name="gender" value="{{ old('gender', $gender) }}">女
                </label>
            </td>
        </tr>
        @endif
        <tr>
            <td>Email</td>
            <td>
                <label>
                    <input type="hidden" name="addless" value="{{ old('addless', $addless) }}">{{$addless}}
                </label>
            </td>
        </tr>
        <tr>
            <td>年齢</td>
            <td>
                <label>
                    <input type="hidden" name="age" value="{{ old('age', $age) }}">{{$age}}
                </label>
            </td>
        <tr>
            <td>ファイル</td>
            <td>
                <label>
                    <input type="hidden" name="file" value="{{ old('file', $file) }}">{{$file}}
                </label>
            </td>
        <tr>
            <td>コメント</td>
            <td>
                <label>
                     <input type="hidden" name="comment" value="{{ old('comment', $comment) }}">{{$comment}}
                </label>
            </td>
        </tr>
    </table>
    <input type="submit" class="btn btn-primary" value="送信">
    </form>

@stop