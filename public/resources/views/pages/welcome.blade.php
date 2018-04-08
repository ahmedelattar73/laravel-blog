@extends('main')

@section('title', 'Welcome')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Hello, world!</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae cupiditate distinctio, dolor eaque eius eveniet.</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisic magnam maxime molestias, mollitia numquam officia pariatur perspiciatis </p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisic magnam maxime molestias, mollitia numquam officia pariatur perspiciatis </p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisic magnam maxime molestias, mollitia numquam officia pariatur perspiciatis </p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1">
                sidebar
            </div>
        </div>

    @endsection