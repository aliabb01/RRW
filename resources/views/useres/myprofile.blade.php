@extends('layouts.app')
@section('content')


<div class="container myprofile text-center">
  <h2 class="my-set">My Profile <i class="fas fa-user-circle user-profile-img"></i></h2>
  <tr>
    <td>
      <p>
        <b>ID :</b>
        <br>
        <input class="input" type="number" value="{{Auth::user()->id}}" readonly>
      </p>
    </td>

    <p>
      <b>Name :</b>
      <br>
      <input class="input" type="text" value="{{Auth::user()->name}}" readonly>
    </p>

    <p>
      <b>Email :</b>
      <br>
      <input class="input" type="text" value="{{Auth::user()->email}}" readonly>
    </p>

    <p>
      <b>Password :</b>
      <br>
      <input class="input" type="text" value="{{Auth::user()->password}}" readonly>
    </p>

    <p>
      <b>Phone :</b>
      <br>
      <input class="input" type="number" value="{{Auth::user()->phone}}" readonly>
    </p>

    <p>
      <b>Country :</b>
      <br>
      <input class="input" type="text" value="{{Auth::user()->country}}" readonly>
    </p>

  </tr>
  @foreach ($useres as $i)

  @endforeach
  <!--<td> {{link_to_route('useres.edit','Edit',$i,['class'=>'btn btn-success edit'])}}</td>-->
  <button class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter2">
    Edit
  </button>
  <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter1">
    Delete
  </button>
  <td></td>
  </tr>

</div>

<!-- MODAL -->
<!-- Modal is put on top of main after the whole navbar and styling -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-info-circle"></i> <span
            class="text-light">Are you sure you want to delete your account?</span></h5>
        <button id="X-sign" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> <!-- X sign for exiting modal -->
        </button>
      </div>
      <div class="modal-body">
        <small><b>Note :</b></small><br>
        Your information will be <b> deleted</b> and your data within the website will be <b>lost</b>. Are you sure you
        want to continue?
      </div>
      <div class="modal-footer">
        <form action="{{'/del/'.Auth::user()->id}}" method="POST">
          <button type="submit" class="btn btn-primary">
            @csrf
            @method('delete')
            Yes, continue
          </button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">No, return me back</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- MODAL END  -->

<!-- MODAL for update/edit info-->
<!-- Modal is put on top of main after the whole navbar and styling -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-info-circle"></i> <span
            class="text-light">Your profile information</span></h5>
        <button id="X-sign" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> <!-- X sign for exiting modal -->
        </button>
      </div>
      <div class="modal-body">
        You can edit your account information below: <br>
        <form action="{{'/upd/'.Auth::user()->id }}" method="POST">
          @csrf
          @method('PUT')          
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
          <div class="container">
            <div class="form-group">
              <label for="id"><b>ID :</b></label>
              <input type="text" class="form-control" value="{{Auth::user()->id}}">
            </div>
            <br>
            <div class="form-group">
              <label for="name">Name :</label>
              <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
            </div>
            <br>
            <div class="form-group">
              <label for="email">Email :</label>
              <input type="value" class="form-control" name="email" value="{{Auth::user()->email}}">
            </div>
            <br>
            <div class="form-group">
              <label for="phone">Phone :</label>
              <input type="text" class="form-control" name="phone" value="{{Auth::user()->phone}}">
            </div>
            <br>
            <div class="form-group">
              <label for="country">Country :</label>
              <input type="value" class="form-control" name="country" value="{{Auth::user()->country}}">
            </div>
            <br>
          </div>
      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-primary">

          Update</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- MODAL END  -->

<style>
  .myprofile {
    margin-top: 50px;
    margin-bottom: 50px;
  }

  .input {
    width: 24%;
  }

  .myset {
    font-size: 25px;
  }

  .edit {
    margin-right: 2%;
  }

  .user-profile-img {}
</style>

@endsection