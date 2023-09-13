<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarCodeRequest;
use Illuminate\Http\Request;

class BarCodeController extends Controller
{
    public function generate(Request $request)
    {
        return 'BarCodeController::generate';
    }
}
