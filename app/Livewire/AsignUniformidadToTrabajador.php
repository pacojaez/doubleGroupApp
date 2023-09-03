<?php

namespace App\Livewire;

use App\Models\Trabajador;
use App\Models\Uniformidad;
use Livewire\Component;

class AsignUniformidadToTrabajador extends Component
{
    public $trabajador;
    public $uniformidad;

    // public function mount(Trabajador $trabajador, Uniformidad $uniformidad){
    //     $this->trabajador = $trabajador->id;
    //     $this->uniformidad = $uniformidad->id;
    //     // $this->idT = $idTrabajador;
    //     // $this->m = Trabajador::findOrFail($trabajador)->get();
    // }


    public function save()
    {
        // dd($this->trabajador);
        $trabajador = Trabajador::findOrFail($this->trabajador);
        $uniformidad = Uniformidad::findOrFail($this->uniformidad);
        $trabajador->uniformidads()->attach($this->uniformidad);
        // $trabajador->attach($this->uniformidad);

        return redirect()->to('/trabajador/list')->with('uniformidadAddedToWorker', 'Asignada uniformidad al trabajador!');
    }

    public function render()
    {
        return view('livewire.asign-uniformidad-to-trabajador', [
            'trabajadors' => Trabajador::all(),
            'uniformidads' => Uniformidad::orderBy('type', 'ASC')->get()
        ]
    );
    }
}
