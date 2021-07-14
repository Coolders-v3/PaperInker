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
    {{ $texts -> links()}}
</div>
