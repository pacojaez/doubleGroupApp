<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Trabajador;
use Livewire\WithPagination;
use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

class ListTrabajadors extends Component
{

    use WithPagination;

    public $trabajadors = "";
    public $query = '';

    public function search()
    {
        $this->trabajadors = Trabajador::where('name', 'like', '%'.$this->query.'%')
        ->with('uniformidads')
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
        $this->trabajadors = Trabajador::with('uniformidads')->get();

    }


    public function mount()
    {
        $this->trabajadors = Trabajador::with('getLimitedUniformidads')->get();
        // dd($this->trabajadors);
        // foreach($this->trabajadors as $trabajador){
        //     dd($trabajador->uniformidads->take(3));
        // }

    }

    public function render()
    {

        return view('livewire.list-trabajadors', [
            'trabajadors' => $this->trabajadors
            // 'trabajadors' => Trabajador::paginate(10)
        ]);
    }
}