@extends('layouts.app')

@section('content')
<div class="container">
    <p class="mt50">
        <span>会社名：</span>
        <input class="input_text_border_gray" type="text">
    </p>
    <p class="mt50">
        <span>メールアドレス：</span>
        <input class="input_text_border_gray" type="text">
    </p>
    <p class="mt50">
        <span>印鑑画像：</span>
        <label class="label_file_upload" for="file_upload">
            ファイルを選択して下さい
            <input class="input_file_upload" type="file" id="file_upload">
        </label>
    </p>
    <p class="mt50">
        <button type="submit" class="btn_green">保存</button>
    </p>
</div>
@endsection