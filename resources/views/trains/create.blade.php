
<!DOCTYPE html>
<html>
<head>
<title>railways Management | Add</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
<br>
    <h2 class="text-center">Form Insert Data trip</h2>
<form action="/store2" method="post">
@csrf
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      <div class="form-group">
        <label for="id">id</label>
        <input type="text" class="form-control" name="id">
      </div>
      <br>
     
      <div class="form-group">
        <label for="train_number">train_number</label>
        <input type="text" class="form-control" name="train_number" >
      </div>
      <br>
      <div class="form-group">
        <label for="driver_name">driver_name</label>
        <input type="value" class="form-control" name="driver_name" >
      </div>
      <br>
      <div class="form-group">
        <label for="driver_info">driver_info</label>
        <input type="text" class="form-control" name="driver_info" >
      </div>
      <br>
      <div class="form-group">
        <label for="seats_number">seats_number</label>
        <input type="value" class="form-control" name="seats_number" >
      </div>
      <br>
      <div class="form-group">
        <label for="passengers_number">passengers_number</label>
        <input type="value" class="form-control" name="passengers_number" >
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>