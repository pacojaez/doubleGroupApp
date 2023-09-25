<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Trabajador;
use App\Models\Uniformidad;

class ShowTrabajador extends Component
{

    public $trabajador;
    public $uniformidads;
    public $pivot_id;

    public function mount( $id )
    {
        $this->trabajador = Trabajador::findOrFail($id);
        $this->trabajador->getUniformidadsEntregadas;

        $this->uniformidads = $this->trabajador->uniformidads()->orderBy('trabajador_uniformidad.created_at', 'desc')->get();

    }

    public function render()
    {

        return view('livewire.show-trabajador', [
            'trabajador' => $this->trabajador,
            'uniformidads' => $this->uniformidads,
            'pivot_id' => $this->pivot_id
        ]);
    }
}