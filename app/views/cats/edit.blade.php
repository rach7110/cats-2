@extends('master')

@section('header')
  <a href="{{url('cats')}}">&larr; Cancel</a>
  <h2>
    @if($method == 'post')
      Add a new cat
    @elseif($method == 'delete')
      Delete {{$cat->name}}?
    @else($method == 'edit')
      Edit {{$cat->name}}
    @endif
  </h2>
@stop

<!-- @section('content')
  {{Form::model($cat, array('method' => $method, 'url' => 'cats/'.$cat->id))}}
  
  Last edited: {{$cat->updated_at}}
@stop -->