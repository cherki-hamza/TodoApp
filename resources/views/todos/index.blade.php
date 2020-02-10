@extends('master.app')

@section('stylesheets')
     <style>
        #c1{
            color:gold;
        }
     </style>
@endsection

@section('title' , 'Home')

@section('content')

<div class="jumbotron">

    <div class="container">

      <h1 class="display-4">cherki hamza</h1>
    <img src="{{ asset('assets/img/code.png') }}" alt="cherki code" class="img-fluid rounded">
    </div>
  </div>

  <div class="container-fluid">
    <div class="col-md-12">
        <div class="card my-2">
            <div class="card-header">
                <h3 class="card-title">all  Todos</h3>
{{--                @if (session('toast_success'))--}}
{{--                    <div class="alert alert-success">--}}
{{--                        {{ session('toast_success') }}--}}
{{--                    </div>--}}
{{--                @endif--}}
            </div>
            <div class="card-body">
                   @if(session()->has('success'))
                   <span class="alert alert-danger my-3">{{session()->get('success')}}</span>
                   @endif
                 <table class="table table-bordered table-hover">
                     <thead>
                        <tr>
                            <td>#ID</td>
                            <td>Title</td>
                            <td>Description</td>
                            <td>completed</td>
                            <td>Created_at</td>
                            <td>Updated_at</td>
                            <td>Actions</td>
                        </tr>
                     </thead>
                     <tbody>
                     @forelse ($todos as $todo)
                             <tr>
                                 <td>{{ $todo->id }}</td>
                                 <td>{{ $todo['title'] }}</td>
                                 <td>{{ Str::words($todo->description , 6 , 'Red more...') }}</td>
                                 <td class="text-{{ boolval($todo->completed)? 'success' : 'danger' }}">{{ boolval($todo->completed) ? 'Completed' : 'None completed'}}</td>
                                 <td>{{ $todo->created_at->diffForHumans() }}</td>
                                 <td>{{ $todo->updated_at->diffForHumans() }}</td>
                                 <td>
                                     <form action="{{route('todos.destroy' , $todo->id)}}" method="POST">
                                   <span class="mr-3 float-right">
                                       <button type="submit"><i class="fal fa-trash-alt"></i></button>
                                   </span>
                                         @csrf
                                         @method('delete')
                                     </form>

                                     <span><a class="text-success mr-3 float-right" href="{{route('todos.edit' , $todo->id)}}"><i class="fal fa-edit"></i></a></span>
                                     <span><a class="text-dark mr-3 float-right" href="{{route('todos.show' , $todo->id)}}"><i class="fal fa-eye"></i></a></span>
                                 </td>
                             </tr>
                     @empty
                        <tr>
                            <td class="justify-content-center" colspan="7">
                                <div class="text-primary text-center font-weight-bolder">Oops <span class="text-danger">^_^</span> no todo list  here</div>
                            </td>
                        </tr>
                     @endforelse

                     </tbody>
                 </table>
            </div>
        </div>
    </div>
  </div>


@endsection
