<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function getTrains()
    {


        $date = getdate();

        $month = '';

        if ($date['mon'] < 10) {
            $month = '0' . $date['mon'];
        } else {
            $month = str($date['mon']);
        }

        $today = $date['year'] . '-' . $month . '-' . $date['mday'];
        // var_dump($today);


        $trains = Train::where('departure_day', '>=', $today)->get();

        return view('trains', compact('trains'));
    }
}
