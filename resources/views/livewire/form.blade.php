<div class="form-group">
    <label for="">Titulo</label>
    <input type="text" class="form-control" wire:model="title">
    @error('title') <span class="text-danger"> {{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label for="">Contenido</label>
    <textarea class="form-control" wire:model="body"></textarea>
    @error('body') <span class="text-danger"> {{ $message }}</span> @enderror
</div>