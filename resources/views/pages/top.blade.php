@extends('layouts.main')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Top Vapers</h1>
        </div>
    </div>
    <div class="container">
        @foreach($top as $celeb)
            <div class="row">
                <div class="col-md-4">
                    <div class="jumbotron">
                        <h2>{!! $celeb->name !!}</h2>
                        <p class="lead"><img src="{!! $celeb->img !!}" width="225" height="225"></p>
                        <p class="lead">Score: {!! $celeb->score !!}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop
