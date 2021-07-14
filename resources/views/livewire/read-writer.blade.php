<div>
    <article class="samples">
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Genre</th>
          <th scope="col">Year</th>
          <th>&nbsp</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($texts as $text)
        <tr>
          <td>{{ $text->title }}</td>
          <td>{{ $text->jobGenre }}</td>          
          <td>{{ $text->yearOfCreation }}</td>
          <td><button wire:click="destroy({{$text->id}})"class="btn btn-danger">DELETE</button></td>
    
        </tr>
        @endforeach
      
      </tbody>
    </table>
    </article>

    <div>
      <form class="form-group">        
        <input wire:model="title" class="form-control mb-3 mt-3" type="text" placeholder="Title" aria-label="default input example">
        @error('title') <span> {{ $message }} </span> @enderror
    
        <input wire:model="genre" class="form-control mb-3 mt-3" type="text" placeholder="Genre" aria-label="default input example">
        @error('genre') <span> {{ $message }} </span> @enderror
    
        <input wire:model="year" class="form-control mb-3 mt-3" type="text" placeholder="Year" aria-label="default input example">
        @error('year') <span> {{ $message }} </span> @enderror
    
        <textarea wire:model="description"class="form-control mb-3 mt-3" name="" id="" cols="30" rows="5" placeholder="Description"></textarea>
        @error('description') <span> {{ $message }} </span> @enderror
    
        <button wire:click="store" class="btn btn-primary" type="submit">Save</button>
      </form>
    </div>
    
    {{ $texts -> links()}}
</div>
