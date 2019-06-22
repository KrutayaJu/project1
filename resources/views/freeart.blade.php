

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
                    <input type="search" name="search" class="form-control" placeholder="">
                    <span class="form-group-btn">
            <button type="submit" class="btn btm-primary">search</button>
        </span>
                </div>
            </form>

        </div>

    </div>

    <h1>Technology articles</h1>
    <div class="sort">sort</br>
        <a href="{{action('FreeController@index', ['sort' => 'author', 'order' => 'asc'])}}">
            <i class="fa fa-chevron-up"></i>
        </a>
        <a href="{{action('FreeController@index', array('sort' => 'author', 'order' => 'desc'))}}">
            <i class="fa fa-chevron-down"></i>
        </a>
    </div>

    <div class="content">
        @foreach($articles as $key => $value)
            <div class="description" >
                <p class="name_art">{{$value->name}}</p>
                <p class="date_art">{{$value->created_at}}</p>
                <div class="first_d"><p>{{ $value->description }}</p></div>
                <div class="author">
                    <p>Author: {{ $value->author }}</p>
                </div>
                <div class="show">
                    <a class="btn btn-small btn-success" href="{{ URL::to('freeart/' . $value->id) }}" target="_blank">Show</a>
                </div>
            </div>
        @endforeach
        {{-- $articles->links() --}}
    </div>
    <div class="footer">
        <div><a href="/admin/" target="_blank">admin panel</a> </div>

    </div>
    {{ $articles->appends($request->query())->render() }}
</div>
</body>
</html>
{{--<div class="container">--}}

    {{--<!-- will be used to show any messages -->--}}
    {{--@if (Session::has('message'))--}}
        {{--<div class="alert alert-info">{{ Session::get('message') }}</div>--}}
    {{--@endif--}}

    {{--<table class="table table-striped table-bordered">--}}
        {{--<thead>--}}
        {{--@include('includes.nav')--}}
        {{--@include('includes.addLink')--}}
        {{--<tr>--}}
            {{--<td colspan="9" align="center">--}}
                {{--<a href="{{ URL::to('articles/create') }}" class="btn btn-small btn-success">Add Job</a>--}}
            {{--</td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td>ID</td>--}}
            {{--<td>Name</td>--}}
            {{--<td>Author</td>--}}
            {{--<td>Description</td>--}}
            {{--<td>Date of creation</br>--}}
                {{--<a href="{{action('FreeController@index', ['sort' => 'created_at', 'order' => 'asc'])}}">--}}
                    {{--<i class="fa fa-chevron-up"></i>--}}
                {{--</a>--}}
                {{--<a href="{{action('FreeController@index', array('sort' => 'created_at', 'order' => 'desc'))}}">--}}
                    {{--<i class="fa fa-chevron-down"></i>--}}
                {{--</a>--}}
            {{--</td>--}}
            {{--<td>Last update</td>--}}
            {{--<td>Actions</td>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--@foreach($articles as $key => $value)--}}
            {{--<tr>--}}
                {{--<td>{{ $value->id }}</td>--}}
                {{--<td>{{ $value->name }}</td>--}}
                {{--<td>{{ $value->author }}</td>--}}
                {{--<td>{{ $value->description }}</td>--}}
                {{--<td>{{ $value->created_at }}</td>--}}
                {{--<td>{{ $value->updated_at }}</td>--}}

                {{--<!-- we will also add show, edit, and delete buttons -->--}}
                {{--<td style="min-width: 186px;">--}}

                    {{--<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->--}}
                    {{--<!-- we will add this later since its a little more complicated than the other two buttons -->--}}

                {{--{{ Form::open(array('url' => 'freeart/' . $value->id, 'class' => 'pull-right')) }}--}}
                {{--{{ Form::hidden('_method', 'DELETE') }}--}}
                {{--{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}--}}
                {{--{{ Form::close() }}--}}


                {{--<!-- show the nerd (uses the show method found at GET /nerds/{id} -->--}}
                    {{--<a class="btn btn-small btn-success" href="{{ URL::to('freeart/' . $value->id) }}">Show</a>--}}

                    {{--<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->--}}
                    {{--<a class="btn btn-small btn-info" href="{{ URL::to('articles/edit/' . $value->id ) }}">Edit</a>--}}

                {{--</td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
        {{--</tbody>--}}
    {{--</table>--}}

    {{--{{$articles->render()}}--}}

{{--</div>--}}
{{--</body>--}}
{{--</html>--}}




{{--@extends('layouts.header')--}}

{{--@section('title')@stop--}}

{{--@section('content')--}}
{{--@stop--}}
{{--<head>--}}
    {{--<link href="style.css" rel="stylesheet" type="text/css" >--}}
    {{--<script src="JS.js"> </script>--}}
    {{--<meta charset="UTF-8">--}}
    {{--<title>Title</title>--}}

{{--</head>--}}
{{--<body>--}}
{{--<div class conteine>--}}

    {{--<div class="header" >--}}

        {{--<div id="name">   Car Technology </div>--}}

    {{--</div>--}}

    {{--<div class="content" >--}}
        {{--<div id="bloc1"> Cars1--}}
            {{--<div class="bloc1">--}}

                {{--<ol>--}}
                    {{--Ferrari's fastest production car is an electric hybrid--}}
                {{--</ol>--}}
            {{--</div>--}}
        {{--</div>--}}

            {{--<br>--}}
            {{--<div class="bloc2">--}}
{{--<ol>--}}

{{--</ol>--}}

            {{--</div>--}}
        {{--</div>--}}
        {{--<br>--}}

        {{--<div class="bloc3">--}}

            {{--<br> <div class="p"> Водка полезна для сердца</div>--}}
            {{--<br>--}}
            {{--<div class="image"> <img src="1.jpg" alt="Альтернативный текст" ; width="400" height="300" > </div>--}}
            {{--<div class="text"> В научном сообществе уже давно знают о пользе водки для сердечно-сосудистой системы. Исследование показало, что этот спиртной напиток помогает создавать коллатеральные кровеносные сосуды, которые образовывают больше связей между сердцем и легкими, в конечном итоге улучшая кровообращение.</div>--}}
            {{--<br>--}}

            {{--</div>--}}

        {{--</div>--}}
        {{--<br>--}}
    {{--</div>--}}

    {{--<div class="footer" >--}}
        {{--<div id="end"> Выбор за тобой</div>--}}
        {{--<div id="sites">--}}
            {{--<ul>--}}
                {{--<li>  <a href="https://www.youtube.com/watch?time_continue=2&v=Z608RbP1tt0"> Смотри видео о вреде алкоголя </a> </li>--}}
                {{--<li>  <a href="https://www.youtube.com/watch?v=DKNT5AdYUhY"> Чем полезен алкоголь </a> </li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}

{{--</div>--}}

{{--</body>--}}
