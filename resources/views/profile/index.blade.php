@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <a href="{{url('/profile/edit')}}" class="pull-right">Edit Profile</a>
  </div>
  <h1>Profile index</h1>
  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">My Profile</h3>
        </div>
        <div class="panel-body">
          <ul class="list-group">
            <li class="list-group-item">Name: {{ $name }}</li>
            {{-- <li class="list-group-item">School: {{ school }}</li>
            <li class="list-group-item">Work: {{ work }}</li>
            <li class="list-group-item">Hometown: {{ hometown }}</li>
            <li class="list-group-item">Live in: {{ livein }}</li> --}}
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <h2>My Post</h2>
    </div>
  </div>
</div>
@endsection
