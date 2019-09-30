<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Room;
use App\User;

class DashboardController extends Controller
{
    //
    public function show()
    {
    	$rs = Room::all();
    	$us = User::all();
    	$bs = Booking::all();
    	$bookings = Booking::count();
    	$rooms = Room::count();
    	$users = User::count();
    	return view('admin.dashboard',compact('bookings','rooms','users','rs','us','bs'));
    }
}
