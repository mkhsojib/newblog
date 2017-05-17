@extends('layouts.master')

@section('content')
    <div class="page-header">
        <h1>{{ $post->title }}</h1>
    </div>
    <p>{{ $post->description }}</p>
    @if(Auth::check())
        {!!  Form::open(['url' => 'comments', 'class' => 'form-horizontal']) !!}
        <div class="form-group">
            {{ Form::textarea('description',null, ['class'=>'form-control','rows'=>3,'placeholder'=>'add a comment'])}}
            {{ Form::hidden('post_id',$post->id)}}

        </div>


        <div class="form-group">
            <div class="col-sm-offset-10 col-sm-2">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
        {!! Form::close() !!}

    @else
        <h1>Login to comment</h1>

    @endif
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
