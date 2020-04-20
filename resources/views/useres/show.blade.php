
@extends('layouts.app')
@section('content')
  <h1 class="la1">DO you Want to delete you account</h1>
  <form action="{{'/del/'.Auth::user()->id}}" method="POST" >
    @csrf
    @method('delete')
    <div class="la">
    <button type="submit"  class="btn btn-primary">Delete</button>
    <a href="/myprofile" class="btn btn-danger" >Back</a>
    </div>
    <h1 class="la2"></h1>
    <style>
      .la
      {
        margin-top: 50px;
        margin-left: 300px;
      }
      .la1
      {
        margin-top: 40px;
        margin-left: 300px;
      }
      .la2
      {
        margin-top: 40px;
      }
     
    </style>
    @endsection
