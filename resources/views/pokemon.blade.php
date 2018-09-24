@extends('app')
@section('content')
    <h1>サンプルフォーム</h1>

    <!-- <div>要素を追加し、「header」というclassをつけてください -->
    <div class="header">
      
    </div>
      
    <!-- <div>要素を追加し、「main」というclassをつけてください -->
    <div class="main">
        @include('includes.showPokeData')
    </div>
      
    <!-- <div>要素を追加し、「footer」というclassをつけてください -->
    <div class="footer">
        C:fumi_042
    </div>

@endsection
