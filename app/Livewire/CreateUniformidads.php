<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Uniformidad;

class CreateUniformidads extends Component
{

    public $name = '';
    public $description = '';
    public $type = '';
    public $color = '';
    public $talla = '';

    public function save()
    {
        Uniformidad::create([
            'name' => $this->name,
            'description' => $this->description,
            'type' => $this->type,
            'color' => $this->color,
            'talla' => $this->talla
        ]);

        return redirect()->to('/uniformidad/list');
    }

    public function render()
    {
        return view('livewire.create-uniformidads');
    }
}