@extends('master.app')

@section('styleshets')
     <style>
        #c1{
            color:gold;
        }
     </style>
@endsection

@section('title' , 'Home')

@section('content')

<!-- <div class="jumbotron">
    <div class="container">
      <h1 class="display-4">cherki hamza</h1>
      <img src="{{ asset('assets/img/code.png') }}" alt="cherki code" class="img-fluid rounded">
    </div>
</div> -->

<div class="container">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title">Add new Todo</h3>
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="card-body">
              <div class="col-md-12">
                <form action="{{ route('todos.store') }}" method="POST">
                    @csrf
                <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Write the title">
                </div>

                <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>

                <div class="form-group">
                  <input type="submit" id="btn" class="btn btn-primary">
                </div>
                </form>
             </div>

    </div>
</div>

@endsection

@section('scripts')

@endsection
