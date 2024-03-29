@extends('layouts.layout')
@section('title','Register')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" aria-describedby="nameHelp"
                placeholder="Name" name=name>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" aria-describedby="emailHelp"
                placeholder="Email" name=email>
              </div>
            <div class="mb-3">
              <input type="password" class="form-control" placeholder="password" name="password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Have an
              Account? <a href="{{ route('login') }}" class="text-dark fw-bold"> Login
                </a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
@endsection
