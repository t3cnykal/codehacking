@extends('layouts.admin')

@section('content')

    <h1>Posts</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Owner</th>
                <th>Title</th>
                <th>Category</th>
                <th>Body</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>
            @if($posts)
                @foreach ($posts as $post)

                    <tr>
                        <th>{{$post->id}}</th>
                        <th><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt=""></th>
                        <th> <a href="{{route('posts.edit', $post->id)}}">{{$post->user->name}}</a> </th>
                        <th>{{$post->title}}</th>
                        <th>{{$post->category ? $post->category->name : 'Uncategorized'}}</th>
                        <th>{{str_limit($post->body, 7)}}</th>
                        <th>{{$post->created_at->diffForhumans()}}</th>
                        <th>{{$post->updated_at->diffForhumans()}}</th>
                    </tr>

                @endforeach
            @endif
        </tbody>
    </table>

@stop
