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
    <h2 class="my-set text-center">{{ __('msg.myprofile')}} </h2>
    <hr style="border-color:black;">
    <tr>
      <p>
        <b class="text-left">{{ __('msg.prof-picture')}} :</b>
        <br>
        <img src="/uploads/avatars/{{ Auth::user()->avatar }}"
          style="width:150px; height:150px; border-radius:50%; margin-right:25px;">
        <form action="/uplade" method="POST" enctype="multipart/form-data">
          <label>Update Profile Image</label> <br>
          <input type="file" name="avatar">
          @csrf
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <br>
          <input type="submit" class="pull-right ml-3 btn btn-sm btn-primary">
        </form>

      </p>

      <p>
        <b>{{ __('msg.id')}} :</b>
        <br>
        <input class="input" type="number" value="{{Auth::user()->id}}" readonly>
      </p>


      <p>
        <b>{{ __('msg.name')}} :</b>
        <br>
        <input class="input" type="text" value="{{Auth::user()->name}}" readonly>
      </p>

      <p>
        <b>{{ __('msg.email')}} :</b>
        <br>
        <input class="input" type="text" value="{{Auth::user()->email}}" readonly>
      </p>

      <p>
        <b>{{ __('msg.password')}} :</b>
        <br>
        <input class="input" type="text" value="{{Auth::user()->password}}" readonly>
      </p>

      <p>
        <b>{{ __('msg.phone')}} :</b>
        <br>
        <input class="input" type="number" value="{{Auth::user()->phone}}" readonly>
      </p>

      <p>
        <b>{{ __('msg.country')}} :</b>
        <br>
        <input class="input" type="text" value="{{Auth::user()->country}}" readonly>
      </p>

    </tr>
    @foreach ($useres as $i)

    @endforeach
    <!--<td> {{link_to_route('useres.edit','Edit',$i,['class'=>'btn btn-success edit'])}}</td>-->
    <button class="btn btn-primary" style="width:10%; font-size:16px;" data-toggle="modal"
      data-target="#exampleModalCenter2">
      {{ __('msg.edit')}} <span class="text-dark" style="margin-left:15%;"><i class="fas fa-edit text-light"></i></span>
    </button>
    <button class="btn btn-danger" style="width:10%; font-size:16px;" data-toggle="modal"
      data-target="#exampleModalCenter1">
      {{ __('msg.delete')}} <span class="text-dark" style="margin-left:15%;"><i class="fas fa-trash-alt text-light"></i></span>
    </button>
    <td></td>
    </tr>

  </div>
</div>

@if (session('updateprof'))
@include('sweets2.successful-update-prof')
@endif

<style>
  ::-webkit-file-upload-button {
  border: 1px solid var(--primary-skyblue);
  background: var(--primary-skyblue);
  color: white;
  margin-bottom:10px;
  border-radius: 3px;  
  width:100px;
  height:50px;
}
</style>
@endsection
<!-- Content END -->