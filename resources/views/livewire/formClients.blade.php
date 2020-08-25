<div class="form-group">
    <label for="">Nombre</label>
    <input type="text" class="form-control" wire:model="nombre">
    @error('nombre') <span class="text-danger"> {{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label for="">Direccion</label>
    <textarea class="form-control" wire:model="direccion"></textarea>
    @error('direccion') <span class="text-danger"> {{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label for="">Telefono</label>
    <input type="text" class="form-control" wire:model="telefono"></textarea>
    @error('telefono') <span class="text-danger"> {{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control" wire:model="email"></textarea>
    @error('email') <span class="text-danger"> {{ $message }}</span> @enderror
</div>