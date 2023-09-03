<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Trabajador;
use App\Models\Uniformidad;

class ShowTrabajador extends Component
{

    public $trabajador;
    public $uniformidads;

    public function mount( $id )
    {
        $this->trabajador = Trabajador::findOrFail($id);
        $this->trabajador->uniformidads;
        // dd($this->trabajador);
        // $this->uniformidads = Uniformidad::where()
    }

    public function render()
    {
        return view('livewire.show-trabajador', [
            'trabajador' => $this->trabajador,
            'uniformidads' => $this->uniformidads
        ]);
    }
}