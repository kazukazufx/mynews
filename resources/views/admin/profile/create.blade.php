<DOCTYPE html>
    <html>
        <head>
            <meta charset="utf=8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta nema="viewport" content="width=device-width, initial-scale=1">
            
            <title>Mynews</title>
        </head>
        <body>
            <h1>プロフィール作成画面!!!</h1> 
            @extends('layouts.profile')
            
            @section('title', 'プロフィールの新規作成')
            
            @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <h2>プロフィール新規作成</h2>
                        <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                            @if (count($errors) > 0)
                                <ul>
                                    @foreach(errors-all() as $a)
                                    <li>{{ $a }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <div class="form-group row">
                                <label class="col-md-2">指名</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="title" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4">性別</label>
                                <div class="col-md-4">
                                    <input type="radio" name="gender" value="male">男性
                                    <input type="radio" name="gender" value="female">女性
                                </div>
                            </div>
                            <div class="form-group-row">
                            <label class="col-md-10">趣味</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="body" rows="10">{{ old('body') }}</textarea>
                            </div>
                            <div class="form-group-row">
                            <label class="col-md-10">自己紹介欄</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="body" rows="10">{{ old('body') }}</textarea>
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