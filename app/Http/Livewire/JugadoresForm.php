<?php

namespace App\Http\Livewire;

use App\Models\equipos;
use Livewire\Component;
use App\Models\jugadores;

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
        $equipos = equipos::all();
        return view('livewire.jugadores-form', compact('equipos'));
    }
    public function guardar()
    {
        $this->validate();

        jugadores::create([
            'nombre_jugador' => $this->nombre_jugador,
            'posicion' => $this->posicion,
            'numero_camiseta' => $this->numero_camiseta,
            'equipo_id' => $this->equipo_id,
        ]);

        $this->reset();
        $this->emit('jugadorCreado');
    }
}
