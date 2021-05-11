<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>patrickAndguian</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $SQLString = "insert into user (name,email,password)
		values('$name', '$email', '$password')";

}
?>

<center>
<div class="col-sm-4 border border-primary mt-5" style="border-radius:10px">
<h3 class="mt-3">Register</h3>
<form method="post" action="test.php">
<div class="form-group mt-5">
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" name="email"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="password"id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="password">
  </div>
<input type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#exampleModal"name='submit'value="submit">
</form>

</div>

</center>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
	  <form method="post" action="http://192.168.0.19:8081/insert/insert.php">
			<input type="hidden" name="Query" value="<?=$SQLString?>">
			
	  <h2>Click to Register</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Register</button>
		</form>
      </div>
    </div>
  </div>
</div>
</body>
</html>

