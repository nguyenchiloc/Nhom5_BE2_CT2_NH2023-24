
@extends('layouts.master')
@section('title')
E - Sunshine
@endsection
@section('custom-css')
@endsection
@section('layouts.cart')
@endsection
@section('main-content')

<style>
.account{
    border: 2px solid blue;
    margin-left:650px;
    margin-top: 100px;
    margin-bottom: 80px;
    width:320px;
    
    
}
h2{
    color: black;
    margin-bottom: 10px;
    margin-left: 110px;
}
.input{
    border: 2px solid black;
    border-radius: 10px;
    padding: 4px;
    margin-bottom: 6px;
    margin-left:60px;
}
.submit{
    border: 2px solid black;
    border-radius: 10px;
    padding: 0 40px 0 40px;
    margin-bottom:10px;
    margin-left: 85px;

}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="account">
        <h2>Register</h2>
    <form method="GET" action="">
        <input type="text" name="name" class="input" placeholder="Name">
        <input type="email" name="email" class="input" placeholder="Email">
        <input type="password" name="password " class="input" placeholder="Password">
        <input type="submit" value ="Register" class="submit"></input>
    </form>



    </div>

</body>
</html>


@endsection	

<!-- --------scripts-------------- -->
    
@section('custom-scripts')
@endsection