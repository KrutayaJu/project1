@extends('layouts.front')

@section('title')@stop

@section('content')
@stop

<body>
<div class="container">
    <div class="header">
        <div id="name">ABOUT FUTURE</div>

        <div class="search">
            <form action="/search" method="get">
                <div class="form-group">
                    <input type="search" name="search" class="form-control">
                    <span class="form-group-btn">
            <button type="submit" class="btn btm-primary">search</button>
        </span>
                </div>
            </form>

        </div>

    </div>
    <h1>Technology articles</h1>
    <div class="content">



        @foreach($article as $key => $value)
            <div class="description">
                <p class="name_art">{{$value->name}}</p>
                <p class="date_art">{{$value->created_at}}</p>

                <div class="first_d"><p>{{ $value->description }}</p></div>
                <div class="author">
                    <p>Author: {{ $value->author }}</p>
                </div>
                <div class="show">
                    <a class="btn btn-small btn-success" href="{{ \Illuminate\Support\Facades\URL::to('freeart/' . $value->id) }}" target="_blank">Show</a>
                </div>
            </div>
        @endforeach

        {{ $article->links() }}

    </div>
    <div class="footer">
        <div id="last"><a href="/admin/" target="_blank"> admin panel</a> </div>

    </div>
</div>
</body>
</html>