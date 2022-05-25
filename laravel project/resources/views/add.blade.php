
  @extends('layouts.main')
  @section('titel')
    <h1>Add enployee</h1>
  @stop
  @section('content')
    <form action="/action_page.php">
      <div class="mb-3 mt-3">
        <label for="firstname">firstname:</label>
        <input type="text" class="form-control" id="firstname" placeholder="firstname" name="first name">
      </div>
      <div class="mb-3 mt-3">
        <label for="lastname">lastname:</label>
        <input type="text" class="form-control" id="lastname" placeholder="lastname" name="last name">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  @stop