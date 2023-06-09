

@extends('layouts.app')


@section('title')
  Blog - Index
@endsection

@section('content')
    <h1>Posts</h1>

    @if(!Auth::guest())
      <button>
        <a href="/from_scratch/public/posts/create">New</a>
      </button>
      <br><br>
    @endif


    @if(count($posts) > 0)

      @foreach ($posts as $post)
        <div>
          <img
            src="/from_scratch/public/images/{{$post->cover_image}}"
            alt=""
            style="height:100px; width:100px; display:block;"
          >
        </div>
        <h3>
          <a href="/from_scratch/public/posts/{{$post->id}}">{{$post->title}}</a>
        </h3>
        <small>Written on: {{$post->created_at}} by {{$post->user->name}}</small>
        <br><br>
      @endforeach

    {{-- To implement pagination --}}
    {{-- {{$posts->links()}} --}}

    @else

      <p>No posts found</p>

    @endif
@endsection