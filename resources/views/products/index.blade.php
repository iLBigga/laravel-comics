@extends('layouts.app')

@php   
   $merchList = [
        [
            'img' => '../images/buy-comics-digital-comics.png',
            'text' => 'digital comics',
            'href' => '#',
        ],
        [
            'img' =>  '../images/buy-comics-merchandise.png',
            'text' => 'dc merchandise',
            'href' => '#',
        ],
        [
            'img' =>  '../images/buy-comics-subscriptions.png',
            'text' => 'subscription',
            'href' => '#',
        ],
        [
            'img' =>  '../images/buy-comics-shop-locator.png',
            'text' => 'comic shop locator',
            'href' => '#',
        ],
        [
            'img' =>  '../images/buy-dc-power-visa.svg',
            'text' => 'dc power visa',
            'href' => '#',
        ],
    ];
@endphp

@section('content')


    <section class="comics">
        <div class="container">
            <div class="button between" href="#">current 'series'</div>
            <div class="grid">
                @foreach ($comics as $comic)
                <a href="{{ route('comic', ['id' => $loop->index]) }}">
                    <article class="card">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                        <div>{{$comic['title']}}</div>
                    </article>   
                </a>
                @endforeach
            </div>
            <a class="button" href="#">load more</a>
        </div>
    </section>



    <section class="merch_list">
        <div class="container">
            <ul>
                @foreach ($merchList as $item)
                <li>               
                    <a href="{{$item['href']}}">
                         <img src="{{$item['img']}}" alt="{{$item['text']}}">
                         <span>{{$item['text']}}</span>
                     </a>                
                </li>                    
                @endforeach
            </ul>
        </div>
    </section>

    
@endsection