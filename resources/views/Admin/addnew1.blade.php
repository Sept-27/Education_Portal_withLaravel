
@extends('layouts.nav')
@section('addnewcss')
  <meta charset="utf-8">
	<title>Insert Student page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="../CSS/Css/style.css">
  <link rel="stylesheet" href="../CSS/Bootstrap/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('addform')
<div class="inner">
       @foreach($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
        <form method="post">
          <h3>Register Student</h3>
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-wrapper">
            <input type="text" name="Full_Name" placeholder="Full Name" class="form-control">
            <i class="zmdi zmdi-account"></i>
          </div>
          <div class="form-wrapper">
            <input type="text" name="user_id" placeholder="User ID" class="form-control">
            <i class="zmdi zmdi-id"></i>
          </div>
         
          <div class="form-wrapper">
            <input type="password" name="password" placeholder="Password" class="form-control">
            <i class="zmdi zmdi-lock"></i>
          </div>
          <div class="form-wrapper">
            <input type="text" name="type" readonly value="student" class="form-control">
            <i class="zmdi zmdi-type"></i>
          </div>
          <button>INSERT
            <i class="zmdi zmdi-arrow-right"></i>
          </button>
        </form>

         <div>
          <a href="/AdminHome/admin" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back to list</a>| <a href="/logout" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Logout</a>
      </div>
      </div>    
@endsection