@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <a href="{{url('/profile/edit')}}" class="pull-right">Edit Profile</a>
  </div>
  <h1 class="text-center">Profile Page</h1>
  <hr />
  <div class="row">
    <div class="col-md-6">
      <ul class="list-group">
        <li class="list-group-item"><h3 class="text-center"><strong>My Profile</strong></h3></li>
        <li class="list-group-item"><strong>Name: </strong>{{ $profile->getFullName() }}</li>
        <li class="list-group-item"><strong>School: </strong>{{ $profile->school }}</li>
        <li class="list-group-item"><strong>Work: </strong>{{ $profile->work }}</li>
        <li class="list-group-item"><strong>Hometown: </strong>{{ $profile->hometown }}</li>
        <li class="list-group-item"><strong>Live in: </strong>{{ $profile->livetown }}</li>
      </ul>
    </div>
    <div class="col-md-6">
      <h2>My Post</h2>
    </div>
  </div>
</div>
@endsection
