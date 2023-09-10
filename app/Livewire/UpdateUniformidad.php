<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Uniformidad;

class UpdateUniformidad extends Component
{
    public $uniformidad;
    public $name = '';
    public $type = '';
    public $description = '';
    public $stock = '';
    public $talla = '';
    public $color = '';
    // public $fields;
    // public $field_id = null;
    public $id;


    public function update($id)
    {
        // if ( isset($id) ) {
        //     $this->fields = Trabajador::findOrFail($id)->toArray();
        //     $this->field_id = $id;
        // };
        $this->uniformidad->name= $this->name;
        $this->uniformidad->type= $this->type;
        $this->uniformidad->stock= $this->stock;
        $this->uniformidad->description= $this->description;
        $this->uniformidad->color= $this->color;
        $this->uniformidad->talla= $this->talla;
        $this->uniformidad->update();
        // if($this->)
        session()->flash('updatedUniformidad', 'Uniformidad actualizada correctamente.');
        return redirect()->route('list-uniformidads');
    }

    // public function  mount($id)
    // {
    //     $this->trabajador= Trabajador::findOrFail($id);

    // }

    public function mount($id)
        {
            if ( isset($id) )
            {
                $this->uniformidad = Uniformidad::findOrFail($id);
                $this->name = $this->uniformidad->name;
                $this->type = $this->uniformidad->type;
                $this->stock = $this->uniformidad->stock;
                $this->description = $this->uniformidad->description;
                $this->color = $this->uniformidad->color;
                $this->talla = $this->uniformidad->talla;
            };
        }

    public function render()
    {
        return view('livewire.update-uniformidad');
    }
}