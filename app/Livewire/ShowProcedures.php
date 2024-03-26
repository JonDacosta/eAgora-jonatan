<?php

namespace App\Livewire;

use App\Models\Procedure;
use Livewire\Component;

class ShowProcedures extends Component
{
    protected $listeners = ['deleteProcedure'];

    public function deleteProcedure(Procedure $procedure)
    {
        $procedure->delete();
    }
    public function render()
    {
        $procedures = Procedure::orderByDesc('created_at')->paginate(10);

        return view('livewire.show-procedures', [
            'procedures' => $procedures,
        ]);
    }
}
