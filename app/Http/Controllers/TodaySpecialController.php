<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodaySpecialController extends Controller
{
    public function todayspecial() {
        return view('today-special');
    }
}