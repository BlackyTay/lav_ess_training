<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowRoomsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, \App\RoomType $roomType = null)
    {
        $rooms = Room::byType($roomType->id)->get();
        return view('rooms.index', ['rooms'=>$rooms]);
    }
}
