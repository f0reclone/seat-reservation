<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Date;
use App\Models\Visitor;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public const BOOKING_RULES = [
        'date_id' => ['required', 'exists:App\Models\Date,id'],
        'quantity' => 'required',
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
    ];

    public function index()
    {
        $dates = Date::all();
        return view('booking', ['dates' => $dates]);
    }

    public function post(Request $request)
    {
        $this->validate($request, self::BOOKING_RULES);

        $visitor = new Visitor();
        $visitor->fill($request->only(array_keys(self::BOOKING_RULES)));
        $visitor->save();

        $request->session()->keep(['date_id' => $visitor->date_id]);

        return redirect()->route('booking.success', ['date'=> $visitor->date_id]);
    }

    public function success(Request $request)
    {
        $additionalInformation = '';
        $id = ($request->input('date', $request->session()->get('date_id', null)));
        if($id !== null && ($date = Date::query()->find($id)) !== null) {
            $additionalInformation = $date->additionalInformation ?? '';
        }
        return view('success', ['additionalInformation' => $additionalInformation]);
    }
}