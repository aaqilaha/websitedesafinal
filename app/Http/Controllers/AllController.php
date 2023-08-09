<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function home(){
        return view('home');
    }
    public function kontak(){
        return view('kontak');
    }
    public function potensi(){
        return view('potensi');
    }
    public function wisata(){
        return view('wisata');
    }
    public function pertanian(){
        return view('pertanaian');
    }
    public function perikanan(){
        return view('perikanan');
    }
    public function sejarah(){
        return view('sejarah');
    }
    public function profil(){
        return view('profil');
    }
    public function geografis(){
        return view('geografis');
    }
    public function demografis(){
        return view('demografis');
    }
    public function kajian(){
        return view('kajian');
    }
    public function masterplan(){
        return view('masterplan');
    }
    public function detail(){
        return view('detail');
    }
}