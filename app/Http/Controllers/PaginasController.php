<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PaginasController extends Controller
{
    public function overOns()
    {
        return view('pages.over-ons');
    }
}
