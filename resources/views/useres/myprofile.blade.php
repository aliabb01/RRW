@extends('layouts.app')
 @section('content')
     

  <tr>
  <div class="la">
  <td><p><b>Id_Name :
    <br>
    </b>{{Auth::user()->id}}</p></td>
  <p><b>Name :
    <br>
    </b>{{Auth::user()->name}}</p>
  <p><b>Email :
    <br>
    </b>{{Auth::user()->email}}</p>
  <p><b>Password :
    <br>
    </b>{{Auth::user()->password}}</p>
  <p><b>Phone :</b>
    <br>
    {{Auth::user()->phone}}</p>
   
  <p><b>Country :</b>
    <br>
    {{Auth::user()->country}}</p>
  </tr>
  @foreach ($useres as $i)

  @endforeach
  <td class="btn"> {{link_to_route('useres.edit','Edit',$i,['class'=>'btn btn-success'])}}</td>
    <td class="btne"> {{link_to_route('useres.show','Delete',$i,['class'=>'btn btn-danger'])}}
  </td>
    <td></td>
    
</tr>

</div>
<h1 class="la"></h1>
<style>
  .la
  {

    margin-top: 50px;
  }
.btn
{
  color:white;
  background-color:black;
  width: 60px;
  height:60px;
}
  .la
{
margin-left:50px;
}
.btne
{
  color:white;
  margin-right:100px;
  background-color:black;
  width: 60px;
  height:60px;
}
.btnb

</style>
@endsection