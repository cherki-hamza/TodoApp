@extends('master.app')

@section('styleshets')
    <style>
        #c1{
            color:gold;
        }
    </style>
@endsection

@section('title' , 'Todo')

@section('content')
    <h1 class="display-4">Single Todo</h1>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card my-2">
                <div class="card-header">
                    <h3 class="card-title">todo number : <span class="float-right">
                             <span><a href="{{ route('todos.show') }}">Table</a></span>
                             <span>|</span>
                             <span><a href="{{ route('app.card') }}">Card</a></span>
                        </span>
                    </h3>
                </div>
                <div class="card-body">
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

                            <tr>

                                <td>{{ $todo->id }}</td>
                                <td>{{ $todo['title'] }}</td>
                                <td class="font-weight-bold">{{ Str::words($todo->description , 10, ' Red more...') }}</td>
                                <td>{{ $todo['completed'] }}<span class="badge badge-warning">status</span></td>
                                <td>{{ $todo->created_at->diffForHumans() }}</td>
                                <td>{{ $todo->updated_at->diffForHumans() }}</td>
                                <td>
                                    <span><a class="text-danger mr-3 float-right" href="#"><i class="fal fa-trash-alt"></i></a></span>
                                    <span><a class="text-success mr-3 float-right" href="#"><i class="fal fa-edit"></i></a></span>
                                    <span><a class="text-dark mr-3 float-right" href="#"><i class="fal fa-eye"></i></a></span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
