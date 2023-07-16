<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class MidtransController extends Controller
{
    \Midtrans\Config::$serverKey = config('services.midtrans.serverKey');
    \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
    \Midtrans\Config::$isSanitized = config('services.midtrans.isSanitized');
    \Midtrans\Config::$is3ds = config('services.midtrans.is3ds');
}
