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
                    </div>
                </div>
            </div>
            @endsection
            
        </body>
    </html>