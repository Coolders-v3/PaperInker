<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Illustration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="jobGenre"></label>
                <input wire:model="jobGenre" type="text" class="form-control" id="jobGenre" placeholder="Jobgenre">@error('jobGenre') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="title"></label>
                <input wire:model="title" type="text" class="form-control" id="title" placeholder="Title">@error('title') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="jobIllustration"></label>
                <input wire:model="jobIllustration" type="text" class="form-control" id="jobIllustration" placeholder="Jobillustration">@error('jobIllustration') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="yearOfCreation"></label>
                <input wire:model="yearOfCreation" type="text" class="form-control" id="yearOfCreation" placeholder="Yearofcreation">@error('yearOfCreation') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="illustrator_id"></label>
                <input wire:model="illustrator_id" type="text" class="form-control" id="illustrator_id" placeholder="Illustrator Id">@error('illustrator_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>