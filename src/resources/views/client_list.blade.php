@extends('layouts.app')

@section('content')
<div class="container">
    <p class="mt50">
        <form method="get" action="#" class="search_container">
            <input type="text" size="25" placeholder="会社名検索">
            <input type="submit" value="&#xf002">
        </form>
        </p>
        <p class="mt50">
            <button type="submit" class="btn_green">請求先を追加</button>
        </p>
        <p class="mt20">
            <a class="link_green" href="">会社名</a>
        </p>
    </div>
</div>
@endsection