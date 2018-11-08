<!DOCTYPE html>
<html lang="en">

<<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
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

    <title>{{ env('APP_NAME') }} - Create Parking Lot</title>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SmartParking</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Profile</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">Create Parking Lot</a></li>
                <li><a href="#">Home</a></li>
            </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Create Parking Lot</h1>

            <div class="row placeholders">
                <div class="container" id="redips-drag">

                    <div class="drag-container">
                        <table class="table-drag">
                            <tr>
                                <td class="redips-single">
                                    <div id="a" class="redips-drag redips-clone bg-go draggable-content">
                                        <span class="glyphicon-class">HName</span>
                                        <span class="glyphicon glyphicon-road"></span>
                                    </div>
                                </td>

                                <td class="redips-single">
                                    <div id="b" class="redips-drag redips-clone bg-go draggable-content">
                                        <span class="glyphicon-class">VName</span>
                                        <span class="glyphicon glyphicon-road"></span>
                                    </div>
                                </td>

                                <td class="redips-trash bg-warning">
                                    <span class="glyphicon glyphicon-trash"> Delete</span>
                                </td>
                            </tr>
                        </table>

                    </div>


                    <div class="container">
                        <div class="drag-container">
                            <table class="table-drag">
                                <tr>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                    <td id="td1">
                                        <div id="b" class="redips-drag bg-go draggable-content">
                                            <span class="glyphicon-class">VName</span>
                                            <span class="glyphicon glyphicon-road"></span>
                                        </div>
                                    </td>
                                </tr>
                            </table>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<script src="libs/jquery/jquery-3.2.1.min.js"></script>
<script src="libs/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
