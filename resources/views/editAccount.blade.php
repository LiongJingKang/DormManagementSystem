@extends('layout')
@section('content')

<div class="row" style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
    <div class="col-sm-2"> &nbsp; </div> 
    <div class="col-sm-8">
    <form action="" method="get"> <br><br>
            <h3>
            Edit Account
            </h3>
           
     Email: <input name="email" type="text" class="form-control" value=""  > <br>
     Password: <input name="password" type="text" class="form-control" value="" > <br>
     UserID:<input name="UserID" type="text" class="form-control" value="" > <br>
     <button type="submit" class="btn btn-info"> Update </button> <br><br>
     </form> 

    <div class="col-sm-2"> &nbsp;</div>

</div>

@endsection