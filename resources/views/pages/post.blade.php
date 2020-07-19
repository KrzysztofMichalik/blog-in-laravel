@extends('layouts.master')
@section('title', $post->title)
@section('content')

@if($post->type === 'text')
<article class="post formatText">
    <div class="postContent">
        <div class="wrapper">
            <h2 class="postTitle">
                <a href="#">{{ $post->title }}</a>
            </h2>
            <div class="rte">
                {!! $post->content !!}
                
            </div>
        </div>
    </div>
    <div class="meta">
        <ul class="tags">
            <li><i class="fa fa-tags"></i></li>
            <li>
                <a href="#">format</a>
            </li>
            <li>
                <a href="#">typography</a>
            </li>
        </ul>
        <div class="flex flex-sb">
            <p class="date"><i class="fa fa-clock-o"></i> 1 day ago</p>
            <p>
                <a href="#" class="link"><i class="fa fa-edit"></i> Edytuj</a>
            </p>
        </div>
    </div>
</article>
@endif
@if($post->type ==='photo')
<article class="post formatPhoto">
    <figure class="postImage">
        <i class="postPremium fa fa-star"></i>
        <a href="#">
        <img src="{{$post->image}}" alt="" class="mainPhoto">
        </a>
        <div class="cover"
            style="background: url({{$post->image}}) no-repeat;">
        </div>
    </figure>
    <div class="meta">
        <ul class="tags">
            <li><i class="fa fa-tags"></i></li>
            <li>
                <a href="#">photo</a>
            </li>
            <li>
                <a href="#">dog</a>
            </li>
        </ul>
        <div class="flex flex-sb">
            <p class="date"><i class="fa fa-clock-o"></i> 1 day ago</p>
            <p>
                <a href="#" class="link"><i class="fa fa-edit"></i> Edytuj</a>
            </p>
        </div>
    </div>
</article>
@endif
@endsection