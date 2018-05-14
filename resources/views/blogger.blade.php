<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<!-- <h1>
Hello



</h1> -->
<body>
    <ul>
      @foreach ($posts as $post)

                <li><b>{{ $post->title }}</b></li>
                <p>{{ $post->body }}</p>

        @endforeach 
    </ul>

    <!-- <h1>TEST</h1> -->

</body>
</html>