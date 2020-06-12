
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
    <h2 class="text-center">Form Insert Data citiy</h2>
<form action="/store1" method="post">
@csrf
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      <div class="form-group">
        <label for="id">id</label>
        <input type="text" class="form-control" name="id">
      </div>
      <br>
      <div class="form-group">
        <label for="city_name">city_name</label>
        <input type="text" class="form-control" name="city_name" >
      </div>
      <br>
      <div class="form-group">
        <label for="zip_code">zip_code</label>
        <input type="value" class="form-control" name="zip_code" >
      </div>
      <br>
      <div class="form-group">
        <label for="description">description</label>
        <input type="text" class="form-control" name="description" >
      </div>
      <br>
      <div class="form-group">
        <label for="distance">distance</label>
        <input type="value" class="form-control" name="distance" >
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>