@extends('layout')
@section('content')

<div class="row" style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
    <div class="col-sm-2"> &nbsp; </div> 
    <div class="col-sm-8">
        <form action="{{route('updateDorm')}}" method="get"> <br><br> @csrf
            <h3>
            Edit Dorm
            </h3>
            @foreach($dorms as $dorm)
     Dorm ID: <input name="dormID" type="text" class="form-control" value="{{$dorm->id}}" readonly> <br>
     Dorm Name: <input name="dormName" type="text" class="form-control" value="{{$dorm->name}}" > <br>
     Floor Number:<input name="floorNumber" type="text" class="form-control" value="{{$dorm->floorNumber}}" > <br>
     Room Number:<input name="roomNumber" type="text" class="form-control" value="{{$dorm->roomNumber}}" > <br>
     Administrator Name:<input name="adminName" type="text" class="form-control" value="{{$dorm->adminName}}" > <br>
             @endforeach
            <button type="submit" class="btn btn-info"> Update Dorm</button> <br><br>
        </form>
    </div> 
    <div class="col-sm-2"> &nbsp;</div>

</div>
@endsection