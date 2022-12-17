@extends('layout')
@section('content')
<div class="row" style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
    <div class="col-sm-2">&nbsp;</div>
     <div class="col-sm-8">
        <form action="{{route('addRoom')}}" method="post" > <br><br> @csrf 
           <h3>Add New Room </h3>
            Room ID: <input type="text" name="roomID" class="form-control"><br>
            Room Type: <input type="text" name="roomType" class="form-control"><br>
            Student Number: <input type="int" name="roomStudent" class="form-control"><br>
            Rental Price: <input type="int" name="rentPrice" class="form-control"><br>
            Dorm:<select name="dormName" id="">
            <option value="">Select Dorm</option>
            <option value="1">Dorm A</option>
            <option value="3">Dorm B</option>
           </select>
         
            <button type="submit" class="btn btn-info">Add Room</button><br><br>
        </form>  
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>
@endsection