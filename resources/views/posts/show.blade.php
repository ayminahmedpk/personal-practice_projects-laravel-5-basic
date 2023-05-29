

@extends('layouts.app')


@section('title')
  Post
@endsection

@section('content')

  <h1>{{$post->title}}</h1>
  <small>Written on: {{$post->created_at}}</small>

  <div>
    {!!$post->body!!}
  </div>

  <br><br>

  <button>
    <a href="/from_scratch/public/posts/{{$post->id}}/edit">Edit</a>
  </button>

@endsection