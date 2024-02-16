<?php

?>

<h1>Contact View</h1>

<form action="" method="POST">
  <div class="mb-3">
    <label class="form-label">Subject</label>
    <input type="text" class="form-control" name="subject">
  </div>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label class="form-label">Body</label>
    <textarea type="text" class="form-control" name="body"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>