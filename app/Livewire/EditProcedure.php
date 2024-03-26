<?php

namespace App\Livewire;

use App\Models\Procedure;
use Livewire\Component;

class EditProcedure extends Component
{
    public $procedure_id;
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

    public function mount(Procedure $procedure) {
        $this->procedure_id = $procedure->id;
        $this->title = $procedure->title;
        $this->status = $procedure->status;
        $this->publication_type = $procedure->publication_type;
        $this->id_person = $procedure->id_person;
        $this->reservations = $procedure->reservations;
    }
    public function editProcedure(){
        $data = $this->validate();

        $procedure = Procedure::find($this->procedure_id);

        $procedure->title = $data['title'];
        $procedure->status = $data['status'];
        $procedure->publication_type = $data['publication_type'];
        $procedure->id_person = $data['id_person'];
        $procedure->reservations = $data['reservations'];
        $procedure->save();

        session()->flash('mensaje', 'El Procedimiento se actualizó correctamente');

        return redirect()->to('/');
    }
    public function render()
    {

        return view('livewire.edit-procedure');
    }
}
