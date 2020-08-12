@extends('layouts.master')
@section('title', $post->title)
@section('content')

<div class="post_wraper">
  
    <div class="content_post">
        <h1>{{ $post->title}}</h1>
        <p>{!! $post->content !!}</p>
        <img src=" {{ $post->image}} " alt="">
        <p>{{ $post->date}}</p>
        <hr>    
    </div>
   
</div>

@endsection
