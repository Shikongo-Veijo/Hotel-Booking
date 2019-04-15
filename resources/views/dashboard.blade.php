@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')

    <h2><i class="fa fa-dashboard"></i> Dashboard</h2>
    <hr>

    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $client->count() }}</div>
                            <div>Total Clients</div>
                        </div>
                    </div>
                </div>
                <a href="/clients">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-4 col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-table fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $room->count() }}</div>
                            <div>Total Rooms</div>
                        </div>
                    </div>
                </div>
                <a href="/rooms">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    
      
        <div class="col-lg-4 col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-clock-o fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $room->where('status', 1)->count() }}</div>
                            <div>Available Rooms</div>
                        </div>
                    </div>
                </div>
                <a href="/rooms">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-4 col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-calendar-check-o fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $room->where('status', 0)->count() }}</div>
                            <div>Booked Rooms</div>
                        </div>
                    </div>
                </div>
                <a href="/bookings/canceled">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <!-- New Counter -->
        <div class="col-lg-4 col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-2">
                            <i class="fa fa-calculator fa-5x"></i>
                        </div>
                        <div class="col-xs-5 text-right">
                            <div class="huge">{{ $room->where('name', 'single' )->count() }} Single Room(s) </div>
                        </div>

                        <div class="col-xs-5 text-right">
                            <div class="huge">{{ $room->where('name', "double" )->count() }} Double Room(s)</div>
                        </div>

                        <div class="col-xs-5 text-right">
                            <div class="huge">{{ $room->where('name', "triple" )->count() }} Triple Room(s)</div>
                        </div>

                        <div class="col-xs-5 text-center">
                            <div class="huge">{{ $room->where('name', "quad" )->count() }} Quad Room(s)</div>
                        </div>
                        <div class="col-xs-5 text-center">
                            <div class="huge">{{ $room->where('name', "king" )->count() }} King Room(s)</div>
                        </div>
                        <div class="col-xs-5 text-center">
                            <div class="huge">{{ $room->where('name', "deluxe" )->count() }} Deluxe Room(s)</div>
                        </div>
                    </div>
                </div>
               
                <a href="/rooms">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
            
        </div>
        <!-- End of new counter -->
    </div>

@endsection
