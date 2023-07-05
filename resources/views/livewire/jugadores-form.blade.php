<div>
    <form wire:submit.prevent="guardar">
        <div class="form-group">
            <label for="nombre_jugador">Nombre del Jugador</label>
            <input type="text" class="form-control" id="nombre_jugador" wire:model="nombre_jugador">
            @error('nombre_jugador') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="posicion">Posición</label>
            <input type="text" class="form-control" id="posicion" wire:model="posicion">
            @error('posicion') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="numero_camiseta">Número de Camiseta</label>
            <input type="text" class="form-control" id="numero_camiseta" wire:model="numero_camiseta">
            @error('numero_camiseta') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="equipo_id">Equipo</label>
            <select class="form-control" id="equipo_id" wire:model="equipo_id">
                <option value="">Seleccionar equipo</option>
                @foreach ($equipos as $equipo)
                    <option value="{{ $equipo->id }}">{{ $equipo->nombre_equipo }}</option>
                @endforeach
            </select>
            @error('equipo_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>