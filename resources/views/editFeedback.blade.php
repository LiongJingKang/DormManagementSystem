@extends('layout')
@section('content')

<div class="row" style="background-color: rgb(64, 121, 127); color: rgb(177, 208, 224); font-family: 'Gill Sans MT Condensed', serif; font-size: 25px;">
    <div class="col-sm-2"> &nbsp; </div> 
    <div class="col-sm-8">
        <form action="{{route('updateFeedback')}}" method="get"> <br><br> @csrf
            <h3>
            Edit Dorm
            </h3>
            @foreach($dorms as $dorm)
     StudentName: <input name="studentName" type="text" class="form-control" value="{{$feedback->studentName}}" readonly> <br>
     Topic: <input name="topic" type="text" class="form-control" value="{{$feedback->topic}}" > <br>
     Feedback:<input name="feedbackText" type="text" class="form-control" value="{{$feedback->feedback}}" > <br>
     
     
     
             @endforeach
            <button type="submit" class="btn btn-info"> Update Dorm</button> <br><br>
        </form>
    </div> 
    <div class="col-sm-2"> &nbsp;</div>

</div>
@endsection