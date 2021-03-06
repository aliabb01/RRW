@extends('layouts.app')

@section('content')
<div class="feedback">
  <h2 class="text-center pt-4 pb-4 bg-info">{{ __('msg.leave-feedback')}}</h2>
  <form action="/store" method="post">
    @csrf
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="container feedback-main form-group">
      <label for="name">{{ __('msg.name')}}:</label>
      <input type="text" class="form-control" style="width:150px;" name="name_user" required><br>
      <label for="comment">{{ __('msg.comment')}}:</label>
      <textarea type="text" class="form-control" style="resize:none; width:500px; height:300px;" name="comment"
        required></textarea><br>
      <button type="submit" class="btn btn-primary leave">{{ __('msg.feedback')}} <i
          class="fas fa-comment comment-ico"></i></button>
      <br>
    </div>
    <div class="container text-center mt-5">
      <h4>If approved, your comment will be displayed up on the site just below of this text</h4>
    </div>
  </form>

  @foreach($comments as $i)
  <hr>
  <div class="media ml-2">
    <div class="media-left">

      @if (Auth::guest())
      <img style="background-color:white; border-radius:100%;" class="mr-3 ml-3"
        src="https://img.icons8.com/ios-filled/50/000000/user-male-circle.png" />
      <!-- Female Version   <img src="https://img.icons8.com/ios-filled/50/000000/user-female-circle.png"/> -->
      @else
      <img src="/uploads/avatars/{{ Auth::user()->avatar }}"
        style="width:60px; height:60px; border-radius:50%; margin-right:25px;">
      @endif

    </div>
    <div class="media-body">
      <h5 class="mt-0 media-heading">
        <span class="user-name">
          {{$i->name_user}} </span> <small><i>Posted on <span id="post-date"></span></i></small>
      </h5>
      <p class="user-comment">{{$i->comment}}</p>
    </div>
  </div>

  @endforeach
  <hr style="margin-bottom:0px;">
</div>

<style>
  .feedback {
    background-color: var(--body-background);
  }

  .feedback-main {
    border-top-width: 0px;
    border-left-width: 2px;
    border-bottom-width: 0px;
    border-right-width: 2px;
    border-right-color: black;
    border-style: solid;
  }

  .leave:hover .comment-ico {
    color: var(--primary-orange);
    transition: 0.4s;
  }

  .user-name {
    margin-bottom: 5%;
    font-size: 120%;

  }

  .label-name {
    font-size: 125%;
  }
</style>

<script>
  var today = new Date();  
var date = today.getFullYear()+'-'+(today.getMonth()+1);
document.getElementById('post-date').innerHTML = date;
</script>

@endsection