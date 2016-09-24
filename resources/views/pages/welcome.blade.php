@extends('main')

@section('title', '| Homepage')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                  <h1>Welcome to our website!</h1>
                  <p class="lead">Veti gasi aici multe articole, fotografii si filmulete care va vor convinge sa vizitati Transilvania cat mai curand. </p>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Cele mai noi articole.</a></p>
                </div>
            </div>
        </div> <!-- end of header .row -->

        <div class="row">
            <div class="col-md-8">

               @foreach($posts as $post)

                   <div class="post">
                       <h3>{{ $post->title }}</h3>
                       <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
                       <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                   </div>

                   <hr>   

               @endforeach  

            </div>

            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>
@stop