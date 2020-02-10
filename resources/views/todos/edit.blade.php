@extends('master.app')

@section('stylesheets')
  <style> </style>
@endsection

@section('title' , 'create todo')


@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title text-primary">Create new Tod</h1>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form action="{{route('todos.update' , $todo->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" value="{{ $todo->title }}" class="form-control @error('title') is-invalid  @enderror" id="title" name="title" placeholder="Write the title">
                            @error('title')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea  class="form-control @error('description') is-invalid  @enderror" id="description" name="description" rows="3">{{$todo->description}}</textarea>
                            @error('description')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" id="btn" value="Update Todo" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 bg-secondary">
            <span><i class="fa fa-books-medical text-white"></i></span>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script> </script>
@endsection
