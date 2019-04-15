<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Client;
use App\Dashboard;
use App\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $client = new Client();
        $room = new Room();
        $booking  = new Booking();
        $calendar = new EventController();
      //  $name = new name();
        return view('dashboard', compact('client','room','booking','calendar'));
    }

  
   
    
 
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Dashboard $dashboard)
    {
        //
    }

    public function edit(Dashboard $dashboard)
    {
        //
    }

    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
