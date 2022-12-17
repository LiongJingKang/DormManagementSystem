@extends('layoutStudent')
@section('content')
    <div class="row" style="background-color: rgb(64, 104, 130); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
       
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="card-body">
            
                
            <div class="row">
                <div class="col-md-3">
                    
                                     
                    <img src="{{ asset('images/pay.jpg')}}" width="250" alt=""> </a>
                </div>
                @foreach($rents as $rent)
                <div class="col-md-9">
                    <br>
                    Room ID:
                    <div class="card-title">{{$rent->roomID}}</div> 
                <h5 class="card-title"></h5>  
                    <br>
                    Rental Price:
                    <div class="card-heading">RM {{$rent->rentPrice}}</div>
                    <p class="card-text"></p>           
                    <br>

                    Payment Status: Paid
                    <div class="card-heading"></div>
                    <br>  
                     

                     @foreach($rooms as $room)
                     @if($room->roomID == $rent->roomID)
            <tr>
                <div hidden><td >{{$room->id}}</td></div>

              
                <td>
                <a href="{{route('checkOut',['id'=>$room->id])}}" class="btn btn-info btn-xs" 
                >view</a></td>
            </tr>

            @endif
            @endforeach  
            @endforeach
                </div>
                </form>
            </div>                
            </div>
        </div>
       
    </div>
@endsection
