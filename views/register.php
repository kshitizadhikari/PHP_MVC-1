<?php

?>

<h1>Register View</h1>

<form action="" method="POST">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label class="form-label">FirstName</label>
                <input type="text" class="form-control" name="fname">
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label class="form-label">LastName</label>
                <input type="text" class="form-control" name="lname">
            </div>
        </div>
    </div>
    
   
    <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="confirm_password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>