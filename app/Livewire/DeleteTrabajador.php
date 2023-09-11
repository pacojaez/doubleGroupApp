<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Trabajador;

class DeleteTrabajador extends Component
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
        return view('livewire.delete-trabajador', [
            'trabajador' => $this->trabajador
        ]);
    }

    public function delete($id)
    {
        $this->trabajador = Trabajador::findOrFail($id);
        $this->trabajador->delete();

        session()->flash('deletedWorker', 'Trabajador borrado correctamente.');
        return redirect()->route('list-trabajadors');
    }
}