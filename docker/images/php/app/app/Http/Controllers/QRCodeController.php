<?php

namespace App\Http\Controllers;

use App\Http\Requests\QRCodeRequest;
use Illuminate\Http\Request;
use Milon\Barcode\DNS2D;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function generate(QRCodeRequest $request)
    {
        $code = $request->code;
        $size = (int)($request->size ?? 3);
        $qr = new DNS2D();
        $codeImg = $qr->getBarcodePNG($code, 'QRCODE,L', h: $size, w: $size);
        return response(base64_decode($codeImg))->header('Content-Type','image/png')->header('Content-Disposition','inline; filename="codeimg.png"');
    }
}
