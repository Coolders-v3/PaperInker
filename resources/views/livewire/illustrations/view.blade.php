@section('title', __('Illustrations'))

<div class="container-fluid">
	@include('livewire.user.header-logo')
	@include('livewire.user.user')
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Job Illustration</h4>
						</div>
						<!-- <div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div> -->
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
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
							{{-- 	<td>Job Illustration</td>  --}}
								<!-- <th>Jobgenre</th>
								<th>Title</th> -->
								<!-- <th>Jobillustration</th> -->
								<!-- <th>Yearofcreation</th>
								<th>Illustrator Id</th>
								<td>ACTIONS</td> -->
							</tr>
						</thead>
						<tbody>
							@foreach($illustrations as $illustration)
							<article class="samples">
								<div class="sampleCard">
									<div class="btn-group dropend dropDownMenu">
										<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Actions
		
										</button>
										<ul class="dropdown-menu">
										<li><a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$illustration->id}})"><i class="fa fa-edit"></i> Edit </a>
										</li>
										<li><a class="dropdown-item" onclick="confirm('Confirm Delete Illustration id {{$illustration->id}}? \nDeleted Illustrations cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$illustration->id}})"><i class="fa fa-trash"></i> Delete </a>
										</li>
										</ul>
									</div>
								<figure class="sampleImg">
									<img src="{{ $illustration->description }}">

								</figure>
								
								</div>
							</article>
							@endforeach
						</tbody>
					</table>						
				{{-- 	{{ $illustrations->links() }} --}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
