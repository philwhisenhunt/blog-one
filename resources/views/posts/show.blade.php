
@extends ('layouts.master')

@section ('content')
<h1> Posts are going to go here </h1>

        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <h3> Comments </h3>
        <p>{{$post->comments}}</p>
@endsection
