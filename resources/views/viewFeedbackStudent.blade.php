@extends('layoutStudent')
@section('content')
<div class="row" style="background-color: rgb(64, 104, 130); color: rgb(177, 208, 224); ">
    <div class="col-sm-2"> &nbsp; </div> 
    <div class="col-sm-8">
        <table class="table table-bordered" style="font-family: 'Gill Sans MT Condensed', serif; color: rgb(177, 208, 224); font-size: 30px;">
        <thead>
           <tr>
            <br>
             <td>ID</td>    
             <td>Student Name</td>
             <td>Topic</td>

           </tr>
        </thead>
        <tbody>
            @foreach($feedbacks as $feedback)
            <tr>
                <td>{{$feedback->id}}</td>
                <td>{{$feedback->studentName}}</td>
                <td>{{$feedback->topic}}</td>

          <td>
                <a href="{{route('showFeedbackStudent',['id'=>$feedback->id])}}" class="btn btn-info btn-xs" 
                >view</a>

            </tr>
            @endforeach  
        </tbody>


        </table>
    </div> 
    <div class="col-sm-2"> &nbsp;</div>

</div>
@endsection
