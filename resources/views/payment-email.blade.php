<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>

    @if (Auth::guest())
  <h1 class="text-light text-center">Hello User!</h1>
  @else
  <h1 class="text-light text-center">Hello <span>{{Auth::user()->name}}</span> !</h1>
  @endif
<br>
click on Download to get your invoice.

<br>

    <a href="http://127.0.0.1:8000/invoice"  class="btn btn-danger" > Download</a>
</body>
</html>