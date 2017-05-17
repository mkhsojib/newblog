@extends('layouts.master')

@section('content')

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Created At</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($posts as $key=> $post)
            <tr>
                <td>{{ $post->id }}</td>
                {{--<td>{{ ++$key }}</td>--}}
                <td><a href="{{ action('PostController@show', ['id' => $post ->id]) }}" > {{ $post->title  }}</a> </td>
                <td>{{ $post->description  }} <br> <a href="{{ action('PostController@show', ['id' => $post ->id]) }}">Read More</a> </td>
                <td><img src="{{ $post->cover_image }}"/> </td>
                <td>{{ $post->created_at->diffForHumans(Carbon\Carbon::now())}}</td>

            </tr>
        @endforeach

        </tbody>
    </table>

    {{ $posts->links() }}


@endsection
