@extends('layouts.app')

@section('current-series')

    <h1>title</h1>

    <div class="container container-comics"> 
        
        <div class="row">

            @foreach ($comics_list as $comic)
         
            <div class="col-md-2">
                <div class="card">
                    <img src="{{$comic['thumb']}}" class="card-img-top" alt="{{$comic['series']}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$comic['title']}}</h5>
                     
                    </div>
                 </div>
                </div>
            
            @endforeach
        </div>
    </div>
@endsection