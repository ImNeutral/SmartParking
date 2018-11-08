@extends('adminLayout.adminLayout')

@section('title')
        Create Parking Lot
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">Parking Lot</a></li>
                <li><a href="#">Home</a></li>
            </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Create Parking Lot</h1>

            <div class="row placeholders">

                <div class="container" id="redips-drag">

                    <div class="btn-group btn-setting-placement">
                        <button class="btn btn-default" id="addColumn">Add Column</button>
                        <button class="btn btn-default" id="addRow">Add Row</button>
                        <button class="btn btn-default" id="testButton">Show Table Content</button>
                    </div>


                    <div class="drag-container">
                        <table class="table-drag">
                            <tr>
                                <td class="redips-single">
                                    <div id="a" class="redips-drag redips-clone bg-go draggable-content" data-id="DummyH">
                                        <span class="glyphicon-class">HName</span>
                                        <span class="glyphicon glyphicon-road"></span>
                                    </div>
                                </td>

                                <td class="redips-single">
                                    <div id="b" class="redips-drag redips-clone bg-go draggable-content" data-id="DummyV">
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
                                <tbody class="parkingLot parkingLotCreate">
                                    <tr>
                                        <td>
                                            <div id="a" class="tdContent" data-id="One">
                                                <span class="glyphicon-class">HName</span>
                                                <span class="glyphicon glyphicon-road"></span>
                                            </div>

                                        </td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

@endsection
