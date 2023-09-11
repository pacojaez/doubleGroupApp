<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Trabajador;
use Livewire\WithPagination;

class DeletedWorkers extends Component
{
    use WithPagination;

    public $trabajadors = "";
    public $trabajador;
    public $trabajadorsAll ='';
    public $query = '';

    public function search()
    {
        $this->trabajadors = Trabajador::onlyTrashed()->where('name', 'like', '%'.$this->query.'%')
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
        $this->trabajadors = Trabajador::onlyTrashed()->with('uniformidads')->get();

    }


    public function restore($id)
    {
        $this->trabajador = Trabajador::withTrashed()->findOrFail($id)->restore();
        session()->flash('deletedWorker', 'Trabajador restaurado correctamente.');
        $this->trabajadors = Trabajador::with('getLimitedUniformidads')->get();

        return redirect()->route('list-trabajadors',[
            'trabajadors' => $this->trabajadors
            // 'trabajadors' => Trabajador::paginate(10)
        ]);
    }

    public function forceDelete($id)
    {
        $trabajador = Trabajador::withTrashed()->where('id', $id)->with('uniformidads')->get();

        $trabajador->detach();
        $trabajador->forceDelete();

        session()->flash('deletedWorker', 'Trabajador eliminado completamente del sistema.');
        return redirect()->route('list-trabajadors');
    }

    public function mount()
    {
        $this->trabajadors = Trabajador::with('getLimitedUniformidads')->onlyTrashed()->get();
        // dd($this->trabajadors);
        // foreach($this->trabajadors as $trabajador){
        //     dd($trabajador->uniformidads->take(3));
        // }

    }
    public function render()
    {
        return view('livewire.deleted-workers', [
            'trabajdors' => $this->trabajadors
        ]);
    }
}