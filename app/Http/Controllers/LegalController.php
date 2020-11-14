<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class LegalController extends Controller
{
    public function getImprint()
    {
        return view('legal.imprint');
    }

    public function getPrivacy()
    {
        return view('legal.privacy');
    }
}