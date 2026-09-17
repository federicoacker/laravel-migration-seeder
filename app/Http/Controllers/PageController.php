<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Train;
use DateTimeZone;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $today = now('Europe/Rome')->startOfDay();

        $trains = Train::where('departure_datetime', '>=', $today)
        ->orderBy('departure_datetime')->get();
        
        return view('timetable', compact("trains"));
    }
}
