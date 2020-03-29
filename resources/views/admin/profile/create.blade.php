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
                                    @foreach($errors->all() as $a)
                                    <li>{{ $a }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <div class="form-group row">
                                <label class="col-md-2" for="name">氏名</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4" for="gender">性別</label>
                                <div class="col-md-4">
                                    <input type="radio" name="gender" value="male">男性
                                    <input type="radio" name="gender" value="female">女性
                                </div>
                            </div>
                            <div class="form-group-row">
                            <label class="col-md-10" for="hobby">趣味</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="hobby" rows="10">{{ old('hobby') }}</textarea>
                            </div>
                            </div>
                            <div class="form-group-row">
                            <label class="col-md-10" for="introduction">自己紹介欄</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="introduction" rows="10">{{ old('introduction') }}</textarea>
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