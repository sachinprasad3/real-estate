<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Properties in {{ request()->input('query') }}</title>
    <link href="{{ asset('css/search/search.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Akronim|Lato|Roboto+Condensed" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  </head>
  <body style="">

    <div class="search-head ">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <a class="brand" href="{{ url('/') }}" style="text-decoration:none;">Aashyana</a>
          </div>
          <div class="col-md-9">
            <form class="form-inline justify-content-center my-2 my-lg-0 " role="search" action="{{route('search')}}" method="GET" style="text-align: center;">
              <input class="form-control " type="text" placeholder="Search city name to find your sapano ka Aashyana" aria-label="Search" name="query" id="query" value="{{ request()->input('query') }}" style="width:500px;">
              <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
          <div class="col-md-1">
            <a href="#" style="text-decoration:none;">Menu</a>
          </div>
        </div><!-- /row -->
      </div>
    </div><!-- /search-head -->


      <nav id="navbar-pill" class="navbar navbar-expand-sm  sticky-top mb-5" style="height:100px;">

          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="#overview">Overview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Location">Location</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#details">Details</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Section 4
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#section41">Link 1</a>
                <a class="dropdown-item" href="#section42">Link 2</a>
              </div>
            </li> -->
          </ul>

      </nav>


      @foreach($shows as $post)

      <div class="first" data-spy="scroll" data-target=".navbar" data-offset="0">
        <div class="container-fluid overview"  >
        <div class="container" style="height:500px;" id="overview">

            <div class="row">
              <div class="col-4 " style="border: 1px solid black;">

                  <img class="" src="storage/postImage/{{$post->img}}" alt="" style="width:100%; height:100%;">

              </div>

              <div class="col-8 configuration">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>Configuration
                        <p> <span>{{$post->bedroom}}Bedrooms,</span>  {{$post->bathroom}}Bathrooms, {{$post->balcony}} Balconies</p>
                      </td>
                      <td>{{$post->category}}
                        <p>Deposited {{$post->price}}</p>
                      </td>
                    </tr>
                    <tr>
                      <td>Area <p>Bulit Up Area: 1700 Sq. Ft.</p> </td>
                      <td>Address <p>{{$post->location}}</p> </td>
                    </tr>
                    <tr>
                      <td>Furnishing <p>Unfirnish</p> </td>
                      <td>Available For <p>Family</p> </td>
                    </tr>
                    <tr>
                      <td>floor <p>6</p> </td>
                      <td>Car Parking <p>yes</p> </td>
                    </tr>
                    <tr>
                      <td>Available From <p>Immediate</p> </td>
                      <td>Posted By & On Owner on <p> May 05,2019 </p> </td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- /col-8 -->
            </div><!-- /row -->
        </div><!-- /container -->
        </div>

        <div class="container-fluid mt-2" id="Location">
          <div class="container">
            <div class="">
              <h4>Location</h4>
            </div>
            <div class="">
              address : {{$post->location}}
            </div>
          </div>
        </div><!-- /location -->

        <div class="container-fluid mt-2"  id="details">
          <div class="container">
            <div class="">
              <h4>Details</h4>
            </div>
            <div class="row">
              <div class="col-3">
                <div class="img">
                  <img class="" src="storage/postImage/{{$post->img}}" alt="" style="width:100%; height:100%;">

                </div>
              </div>
              <div class="col-9">
                name : {{$post->name}}
              </div>
            </div>

          </div>

        </div><!-- details -->

      </div><!-- /scrpll -->
      @endforeach

      @include('layouts.footer')

      <script>
      $(document).ready(function(){
        $('body').scrollspy({target: ".navbar", offset: 50});
      });
      </script>


  </body>
</html>
