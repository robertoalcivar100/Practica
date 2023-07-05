<div>
    <form wire:submit.prevent="guardar">
        <div class="form-group">
            <label for="nombre_equipo">Nombre del Equipo</label>
            <input type="text" class="form-control" id="nombre_equipo" wire:model="nombre_equipo">
            @error('nombre_equipo') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="nombre_dt">Nombre del DT</label>
            <input type="text" class="form-control" id="nombre_dt" wire:model="nombre_dt">
            @error('nombre_dt') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="logo">Logo</label>
            <input type="text" class="form-control" id="logo" wire:model="logo">
            @error('logo') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
