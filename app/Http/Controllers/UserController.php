<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
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

    public function create(){
        return view('create_user');
        }
    
        public function store(Request $request)
{
    $data = [
        'nama' => $request->input('nama'),
        'kelas' => $request->input('kelas'),
        'npm' => $request->input('npm'),
        ];
        return view('profile', $data);
}
        
}
