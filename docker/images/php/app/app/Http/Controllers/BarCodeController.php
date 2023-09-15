<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarCodeRequest;
use Milon\Barcode\DNS2D;
use Milon\Barcode\DNS1D;

class BarCodeController extends Controller
{
    public function generateEAN13(BarCodeRequest $request)
    {
        $code = $request->code;
        $barHeight = (int)($request->barHeight ?? 80);
        $codeImg = DNS1D::getBarcodePNG($code, 'EAN13', h: $barHeight, showCode: true);
        return response(base64_decode($codeImg))->header('Content-Type','image/png')->header('Content-Disposition','inline; filename="codeimg.png"');
    }
    public function generateC128(BarCodeRequest $request)
    {
        $code = $request->code;
        $barHeight = (int)($request->barHeight ?? 80);
        $codeImg = DNS1D::getBarcodePNG($code, 'C128', h: $barHeight, showCode: true);
        return response(base64_decode($codeImg))->header('Content-Type','image/png')->header('Content-Disposition','inline; filename="codeimg.png"');
    }
}
