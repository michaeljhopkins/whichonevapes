@extends('layouts.main')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>{!! $phrase->phrase !!}</h1>
            <p>Who is more likely to be a secret vaper</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            @foreach($celebs as $celeb)
                <div class="col-md-4">
                    <div class="jumbotron">
                        <h2>{!! $celeb->name !!}</h2>
                        <p class="lead"><img src="{!! $celeb->img !!}" width="225" height="225"></p>
                        <p><a class="btn btn-lg btn-success" href="/battles/{!! $battle->id !!}/{!! $celeb->id !!}" role="button">Vote</a></p>
                    </div>
                </div>
                <div class="col-md-1"></div>
            @endforeach
        </div>
    </div>
@stop
