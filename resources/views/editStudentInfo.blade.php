@extends('layoutStudent')
@section('content')

<div class="row" style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
    <div class="col-sm-2"> &nbsp; </div> 
    <div class="col-sm-8">
        <form action="{{route('updateStudentInfo')}}" method="get"> <br><br> @csrf
            <h3>
            Edit Dorm
            </h3>
            @foreach($users as $user)
         <input hidden name="id" type="text" class="form-control" value="{{$user->id}}" readonly> <br>
     Student Name: <input name="name" type="text" class="form-control" value="{{$user->name}}" > <br>
     Age:<input name="age" type="text" class="form-control" value="{{$user->age}}" > <br>
     Gender:<input name="gender" type="text" class="form-control" value="{{$user->gender}}" > <br>
             @endforeach
            <button type="submit" class="btn btn-info"> Update Info</button> <br><br>
        </form>
    </div> 
    <div class="col-sm-2"> &nbsp;</div>

</div>
@endsection