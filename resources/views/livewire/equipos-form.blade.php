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

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Equipo</th>
        <th scope="col">Director</th>
        <th scope="col">Logo</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($lista_equipos as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->nombre_equipo}}</td>
            <td>{{$item->nombre_dt}}</td>
            <td>{{$item->logo}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{$lista_equipos->links()}}
