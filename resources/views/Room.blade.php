@extends('layout')
@section('content')

<style>
   h1{text-align: center;}

   h2{
    font-family: 'Gill Sans MT Condensed', serif;
  }
</style>
<div style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif;" >
<h1><br>Room Management</h1>


<br><br>
<div class="row">
<div class="col-md-3 ">
</div>
      <div class="col-md-4 ">
        <div class="card-body">
          <div class="row">
          <div>
               
          <a style="margin:20px" href="RoomtoAdd" method='get'> @csrf
    <img src="{{ asset('images/Add2.png')}}" width="150" alt="" class="img-fluid"> </a>
              </div>
              <div class="col-md-12"><br>
              <h2>&nbsp;&nbsp; ADD ROOM</h2>
              </div>
              
          </div>
      </div>
      </div>
      
        <div class="col-md-4">
        <div class="card-body">
          <div class="row">
          <div>
            
          <a style="margin:20px" href="RoomtoView" method='get'> @csrf
    <img src="{{ asset('images/edit2.png')}}" width="150" alt="" class="img-fluid"> </a>
          </div>
          <div class="col-md-12"><br>
              <h2>&nbsp;EDIT ROOM </h2>
              </div>
      </div>
      </div>
      </div>
      
      
      
      </div>
      
<br><br><br><br>
@endsection