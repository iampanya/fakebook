@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <a href="{{url('/profile/edit')}}" class="pull-right">Edit Profile</a>
    </div>
    <h1>Profile index</h1>
</div>
@endsection
