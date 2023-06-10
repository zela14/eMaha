<?php

namespace App\Http\Livewire;

use App\Artikel;
use Livewire\Component;

class FormArtikel extends Component
{
    public $judul;
    public $deskripsi;
    public function render()
    {
        return view('livewire.form-artikel');
    }

    public function simpan()
    {
        $artikel = Artikel::create([
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi
        ]);
        $this->resetInput();
        $this->emit('indexArtikel', $artikel); 
    }
    private function resetInput()
    {
        $this->judul = null;
        $this->deskripsi = null;
    }
}
