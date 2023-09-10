<?php

namespace App\Livewire;

use App\Models\Trabajador;
use Livewire\Component;

class UpdateTrabajador extends Component
{

    public $trabajador;
    public $name = '';
    public $surname = '';
    public $dni = '';
    public $email = '';
    public $destiny = '';
    public $tallaCamiseta = '';
    public $tallaPantalon = '';
    public $tallaCalzado = '';
    public $confirming;
    public $deleteId = '';
    // public $field_id = null;
    // public $id;

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function deleteId($id)
    {
        $this->deleteId = $id;
        dd($this->deleteId);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function delete()
    {
        Trabajador::find($this->deleteId)->delete();
    }


    public function confirmDelete($id)
    {
         $this->confirming = $id;
        //  dd($this->confirming);
    }

    public function kill($id)
    {
        dd($id);
    }


    public function update($id)
    {
        // if ( isset($id) ) {
        //     $this->fields = Trabajador::findOrFail($id)->toArray();
        //     $this->field_id = $id;
        // };
        $this->trabajador->name= $this->name;
        $this->trabajador->surname= $this->surname;
        $this->trabajador->dni= $this->dni;
        $this->trabajador->email= $this->email;
        $this->trabajador->tallaCamiseta= $this->tallaCamiseta;
        $this->trabajador->tallaPantalon= $this->tallaPantalon;
        $this->trabajador->tallaCalzado= $this->tallaCalzado;
        $this->trabajador->destiny= $this->destiny;
        $this->trabajador->update();
        // if($this->)
        session()->flash('updatedWorker', 'Trabajador actualizado correctamente.');
        return redirect()->route('list-trabajadors');
    }

    // public function  mount($id)
    // {
    //     $this->trabajador= Trabajador::findOrFail($id);

    // }

    public function mount($id)
        {
            if ( isset($id) )
            {
                $this->trabajador = Trabajador::findOrFail($id);
                $this->name = $this->trabajador->name;
                $this->surname = $this->trabajador->surname;
                $this->dni = $this->trabajador->dni;
                $this->destiny = $this->trabajador->destiny;
                $this->email = $this->trabajador->email;
                $this->tallaCamiseta = $this->trabajador->tallaCamiseta;
                $this->tallaPantalon = $this->trabajador->tallaPantalon;
                $this->tallaCalzado = $this->trabajador->tallaCalzado;
                $this->confirming;
            };
        }

    public function render()
    {
        return view('livewire.update-trabajador', [
            'trabajador' => $this->trabajador,
            'confirming' => $this->confirming
        ]);
    }
}