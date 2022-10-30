<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function generateQrCode(){
       QrCode::size(200)
                ->format('svg')
                ->backgroundColor(213, 212, 210)
                // ->color(255, 0, 0)
                // ->eye('circle')
                ->gradient(73, 126, 176, 14, 126, 128, 'vertical') 
                ->eyeColor(2, 154, 205, 50, 1, 1, 1)
                ->eyeColor(1, 154, 205, 50, 1, 1, 1)
                ->eyeColor(0, 1, 1, 1, 154, 205, 50)
                ->style('round')
                ->margin(3)
                ->generate('http://10.0.1.200/DBC%20-%20V5/public/cardWatch47', public_path('images/qrcode.png'));
    }
    
}
