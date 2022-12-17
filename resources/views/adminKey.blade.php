@extends('layoutAdminKey')
@section('content')
<style>
   h1{text-align: center;}
</style>
<div class="row">
    <div class="col-sm-2">&nbsp;</div>
     <div class="col-sm-8">
        <form action="">
           <h3>Admin Login </h3>
         Admin Key: <input type="text" name="adminKey" class="form-control"><br>

         
         <a href="homeAdmin" class="btn btn-info btn-xs" 
                >Submit</a> <br>
        </form>  
    </div>
    <br><br>
    
</div>
@endsection