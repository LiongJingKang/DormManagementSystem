@extends('layout')
@section('content')

<div class="row" style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
    <div class="col-sm-2"> &nbsp; </div> 
    <div class="col-sm-8">
        <form action="{{route('updateRoom')}}" method="get"> <br><br> @csrf
            <h3>
            Edit Room
            </h3>
            @foreach($rooms as $room)
      ID: <input name="ID" type="text" class="form-control" value="{{$room->id}}" readonly> <br>
     Room ID: <input name="roomID" type="text" class="form-control" value="{{$room->roomID}}" > <br>
     Room Type:<input name="roomType" type="text" class="form-control" value="{{$room->roomType}}" > <br>
     Student Number:<input name="roomStudent" type="text" class="form-control" value="{{$room->roomStudent}}" > <br>
     Rental Price:<input name="rentPrice" type="text" class="form-control" value="{{$room->rentPrice}}" > <br>
     Dorm:<select name="dormName" id="">
            <option value="">Select Dorm</option>
            <option value="1">Dorm A</option>
            <option value="3">Dorm B</option>
           </select>
         
             @endforeach
            <button type="submit" class="btn btn-info"> Update Room</button> <br><br>
        </form>
    </div> 
    <div class="col-sm-2"> &nbsp;</div>

</div>
@endsection