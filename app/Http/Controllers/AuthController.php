<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    public function me()
    {
        return
        [
            "NIS" => "3103118063",
            "Name" => "Fena Nur Mustika",
            "Gender" => "Perempuan",
            "Phone" => "081229958586",
            "Kelas" => "XII RPL 2",
        ];
    }
}