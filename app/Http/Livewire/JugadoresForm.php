<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Jugador;
use App\Models\Equipo;

class JugadoresForm extends Component
{
    public $nombre_jugador;
    public $posicion;
    public $numero_camiseta;
    public $equipo_id;

    protected $rules = [
        'nombre_jugador' => 'required|min:3',
        'posicion' => 'required|min:3',
        'numero_camiseta' => 'required|numeric',
        'equipo_id' => 'required',
    ];
    public function render()
    {
        $equipos = Equipo::all();
        return view('livewire.jugadores-form', compact('equipos'));
    }
    public function guardar()
    {
        $this->validate();

        Jugador::create([
            'nombre_jugador' => $this->nombre_jugador,
            'posicion' => $this->posicion,
            'numero_camiseta' => $this->numero_camiseta,
            'equipo_id' => $this->equipo_id,
        ]);

        $this->reset();
        $this->emit('jugadorCreado');
    }
}
