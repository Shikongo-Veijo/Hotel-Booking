<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        $room = new Room();
        return view('rooms.create', compact('room'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'floor' => 'required',
            'type' => 'required',
            'beds' => 'required',
            'image'=> 'required', //new field
            'price' => 'required | numeric'
        ]);

        Room::create($request->all());

        $request->session()->flash('msg', 'Room has been created');

        return redirect('/rooms');
    }

    public function show(Room $room)
    {
        $room = Room::find($room->id);
        return view('rooms.detail', compact('room'));
    }

    public function edit(Room $room)
    {
        $room = Room::find($room->id);
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'floor' => 'required',
            'type' => 'required',
            'beds' => 'required',
            'price' => 'required | numeric'
        ]);
		
		 // Check if there is any image,
        if ($request->hasFile('image')) {
            // Check if file exists
            if (file_exists(public_path('uploads/') . $client->image)) {
                // Delete an old image
                unlink(public_path('uploads/') . $client->image);
            }

            // Get and Upload new image
            $image = $request->image;
            $image->move("uploads", $image->getClientOriginalName());

            $client->image = $request->image->getClientOriginalName();
        }

        $room = Room::find($id);
        $room->update($request->all());
        $request->session()->flash('msg', 'Room has been updated');
        return redirect('/rooms');
    }

    public function destroy(Room $room)
    {
        Room::destroy($room->id);
        request()->session()->flash('msg', 'Room has been deleted');
        return redirect('rooms');
    }
}
