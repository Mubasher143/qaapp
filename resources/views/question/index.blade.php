@extends('layouts.app')

@section('content')
<div class="container">


    <div class="row justify-content-center">

        <div class="col-md-8">

                    @foreach ($questions as $question)

                        <div class="card my-3">
                            <div class="card-body">
                                <a href="{{route('questions.show', $question)}}"> <strong> Question ID:  {{ $question->id }} </strong></a> 

                                <hr>
                                
                                <h3>{{ $question->body }}</h3>
                                
                                <p>
                                    @if($question->user()->exists())
                                        Added by: {{$question->user->name}} | {{$question->user->email}} |
                                    @endif

                                    Type: {{$question->type}}
                                </p>

                                <div class="row justify-content-end">

                                    <div class="mx-1">
                                        <a href="{{route('question.show', $question->id)}}" class="btn btn-dark">Show</a>
                                    </div>

                                    
                                  
                                   
                                   
                               
                               </div>
                                
                            </div>
                        </div>



                    @endforeach

        <div class="my-4 d-flex justify-content-center">   {{ $questions->links() }} </div>
    </div>
</div>
@endsection
