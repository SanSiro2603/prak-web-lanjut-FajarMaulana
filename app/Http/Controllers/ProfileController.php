<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function profile($nama = "Fajar Maulana", $kelas = "D3 Manajemen Informatika", $npm = "2307051006") 
    { 
        $data = [ 
            'nama' => $nama, 
            'kelas' => $kelas, 
            'npm' => $npm, 
        ];
        
        return view('profile', $data); 
    }
}
