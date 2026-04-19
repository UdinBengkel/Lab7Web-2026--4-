<?php

namespace App\Cells;

use CodeIgniter\View\Cell;

class ArtikelTerkini extends Cell
{
    public function view()
    {
        // Data statis dulu untuk test
        $artikel = [
            ['judul' => 'Artikel Testing 1', 'slug' => 'test-1'],
            ['judul' => 'Artikel Testing 2', 'slug' => 'test-2'],
            ['judul' => 'Artikel Testing 3', 'slug' => 'test-3'],
        ];
        
        return view('components/artikel_terkini', ['artikel' => $artikel]);
    }
}