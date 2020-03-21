@extends('layouts.app')

@section('content')


<div class="cont1">
   <div class="row justify-content-left">
     <h1>Left part</h1>
   </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-light content-left">{{ __('msg.welcome')}}</h1>
            <h1 class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa aliquam unde, id dicta quam ut omnis quasi quas odit recusandae magni totam. Ratione, porro itaque hic recusandae tempore autem sit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni libero nisi doloribus repudiandae ipsa eligendi delectus? Iste, similique, quasi numquam placeat, odio veniam voluptatum ipsa nostrum dolore totam molestiae sint.</h1>
            <h1 class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa aliquam unde, id dicta quam ut omnis quasi quas odit recusandae magni totam. Ratione, porro itaque hic recusandae tempore autem sit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni libero nisi doloribus repudiandae ipsa eligendi delectus? Iste, similique, quasi numquam placeat, odio veniam voluptatum ipsa nostrum dolore totam molestiae sint.</h1>
            <h1 class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa aliquam unde, id dicta quam ut omnis quasi quas odit recusandae magni totam. Ratione, porro itaque hic recusandae tempore autem sit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni libero nisi doloribus repudiandae ipsa eligendi delectus? Iste, similique, quasi numquam placeat, odio veniam voluptatum ipsa nostrum dolore totam molestiae sint.</h1>
            <h1 class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa aliquam unde, id dicta quam ut omnis quasi quas odit recusandae magni totam. Ratione, porro itaque hic recusandae tempore autem sit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni libero nisi doloribus repudiandae ipsa eligendi delectus? Iste, similique, quasi numquam placeat, odio veniam voluptatum ipsa nostrum dolore totam molestiae sint.</h1>
            <h1 class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa aliquam unde, id dicta quam ut omnis quasi quas odit recusandae magni totam. Ratione, porro itaque hic recusandae tempore autem sit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni libero nisi doloribus repudiandae ipsa eligendi delectus? Iste, similique, quasi numquam placeat, odio veniam voluptatum ipsa nostrum dolore totam molestiae sint.</h1>
        </div>
    </div>
    <div class=" justify-content-right">
      <h1>Right part</h1>
    </div>    
</div>

<div class="cont2">
  <h1 class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa odit, iste tenetur placeat illum dignissimos aliquid distinctio ea nobis corporis iure a nostrum dolore fugit velit quidem natus ipsum. Error.</h1>
  <h1 class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa odit, iste tenetur placeat illum dignissimos aliquid distinctio ea nobis corporis iure a nostrum dolore fugit velit quidem natus ipsum. Error.</h1>
  <h1 class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa odit, iste tenetur placeat illum dignissimos aliquid distinctio ea nobis corporis iure a nostrum dolore fugit velit quidem natus ipsum. Error.</h1>
  <h1 class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa odit, iste tenetur placeat illum dignissimos aliquid distinctio ea nobis corporis iure a nostrum dolore fugit velit quidem natus ipsum. Error.</h1>
</div>

<div class="cont3">
  <h1 class="text-light new"> New to us? <a href="register"><button type="button" class="btn-lg btn-danger">
    Sign Up!
</button></a></h1>
<h1 class="text-light timetable"> Check our Timetables <a href="register"><button type="button" class="btn-lg btn-danger">
  Check out!
</button></a></h1>

</div>


<style>
  .cont1{    
    background-image: url('logo/background.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    display: flex;  /*  Delete this to return "right part" into previous place  */
  }

  .cont2{
    background-color:rgb(225, 225, 225);
    display: flex;
  }

  .cont3{
    background-image: url('logo/background4.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    height:250px;  
  }

  .new{
    font-family: "Lucida Console", Monaco, monospace;
    margin-left: 5%;
    margin-top: 5%;
    width:350px;
  }

  .timetable{
    font-family: "Lucida Console", Monaco, monospace;    
    width:350px;
  }

  body{
    background-image: url('logo/background4.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;    
  }
</style>
@endsection
