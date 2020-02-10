@extends('master.app')

@section('styleshets')
    <style>
        #c1{
            color:gold;
        }
    </style>
@endsection

@section('title' , ''.$todo->title)

@section('content')
    <div class="container">
       <div class="card row">
           <div class="card-header">
               <h2 class="card-title text-primary my-2">{{$todo->title}}</h2>
               <span class="float-right text-{{ boolval($todo->completed)? 'success' : 'danger' }}">{{ boolval($todo->completed)? 'Completed' : 'Non Completed' }}</span>
           </div>
           <div class="card-body">
             <p class="font-weight-bolder">{{$todo->description}}</p>
               <span class="badge badge-warning float-right">{{$todo->completed}}</span><br>
               <span class="badge badge-primary float-right">{{$todo->created_at->diffForHumans()}}</span>
           </div>
       </div>
    </div>


@endsection
