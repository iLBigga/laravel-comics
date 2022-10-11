@extends('layouts.app')


@section('content')


<section class="gallery">
    <div class="container">
        <figure class="cover">
            <img src="{{$comic['thumb']}}" alt="">
        </figure>
    </div>
</section>

<section class="comic">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="title">{{$comic['title']}}</h1>
                <div class="price_bar">
                    <div class="price_left">
                        <div>
                            <span class="status">U.S. Price:</span>
                            <span class="price">{{$comic['price']}}</span>
                        </div>
                        <div>
                            <span class="status">
                                available
                            </span>
                        </div>
                    </div>
                    <div class="price_right">
                        <input type="button" value="Check Availability">
                    </div>
                </div>
                <p class="description">{{$comic['description']}}</p>
            </div>
            <div class="adv col-4">
                <span>ADVERTISMENT</span>
                <img src="../images/adv.jpg" alt="adv">
            </div>
        </div>
    </div>
</section>

<section class="info">
    <div class="container">
        <div class="row">
            <div>
                <h4>Talent</h4>
                @foreach ($comic['artists'] as $artist)
                <span>{{$artist}}</span>           
                @endforeach
                @foreach ($comic['writers'] as $writer)
                <span>{{$writer}}</span>           
                @endforeach
            </div>
            <div>
                <h4>Spec</h4>
                <span>{{$comic['series']}}</span>
                <span>{{$comic['price']}}</span>
                <span>{{$comic['sale_date']}}</span>
            </div>
        </div>
        <div>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
</section>

@endsection