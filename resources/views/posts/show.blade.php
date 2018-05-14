
        @extends ('layout')

@section ('content')
<h1> The post will be here </h1>

        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <h3> Comments </h3>
        <p>{{$post->comments}}</p>
@stop
