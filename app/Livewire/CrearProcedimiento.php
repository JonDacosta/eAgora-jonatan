<?php

namespace App\Livewire;

use App\Enums\StatusEnum;
use App\Models\Procedure;
use Livewire\Component;

class CrearProcedimiento extends Component
{
    public $title;
    public $status;
    public $publication_type;
    public $id_person;
    public $reservations;

    protected $rules = [
        'title' => 'required|string|min:3|max:30',
        'status' => 'required',
        'publication_type' => 'required',
        'id_person'=> 'required',
        'reservations' => 'required',
    ];

    public function createProcedure(){
        $data = $this->validate();

        Procedure::create([
            'title' => $data['title'],
            'publication_type' => $data['publication_type'],
            'status' => $data['status'],
            'reservations' => $data['reservations'],
            'id_person' => $data['id_person'],
        ]);

        session()->flash('mensaje', 'El Procedimiento se creó correctamente');

        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.crear-procedimiento');
    }
}
