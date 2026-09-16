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
        $eleven = DateTime::createFromFormat("Y-m-d H:i:s", "2026-09-16 11:00:00", $timezone);
        $fourteen = DateTime::createFromFormat("Y-m-d H:i:s", "2026-09-16 14:00:00", $timezone);

        $trains_at_eleven = Train::where('arrival_datetime', '>=', $eleven)->get();
        $trains_at_fourteen = Train::where('arrival_datetime', ">=", $fourteen)->get();
        
        return view('timetable', compact(['trains_at_eleven', 'trains_at_fourteen']));
    }
}
