<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  @livewireStyles
  
  
</head>
<body>

  <title>User's name</title>
  
  @livewireScripts

<div class="container">
//@livewire('image-upload')
      <div class="form-group">
      <lavel for="personaldescription">Tell us something about you</lavel>
      <textarea wire:model= "file" name="personaldescription" id="personaldescription" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <a href="{{ route ('store') }}">
          <button type="submit" name="save-user-bio" class="btn btn-primary btn-block">
        That's all</button>
      </a>
        
      </div>

      </form>
    </div>
  </div>
</div>
</body>
</html>