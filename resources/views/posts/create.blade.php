@extends ('layouts.master')

@section ('content')

    <div class="col-md-8 blog-main">

        <h1>Publish a post</h1>

        <hr>

        <form method="POST" action="/posts">

            {{ csrf_field() }}


           
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Title of Post" name="title" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Body</label>
                    <textarea name="body" id="body" class="form-control" input type:"text" required></textarea> 
               </div>
    
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>


            @if (count($errors))
                <div class="form-group">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                
                    </div>

                </div>

                @endif

            </form>

           

    </div>

@endsection 