@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <a href="{{url('/profile')}}" class="pull-right">My Profile</a>
  </div>

  <h1>Edit profile</h1>
  <hr />
  <form  class="form-horizontal" >
    <div class="form-group">
      <label for="titlename" class="col-sm-4 control-label">Name:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="titlename" placeholder="Title">
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="firstname" placeholder="First Name">
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="lastname" placeholder="Last Name">
      </div>
    </div>
    <div class="form-group">
      <label for="school" class="col-sm-4 control-label">School:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="school" placeholder="School">
      </div>
    </div>
    <div class="form-group">
      <label for="work" class="col-sm-4 control-label">Work:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="work" placeholder="Work">
      </div>
    </div>
    <div class="form-group">
      <label for="hometown" class="col-sm-4 control-label">Home Town:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="hometown" placeholder="Home Town:">
      </div>
    </div>
    <div class="form-group">
      <label for="livein" class="col-sm-4 control-label">Live in:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="livein" placeholder="Live in:">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-4 col-sm-10">
        <button type="submit" class="btn btn-default">Save</button>
      </div>
    </div>
  </form>
</div>
@endsection
