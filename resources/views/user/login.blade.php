
@extends('layouts.master')
@section('title')
E - Sunshine
@endsection
@section('custom-css')
@endsection
@section('layouts.cart')
@endsection
@section('main-content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .form-login{
        padding: 6% 0 1% 0;
    }
    h1{
      text-align: center;
      color: #00a16b;
      padding-top: 15px;
    }
    .form-control{
        position: relative;
        left: 30%;
        width: 40%;
    }
     input[type=text], input[type=password] {
      width: 90%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    label{
        font-weight: 800;
    }
    input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 40%;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: 800;
    }
    input[type=submit]:hover {
      background-color: #45a049;
      font-weight: 800;
    } 
  </style>
</head>
<body>
  <div class="container">
    <div class="form-login">
        <h1>Login Account</h1>
        <form action="" class="form-control" method="GET">
        <label for="username">User Name</label>
        <input type="text" id="username" name="username" placeholder="Input user name.."><br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" minlength="8" placeholder="Input password.."><br>
        <input type="submit" value="Submit">
        </form>
    </div>
  </div>
</body>
</html>


@endsection	

<!-- --------scripts-------------- -->
    
@section('custom-scripts')
@endsection

