@extends('layoutStudent')
@section('content')
<div class="row" style="background-color: rgb(64, 104, 130); color: rgb(177, 208, 224); ">
    <div class="col-sm-2"> &nbsp; </div> 
    <div class="col-sm-8">
        <table class="table table-bordered" style="font-family: 'Gill Sans MT Condensed', serif; color: rgb(177, 208, 224); font-size: 30px;">
        <thead>
        <br>
           <tr>
             <td>ID</td>
             <td>Room ID</td>
             <td>Room Type</td>
             <td>Student Number</td>
             <td>Rental Price</td>
             <td>Action</td>
           </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
            <tr>
                <td>{{$room->id}}</td>
                <td>{{$room->roomID}}</td>
                <td>{{$room->roomType}}</td>
                <td>{{$room->roomStudent}}</td>
                <td>{{$room->rentPrice}}</td>
              
                <td>
                <a href="{{route('showRoomDetail',['id'=>$room->id])}}" class="btn btn-info btn-xs" 
                >view</a></td>
            </tr>
            @endforeach  
        </tbody>


        </table>
    </div> 
    <div class="col-sm-2"> &nbsp;</div>

</div>
@endsection
