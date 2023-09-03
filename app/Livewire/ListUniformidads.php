<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Uniformidad;

class ListUniformidads extends Component
{
    public $uniformidads = "";
    public $query = '';

    public function search()
    {
        $this->uniformidads = Uniformidad::where('name', 'like', '%'.$this->query.'%')
        ->with('trabajadors')
        // ->with(['uniformidads' => function($query) {
        //     $query->get(['type', 'uniformidad']);
        //   }])
          ->get();
        // $this->trabajadors = Trabajador::with('getLimitedUniformidads')->get();

    }

    public function listAll()
    {
        // $this->trabajadors = Trabajador::with('uniformidads')->get();
        // $this->trabajadors = Trabajador::with('getLimitedUniformidads')->get();
        // $this->trabajadors = Trabajador::all()->uniformidads()->orderBy('uniformidads.created_at')->take(1)->get();
        $this->uniformidads = Uniformidad::with('trabajadors')->get();

    }


    public function mount()
    {
        $this->uniformidads = Uniformidad::with('trabajadors')->orderBy('created_at', 'DESC')->get();

    }


    public function render()
    {
        return view('livewire.list-uniformidads',[
            'uniformidads' => $this->uniformidads
        ]);
    }
}