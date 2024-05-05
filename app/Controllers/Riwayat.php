<?php

namespace App\Controllers;

use App\Models\DataPasienModel;

class Riwayat extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Riwayat"
        ];

        return view('riwayat/index', $data);
    }
}
