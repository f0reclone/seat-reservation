<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Date;

class BookingController extends Controller
{
    public function index()
    {
        $dates = Date::all();
        return view('booking', ['dates' => $dates]);
    }
}
