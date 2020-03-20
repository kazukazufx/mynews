<!DOCTYPE> html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        {{-- 後の章で説明します --}}
        <meta naem="csrf-token" content="{{ csrf_token() }}">
        
        {{--各ページごとにtitleタグを入れるために@yieldで開けておきます。--}}
        <title>@yield('title')</title>
        
        {{--　Laravelで標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="{{ secure_asset('css/profile.css') }}" rel="stylesheet">
        
        {{-- Laravelで標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章で後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </haed>
    <body>
        <div id="app">
            {{-- 画面上部に表示するナビゲートバーです。 --}}
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" date-toggle="collapse" date-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expand="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            
                        </ul>
                        
                        <ul class="navbar-nav ml-auto">
                         </ul>
                    </div>
                </div>
            </nav>
            {{-- ここまでナビゲーションバー --}}
            
            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで開けておきます。 --}}
                @yield('content')
            </main>
        </div>
    </body>
</html>