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
        $today = new DateTime("midnight", $timezone);

        $trains = Train::where('departure_datetime', '>=', $today)
        ->orderBy('departure_datetime')->get();
        
        return view('timetable', compact("trains"));
    }
}
