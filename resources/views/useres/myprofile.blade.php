@extends('layouts.app')
@section('content')


<div class="container myprofile text-center">
  <h2 class="my-set">My Profile  <i class="fas fa-user-circle user-profile-img"></i></h2>
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

<style>

  .myprofile {
    margin-top: 50px;
    margin-bottom: 50px;
  }

  .input{
    width:24%;
  }

  .myset{
    font-size:25px;
  }

  .edit{
    margin-right:2%;
  }

  .user-profile-img{
    
  }
</style>

@endsection