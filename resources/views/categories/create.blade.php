@extends('layouts.app')


@section('content')
<h1 class="text-center">create category</h1>
    <div class="card card-default">
      <div class="card-header">add a new category</div>
      <div class="card-body">
        <form action="">
          @csrf
          <div class="form-group">
            <label for="category">category name:</label>
            <input class="form-control" type="text" placeholder="add a new category">
          </div>

          <div class="form-group">
           <a href="" class="btn btn-outline-success">add</a>
          </div>
        </form>
      </div>
    </div>
@endsection