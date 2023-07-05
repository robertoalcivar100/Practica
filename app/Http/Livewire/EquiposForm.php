<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\equipos;
use Livewire\WithPagination;

class EquiposForm extends Component
{
    public $nombre_equipo;
    public $nombre_dt;
    public $logo;
    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'nombre_equipo' => 'required|min:3',
        'nombre_dt' => 'required|min:3',
        'logo' => 'required',
        ];
    public function render()
    {
        $lista_equipos= equipos::paginate(3);
        return view('livewire.equipos-form', compact('lista_equipos'));
    }
    public function guardar()
    {
        $this->validate();

        equipos::create([
            'nombre_equipo' => $this->nombre_equipo,
            'nombre_dt' => $this->nombre_dt,
            'logo' => $this->logo,
        ]);

        $this->reset();
        $this->emit('equipoCreado');
    }
}
