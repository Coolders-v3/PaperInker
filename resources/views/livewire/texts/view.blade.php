
@section('title', __('Texts'))
<div class="container-fluid">
    @include('livewire.user.logo-user')
    @include('livewire.user.user')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                        </div>
                        @if (session()->has('message'))
                        <div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
                        @endif
                        <div>
							<a href="{{ url('/slides') }}">
                                <button type="button" class="btn-find" >
                                Find your Writer!</a>
						</div>
                        <div class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-plus"></i>  Add Text
                        </div>
                    </div>
                </div>
                <div class="card-body">
                        @include('livewire.texts.create')
                        @include('livewire.texts.update')
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <thead class="thead">
                            <tr> 
                                <th>Title</th>
                                <th>Genre</th>
                                <th>Year</th>
                                <td>ACTIONS</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($texts as $text)
                            <tr>
                                <td>{{ $text->title }}</td>
                                <td>{{ $text->genre }}</td>
                                <td>{{ $text->year }}</td>
                                <td width="90">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                    <a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$text->id}})"><i class="fa fa-edit"></i> Edit </a>                             
                                    <a class="dropdown-item" onclick="confirm('Confirm Delete Text id {{$text->id}}? \nDeleted Texts cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$text->id}})"><i class="fa fa-trash"></i> Delete </a>   
                                    </div>
                                </div>
                                </td>
                            @endforeach
                        </tbody>
                    </table>                        
     {{--               {{ $texts->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
