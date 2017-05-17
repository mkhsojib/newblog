@extends('layouts.master')

@section('content')
    <div class="page-header">
        <h1>{{ $post->title }}</h1>
    </div>
    <p>{{ $post->description }}</p>

    @foreach ($post->comments as $comment)
        <div class="media">
            <div class="media-left">
                <a href="#">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                </a>
            </div>
            <div class="media-body">
                {{ $comment->description }} - {{ $comment->user->name }}
            </div>
        </div>
    @endforeach


@endsection
