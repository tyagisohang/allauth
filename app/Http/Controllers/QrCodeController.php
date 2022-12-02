<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QrCode;
use \Milon\Barcode\DNS1D;

class QrCodeController extends Controller
{
    public function index()
    {
        $arrData = [
            'Name'  => 'Anoop Tyagi',
            'Fname' => 'Kuldeep Tyagi',
            'Address' => 'Meerut',
        ];

        return view('qrcode', compact('arrData'));
    }
}
