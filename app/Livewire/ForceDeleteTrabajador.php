<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Trabajador;

class ForceDeleteTrabajador extends Component
{
    /**
     * Force delete user data
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function forceDelete($id)
    {
        Trabajador::where('id', $id)->withTrashed()->forceDelete();

        session()->flash('deletedWorker', 'Trabajador eliminado completamente del sistema.');
        return redirect()->route('list-trabajadors');
    }

    public function render()
    {
        return view('livewire.force-delete-trabajador');
    }
}