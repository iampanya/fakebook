@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="text-center">Profile Page</h1>
  <hr />
  <div class="row">
    <div class="col-md-6">
      <ul class="list-group">
        <li class="list-group-item">
          <h3 class="text-center">
            <strong>My Profile</strong>
                <a href="{{url('/profile/edit')}}">[Edit]</a>
          </h3>
        </li>
        <li class="list-group-item"><strong>Name: </strong>{{ $profile->getFullName() }}</li>
        <li class="list-group-item"><strong>School: </strong>{{ $profile->school }}</li>
        <li class="list-group-item"><strong>Work: </strong>{{ $profile->work }}</li>
        <li class="list-group-item"><strong>Hometown: </strong>{{ $profile->hometown }}</li>
        <li class="list-group-item"><strong>Live in: </strong>{{ $profile->livetown }}</li>
      </ul>
    </div>
    <div class="col-md-6">
      <h2 class="text-center">My Post</h2>
      <div>
        <form class="form-horizontal" action="/post/create" method="post">
          {{csrf_field()}}
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" class="form-control" id="body" name="body" placeholder="Post something..." required="true">
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-default btn-block">Post</button>
            </div>
          </div>
        </form>
      </div>
      <div>
        <ul class="list-group">
          @foreach ($posts as $post)
          <li class="list-group-item">{{ $post->body }}</li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
