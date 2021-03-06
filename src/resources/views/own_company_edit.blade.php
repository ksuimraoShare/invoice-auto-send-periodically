@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['route'=>'own_company_edit_save']) !!}
        @isset($exception_error_message)
            <p class="mt50">
                <span class="error_message">{{ $exception_error_message }}</span>
            </p>
        @endisset
        <p class="mt50">
            @error('company_name')
                <p class="error_message">{{ $message }}</p>
            @enderror
            <span>会社名：</span>
            {{Form::text('company_name', $user->name, ['class' => 'input_text_border_gray'])}}
        </p>
        <p class="mt50">
            @error('email')
                <p class="error_message">{{ $message }}</p>
            @enderror
            <span>メールアドレス：</span>
            {{Form::text('email', $user->email, ['class' => 'input_text_border_gray'])}}
        </p>
        <p class="mt50">
            <span>印鑑画像：</span>
            <label class="label_file_upload" for="file_upload">
                ファイルを選択して下さい
                {{Form::file('name_stamp_image_path', ['class'=>'input_file_upload','id'=>'file_upload'])}}
            </label>
        </p>
        <p class="mt50">
            {!! Form::submit('保存', ['class'=>'btn_green']) !!}
        </p>
    {!! Form::close() !!}
</div>
@endsection