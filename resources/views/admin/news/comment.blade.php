<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viesport" content="width=device-width, initial-scable=1">
        
        <title>MyNews</title>
    </head>
    <body>
        <h1 class="text-center">コメント作成画面</h1>
        @extends('layouts.admin')
        @section('title', 'ニュースの新規作成')

        @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2 class="text-center">コメント新規作成</h2>
                    <form action="{{ action('Admin\NewsController@create') }}" method="post" enctype="multipart/form-data">
                        @if (count($errors) > 0)
                            <ul>
                                @foreach($errors->all() as $a)
                                <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="form-group row">
                            <label class="col-md-2">ニュース</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2">タイトル</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="body" rows="1">{{ old('body') }}</textarea>
                                    </div>
                                </div>
                        <div class="form-group row">
                                <label class="col-md-2">コメント</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="body" rows="16">{{ old('body') }}</textarea>
                                </div>
                        </div>
                                <div class="form-group-row">
                                    <label class="col-md-2">画像</label>
                                    <div class="col-md-10">
                                        <input type="file" class="form-control-file" name="imagge">
                                    </div>
                                </div>
                                {{ csrf_field() }}
                                <div class="m-5"></div>
                                <input type="submit" class="btn btn-primary" value="更新">
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
    </body>
</html>
