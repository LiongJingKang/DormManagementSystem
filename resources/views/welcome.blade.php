@extends('layoutAdminKey')
@section('content')
<br><br><br>

<style>
   h1{text-align: center;}
</style>

<h1>LOGIN AS</h1>

<br><br>
<div class="row">
<div class="col-md-3 ">
</div>
      <div class="col-md-4 ">
        <div class="card-body">
          <div class="row">
          <div>
               
          <a style="margin:20px" href="hometoAdmin" method='get'> @csrf
    <img src="{{ asset('images/admin.jpg')}}" width="150" alt="" class="img-fluid"> </a>
              </div>
              Admin
          </div>
      </div>
      </div>
      
        <div class="col-md-4">
        <div class="card-body">
          <div class="row">
          <div>
            
          <a style="margin:20px" href="hometoStudent" method='get'> @csrf
    <img src="{{ asset('images/acc.png')}}" width="150" alt="" class="img-fluid"> </a>
          </div>
           Student
      </div>
      </div>
      </div>
      

      
      </div>
      
<br><br><br><br><br><br>
@endsection