<div class="align-self-start ml-1">
    @if ($image)
        <img src="{{ $image->temporaryUrl()}}">
    @endif
    <div class="d-inline-flex p-2 justify-content-start ml-1">
    <input type="file" wire:model="image" >
    </div>
    <br>
    <!-- <button wire:click="upload">Upload</button>
 -->
</div>
