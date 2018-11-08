@extends('masterLayout.master')

{{-- no section for TITLE and CONTENT yields--}}

@section('head')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="description" content="Smart Parking System">
    <meta name="author" content="Christian Garillo">
    <link rel="icon" href="favicon.ico">

    <script type="text/javascript" src="libs/redips/redips-drag-min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/admin.css" rel="stylesheet">

@endsection

@section('navBar')

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Smart Parking System</a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Profile</a></li>
                </ul>
            </div>
        </div>
    </nav>

@endsection

@section('footer')

    <script src="libs/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/admin.js" type="text/javascript"></script>

@endsection




