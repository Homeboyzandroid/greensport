@extends('master')
@section('content')
<div class="page-header">
  <div class="pull-right">
    <a href="{{route('signup')}}" class="btn btn-primary">Sign Up</a>
  </div>
  <h4>Login</h4>
</div>
{{Form::open(['route' => 'login'])}}
  @include('auth._form')
{{Form::close()}}
@stop
