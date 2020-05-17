@extends('layouts.app')

@section('content')

<style>
  .myprofile-main {
    background-color: var(--body-background);
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
</style>
<div class="myprofile-main">
  <div class="container myprofile pt-5 pb-5">
    <h2 class="my-set text-center">My Profile </h2>
    <hr style="border-color:black;">
    <tr>
      <p>
        <b class="text-left">Profile Picture :</b>
        <br>
        <div class=""
          style="margin-left:100px; width:100px; height:100px; border-width:1px; border-color:black; border-style:solid;">
          <i style="font-size:700%;" class="fas fa-user-circle user-profile-img"></i>
        </div>
        <label class="btn btn-primary mt-2" style="margin-left:80px;" for="upload-prof">
          Upload an Avatar
          <input class="d-none" accept="image/*" type="file" name="" title="Upload profile picture" id="upload-prof">        
        </label>
        <br>
      </p>

      <p>
        <b>ID :</b>
        <br>
        <input class="input" type="number" value="{{Auth::user()->id}}" readonly>
      </p>


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
    <button class="btn btn-primary" style="width:10%; font-size:16px;" data-toggle="modal"
      data-target="#exampleModalCenter2">
      Edit <span class="text-dark" style="margin-left:15%;"><i class="fas fa-edit text-light"></i></span>
    </button>
    <button class="btn btn-danger" style="width:10%; font-size:16px;" data-toggle="modal"
      data-target="#exampleModalCenter1">
      Delete <span class="text-dark" style="margin-left:15%;"><i class="fas fa-trash-alt text-light"></i></span>
    </button>
    <td></td>
    </tr>

  </div>
</div>

@if (session('updateprof'))
@include('sweets2.successful-update-prof')
@endif


@endsection
<!-- Content END -->