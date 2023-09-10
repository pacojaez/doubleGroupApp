<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Trabajador;

class DeleteTrabajadorModal extends Component
{
    public $trabajador_id;

    public function mount($id){
        $this->trabajador_id = $id;
    }
    public function render()
    {
        $trabajador = Trabajador::find($this->trabajador_id);
        return view('livewire.delete-trabajador-modal', [
            'trabajador' => $trabajador
        ]);
    }
}
