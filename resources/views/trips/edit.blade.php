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
    <h2 class="text-center">edit Data trip</h2>
<form action="{{'/upd3/'. $trip>id }}" method="POST" >
@csrf
@method('PUT')
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
     
      <div class="form-group">
        <label for="id">id</label>
      <input type="text" class="form-control" name="id" value="{{$trip->id}}">
      </div>
      <br>
      
      <div class="form-group">
        <label for="trip_date">trip_date</label>
        <input type="date" class="form-control" name="trip_date" value="{{$trip->trip_date}}">
      </div>
      <br>
      <div class="form-group">
        <label for="from">from</label>
        <input type="value" class="form-control" name="from" value="{{$trip->from}}" >
      </div>
      <br>
      <div class="form-group">
        <label for="to">to</label>
        <input type="text" class="form-control" name="to" value="{{$trip->to}}">
      </div>
      <br>
      <div class="form-group">
        <label for="time_depart">time_depart</label>
        <input type="value" class="form-control" name="time_depart" value="{{$trip->time_depart}}" >
      </div>
      <br>
      <br>
      <div class="form-group">
        <label for="Train_number">Train_number</label>
        <input type="value" class="form-control" name="Train_number" value="{{$trip->Train_number}}" >
      </div>
      <br>
      <br>
      <div class="form-group">
        <label for="price">price</label>
        <input type="value" class="form-control" name="price" value="{{$trip->price}}" >
      </div>
      <br>
      <button type="submit"  class="btn btn-primary">update</button>
</form>
</body>
</html>