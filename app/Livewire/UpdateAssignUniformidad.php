<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Trabajador;
use App\Models\Uniformidad;
use App\Models\Trabajador_Uniformidad;

class UpdateAssignUniformidad extends Component
{
    public $trabajador;
    public $uniformidad;
    public $pivot;
    public $date;


    public function updateAssign()
    {
        // dd($this->date);
        $this->pivot->updated_at = $this->date;
        $this->pivot->update();
        // if($this->)
        session()->flash('updatedDate', 'Fecha modificada correctamente.');
        return redirect()->route('update-assign-uniformidad', [
            'pivot_id' => $this->pivot->id
        ]);

    }

    public function mount( $pivot_id )
    {
        $this->pivot = Trabajador_Uniformidad::findOrFail($pivot_id);
        $this->trabajador = Trabajador::findOrFail($this->pivot->trabajador_id);
        $this->uniformidad = Uniformidad::findOrFail($this->pivot->uniformidad_id);
        $this->date = $this->pivot->created_at;
    }

    public function render()
    {

        return view('livewire.update-assign-uniformidad', [
            'uniformidad' => $this->uniformidad,
            'trabajador' => $this->trabajador,
            'pivot' => $this->pivot
        ]);
    }
}