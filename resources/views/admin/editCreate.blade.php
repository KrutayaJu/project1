<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jobs at Scalors</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}"/>
    <!-- Bootstrap -->
    {{--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/mainpage-style.css')}}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js" type="application/javascript"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js" type="application/javascript"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluid move__right well well-sm row">
    <div class="col-md-2"></div>
    <div class="for-beauty col-md-8">
        <ul class="list-group desc">
            <li class="list-group-item">
                <div class="results__items row">
                    <div class="results__leftpart col-sm-6 col-md-6">
                        <p class="results__vacancy">{{$name}}</p>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="vacancy">
                    <div class="vacancy__description">
                        {!! $description!!}
                    </div>
                    <hr>
                    <div class="vacancy__reply row">
                        <button style="visibility: hidden" class="vacancy__i-know btn btn-default col-sm-6 col-md-4">I
                            know ideal candidate
                        </button>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="col-md-2"></div>
</div>
</body>
</html>