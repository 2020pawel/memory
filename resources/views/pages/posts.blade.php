@extends('layouts.master')
@section('title', 'Posts')
@section('content')

<div class="post_wraper">
    @if($posts->count()>0)
    @foreach($posts as $post)
   
    <div class="content_post">
        {{-- <h1> <a href="/posts/{{$post->id}}"> {{ $post->title}}</h1></a> --}}
    <h1> <a href="{{ route('posts.single', ['slug' => $post->slug]) }}"> {{ $post->title}}</h1></a>
        <p>{!! $post->excerpt !!}</p>
        <img src=" {{ $post->image}} " alt="">
        <p>{{ $post->date}}</p>
    <p><i>{{ $post->date->diffForHumans() }}</i></p>
        <hr>
    <p>Dodatek</p>
    </div>
    @endforeach 
    @endif 

@include('partials.pagination', ['pagination'=>$posts])

</div>

@endsection
