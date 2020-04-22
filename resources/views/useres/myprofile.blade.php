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
  <td> {{link_to_route('useres.edit','Edit',$i,['class'=>'btn btn-success edit'])}}</td>
  <td> {{link_to_route('useres.show','Delete',$i,['class'=>'btn btn-danger delete'])}}</td>
  <td></td>
  </tr>

</div>

<!-- MODAL -->
<!-- Modal is put on top of main after the whole navbar and styling -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-info-circle"></i> <span
            class="text-light">Are you sure you want to leave?</span></h5>
        <button id="X-sign" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> <!-- X sign for exiting modal -->
        </button>
      </div>
      <div class="modal-body">
        <small><b>Note :</b></small><br>
        You will be redirected to main page after you <b>log out</b> .
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, return me back</button>
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