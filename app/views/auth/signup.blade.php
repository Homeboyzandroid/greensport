@extends('master')
@section('content')
<div class="page-header">
  <div class="pull-right">
    <a href="{{route('signin')}}" class="btn btn-primary">Sign In</a>
  </div>
  <h4>Create Account</h4>
</div>
{{Form::open(['route' => 'account'])}}
  @include('auth._form')
{{Form::close()}}
@stop
