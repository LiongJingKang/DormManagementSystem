@extends('layoutStudent')
@section('content')
    
    @foreach($users as $user)
  
    
    <div class="row" style="background-color: rgb(64, 104, 130); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
        @foreach($rooms as $room)
        @if($user->rentStatus > 0)

        

        &nbsp;&nbsp;&nbsp;&nbsp;  <p> You Have Already Rent a Room</p>

        @else


        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="card-body">
            <form action="{{route('addRent')}}" method="any">
                    @csrf
                    <input type="hidden" name="id" value="{{$room->id}}">
                
            <div class="row">
                <div class="col-md-3">
                    Room ID:
                    <h5 class="card-title">{{$room->roomID}}</h5>                   
                    <img src="{{ asset('images/room2.png')}}" width="250" alt=""> </a>
                </div>
                <div class="col-md-9">
                    <br>
                    Room Type:
                    <p class="card-text">{{$room->roomType}}</p>
                    
                    <br>
                    Student Number:
                    <div class="card-heading"> {{$room->roomStudent}}</div>
                    <br>
                    Rental Price:
                    <div class="card-heading">RM {{$room->rentPrice}}</div>
                    <br>
            <button class="btn btn-danger btn-xs" type="submit">Rent</button>
                     <input hidden name="ID" type="text" class="form-control" value="{{$room->id}}" readonly> <br>
       <input hidden name="roomID" type="text" class="form-control" value="{{$room->roomID}}" > 
      <input hidden name="roomType" type="text" class="form-control" value="{{$room->roomType}}" > 
     <input hidden name="roomStudent" type="text" class="form-control" value="{{$room->roomStudent}}" > 
    <input hidden name="rentPrice" type="text" class="form-control" value="{{$room->rentPrice}}" > 
     <input hidden name="dormName" type="text" class="form-control" value="{{$room->dormName}}" > 

     

    
         <input hidden name="id" type="text" class="form-control" value="{{$user->id}}" readonly> <br>
     <input hidden name="rentStatus" type="text" class="form-control" value="{{$user->rentStatus}}" > <br>

                    
                    
                    
                </div>
                </form>

            </div>                
            </div>
        </div>
       
               
                @endif
        @endforeach
        
        @endforeach
    </div>
@endsection