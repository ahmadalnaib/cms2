@extends('layouts.app')


@section('content')
<div class="clearfix">
  <a href="{{route('categories.create')}}" class="btn btn-outline-dark mb-2 float-right">add categories</a>
</div>
<div class="card card-default">
  <div class="card-header">all categories</div>
  <div class="card-body">no categorise</div>
</div>
    
@endsection