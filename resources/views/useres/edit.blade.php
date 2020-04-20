
@extends('layouts.app')
@section('content')
 
<br>
    <h2 class="text-center">Edit My Information</h2>
   
<form action="{{'/upd/'.Auth::user()->id }}" method="POST" >
@csrf
@method('PUT')
<div class="container">
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
   
      <div class="form-group">
        <label for="id">ID :</label>
      <input type="text" class="form-control" value="{{Auth::user()->id}}" >
      </div>
      <br>
      <div class="form-group">
        <label for="name">Name :</label>
        <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
      </div>
      <br>
      <div class="form-group">
        <label for="email">Email :</label>
        <input type="value" class="form-control" name="email"  value="{{Auth::user()->email}}">
      </div>
      <br>
      <div class="form-group">
        <label for="phone">Phone :</label>
        <input type="text" class="form-control" name="phone" value="{{Auth::user()->phone}}" >
      </div>
      <br>
      <div class="form-group">
        <label for="country">Country :</label>
        <input type="value" class="form-control" name="country"  value="{{Auth::user()->country}}">
      </div>
      <br>
      <button type="submit"  class="btn btn-primary">Update</button>
      <a href="/myprofile" class="btn btn-danger" >Back</a>
      <h1 class="la"></h1>
    </div>
</form>

<style>

</style>
@endsection