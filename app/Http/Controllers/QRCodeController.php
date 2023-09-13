<?php

namespace App\Http\Controllers;

use App\Http\Requests\QRCodeRequest;
use Illuminate\Http\Request;

class QRCodeController extends Controller
{
    public function generate(QRCodeRequest $request)
    {
        return 'QRCodeController::generate';
    }
}
