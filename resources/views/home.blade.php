@extends('layouts.app')


@section('content')

<main class="main-bg">
    <div class="jumbotron"></div>
    <div class="container">
        <div class="button between" href="#">current 'series''</div>
        <ComicsCards/>
        <a class="button" href="#">load more</a>
    </div>


    <div class="grid">
        @foreach ($comics as $comic)
        <article class="card">
            <img :src="{{$comic['thumb']}}" :alt="{{$comic['series']}}">
            <div>{{$comic['series']}}</div>
        </article>   
        @endforeach
    </div>
</main>
    
@endsection