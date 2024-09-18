<?php

namespace App\Http\Controllers;

use App\Models\QrCode;
use Illuminate\Http\Request;

class QrCodeController extends Controller
{

    public function indexAPI(){

        $qrcode=QrCode::all();
        return $qrcode;

    }

    public function store(Request $request){
        $qrcode = new QrCode();

        $qrcode->typeQrCode = $request->typeQrCode;
        $qrcode->descQrCode = $request->descQrCode;
        $qrcode->save();
    }
}
