
<div>
    <form wire:submit.prevent="upload('location1')">
        <input type="file" wire:model="files.location1">
        @error('files.location1') <span class="error">{{ $message }}</span> @enderror
        <button type="submit">Upload to Location 1</button>
    </form>

    <form wire:submit.prevent="upload('location2')">
        <input type="file" wire:model="files.location2">
        @error('files.location2') <span class="error">{{ $message }}</span> @enderror
        <button type="submit">Upload to Location 2</button>
    </form>

    <!-- Repeat the above form for all required locations up to location34 -->

    <ul>
        @foreach($files as $file)
            <li>
                <a href="{{ Storage::disk('public')->url($file->file_path) }}" target="_blank">{{ $file->file_path }}</a>
                <button wire:click="delete({{ $file->id }})">Delete</button>
            </li>
        @endforeach
    </ul>
</div>

