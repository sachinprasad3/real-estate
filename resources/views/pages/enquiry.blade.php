<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Enquiry</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <style media="screen">
      .invalid-feedback{
        display: block;
      }
    </style>
  </head>
  <body>

    @include('layouts.header')

    <div class="container">
      <h1>Contact Us</h1>
      <div class="row">
        <div class="col-md-6">
          @if(Session::has('flash_message'))
          <div class="alert alert-success">
            {{Session::get('flash_message') }}

          </div>
          @endif

        <form action="{{ route('postenquiry')}}" method="POST">
          {{ csrf_field() }}

          <div class="form-group">
            <label>Full Name</label>
            <input class="form-control" type="text" name="name" value="">
            @if ($errors->has('name'))
              <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
            @endif
          </div>

          <div class="form-group">
            <label>Email Address</label>
            <input class="form-control" type="email" name="email" value="">
            @if ($errors->has('email'))
              <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
            @endif
          </div>

          <div class="form-group">
            <label>Message</label>
            <textarea name="message" class="form-control" rows="8" cols="80" is-invalid></textarea>
            @if ($errors->has('message'))
              <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
            @endif
          </div>

          <button type="btn btn-primary" name="button">Submit</button>

        </form>
        </div>
      </div>
    </div>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if(Session::has('flash_message'))
        <div class="alert alert-success">
          {{Session::get('flash_message') }}

        </div>
        @endif

        <form action="{{ route('postenquiry')}}" method="POST">
          {{ csrf_field() }}

          <div class="form-group">
            <label>Full Name</label>
            <input class="form-control" type="text" name="name" value="">
            @if ($errors->has('name'))
              <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
            @endif
          </div>

          <div class="form-group">
            <label>Email Address</label>
            <input class="form-control" type="email" name="email" value="">
            @if ($errors->has('email'))
              <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
            @endif
          </div>

        

          <div class="form-group">
            <label>Message</label>
            <textarea name="message" class="form-control" rows="8" cols="80" is-invalid></textarea>
            @if ($errors->has('message'))
              <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
            @endif
          </div>

          <button type="btn btn-primary" name="button">Submit</button>

        </form>
      </div>

    </div>
  </div>
</div>

  </body>
</html>
