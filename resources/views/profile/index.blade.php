@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($profile_headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <!--<div class ="image">-->
                                <!--    @if ($profile_headline->image_path)-->
                                <!--        <img src="{{ asset('storage/image/' . $headline->image_path) }}">-->
                                <!--    @endif-->
                                <!--</div>-->
                                <div class="title p-2 mb-4">
                                    <h1>{{ str_limit($profile_headline->name, 70) }}</h1>
                                </div>
                                 <div class="date mt-5">
                                    {{ $profile_headline->updated_at->format('Y年m月d日') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="mx-auto">'性別'  {{ str_limit($profile_headline->gender, 650) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mx-auto">'趣味'  {{ str_limit($profile_headline->hobby, 650) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mx-auto">'自己紹介'  {{ str_limit($profile_headline->introduction, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($profile_posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                 <div class="name">
                                    '名前'    {{ $post->name }}
                                </div>
                                <div class="gender">
                                   '性別'   {{ $post->gender }}
                                </div>
                                <div class="hobby">
                                    '趣味'  {{ str_limit($post->hobby, 150) }}
                                </div>
                                <div class="introduction">
                                    '自己紹介'  {{ str_limit($post->introduction, 1500) }}
                                </div>
                            </div>
                            <!--<div class="image col-md-6 text-right mt-4">-->
                            <!--    @if ($post->image_path)-->
                            <!--        <img src="{{ asset('storage/image/' . $post->image_path) }}">-->
                            <!--    @endif-->
                            <!--</div>-->
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection