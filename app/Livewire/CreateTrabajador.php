<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Trabajador;


class CreateTrabajador extends Component
{
    public $name = '';
    public $surname = '';
    public $dni = '';
    public $email = '';
    public $destiny = '';
    public $tallaCamiseta = '';
    public $tallaPantalon = '';
    public $tallaCalzado = '';

    public function save()
    {
        Trabajador::create([
            'name' => $this->name,
            'surname' => $this->surname,
            'dni' => $this->dni,
            'email' => $this->email,
            'destiny' => $this->destiny,
            'tallaCamiseta' => $this->tallaCamiseta,
            'tallaPantalon' => $this->tallaPantalon,
            'tallaCalzado' => $this->tallaCalzado
        ]);

        return redirect()->to('/trabajador/create');
    }


    public function render()
    {
        return view('livewire.create-trabajador');
    }
}