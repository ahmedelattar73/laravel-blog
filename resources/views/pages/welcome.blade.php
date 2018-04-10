@extends('main')

@section('title', 'Welcome')

@section('content')


        <div class="row">
            <div class="col-md-12">

                @foreach($posts as $post)
                    <div class="jumbotron">
                        <h1>{{ $post->title }}</h1>
                        <p> {{ substr($post->body, 0, 160) }} {{ strlen($post->body) > 160 ? '...' : '' }} </p>
                        <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
                    </div>
                    @break
                @endforeach

            </div>
        </div>


        <div class="row">
            <div class="col-md-8">

                @foreach($posts as $post)

                    <div class="post">
                        <h3> {{ $post->title }} </h3>
                        <p> {{ substr( $post->body, 0, 160 )}} {{ strlen($post->body) > 160 ? '...' : ''  }} </p>
                        <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read more</a>
                    </div>
                    <hr>

                @endforeach

            </div>


            <div class="col-md-3 col-md-offset-1">
                sidebar
            </div>

        </div>{{--End row--}}

    @endsection