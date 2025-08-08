<div class="flex flex-col gap-6">
    <form wire:submit="save" class="flex flex-col gap-6">
        <input type="text" wire:model="form.title">
        <div>
            @error('form.title') <span class="error">{{ $message }}</span> @enderror
        </div>

        <input type="text" wire:model="form.body">
        <div>
            @error('form.body') <span class="error">{{ $message }}</span> @enderror
        </div>

        <input type="array" wire:model="form.tags">
        <div>
            @error('form.tags') <span class="error">{{ $message }}</span> @enderror
        </div>

        <input type="file" wire:model="image">
        @error('image') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Save</button>
    </form>
</div>
