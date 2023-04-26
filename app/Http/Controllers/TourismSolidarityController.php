<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourismSolidarityController extends Controller
{
    public function __invoke()
    {
        return view('tourism-solidarity');
    }
}
