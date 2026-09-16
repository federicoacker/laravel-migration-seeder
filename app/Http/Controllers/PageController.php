<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Train;
use DateTimeZone;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $timezone = new DateTimeZone("Europe/Rome");
        $eight = DateTime::createFromFormat("Y-m-d H:i:s", "2026-09-16 8:00:00", $timezone);
        $eleven = DateTime::createFromFormat("Y-m-d H:i:s", "2026-09-16 11:00:00", $timezone);

        $trains_at_eight = Train::where('departure_datetime', '>=', $eight)->orderBy('departure_datetime')->get();
        $trains_at_eleven = Train::where('departure_datetime', ">=", $eleven)->orderBy('departure_datetime')->get();
        
        return view('timetable', compact(['trains_at_eight', 'trains_at_eleven']));
    }
}
