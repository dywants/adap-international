<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiskyImmigrationController extends Controller
{
    public function __invoke()
    {
        return view('immigration');
    }
}
