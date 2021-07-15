@section('title', __('Illustrations'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Illustration</h4>
						</div>
						<!-- <div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div> -->
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Illustrations">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
						<i class="fa fa-plus"></i>  Add Illustrations
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.illustrations.create')
						@include('livewire.illustrations.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>Job Illustration</td> 
								<!-- <th>Jobgenre</th>
								<th>Title</th> -->
								<!-- <th>Jobillustration</th> -->
								<!-- <th>Yearofcreation</th>
								<th>Illustrator Id</th>
								<td>ACTIONS</td> -->
							</tr>
						</thead>
						<tbody>
							@foreach($illustrations as $row)
							<article class="samples">
								<div class="sampleCard">
								<figure class="sampleImg">
									<img src="{{ $row->jobIllustration }}">
								</figure>
								<div class="btn-group dropend dropDownMenu">
									<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
									<span class="iconify imgMenuDots" data-icon="heroicons-solid:dots-horizontal" data-inline="false"></span>
									</button>
									<ul class="dropdown-menu">
									<li><a wire:click="edit({{$row->id}})" class="dropdown-item">Edit</a></li>
									<li><a class="dropdown-item" onclick="confirm('Confirm Delete Illustration id {{$row->id}}? \nDeleted Illustrations cannot be recovered!')||event.stopImmediatePropagation()” wire:click="destroy({{$row->id}})" class="dropdown-item">Delete</a></li>
									</ul>
								</div>
								</div>
							</article>
							@endforeach
						</tbody>
					</table>						
					{{ $illustrations->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
