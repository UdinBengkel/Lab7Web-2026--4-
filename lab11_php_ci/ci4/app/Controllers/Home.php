<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new ArtikelModel();
        $artikel = $model->orderBy('created_at', 'DESC')->limit(5)->findAll();
        
        $data = [
            'title' => 'Home',
            'content' => 'Selamat datang',
            'sidebar_artikel' => $artikel
        ];
        return view('home', $data);
    }
}