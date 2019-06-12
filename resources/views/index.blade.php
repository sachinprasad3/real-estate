<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aashyana - Real Estate Portal</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Akronim|Lato|Roboto+Condensed" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <!-- swipper -->
        <link rel="stylesheet" href="css/swiper.min.css" type="text/css">


    </head>
    <body>

          <div class="header" id="banner-load">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg">
              <!-- Branding Image -->
            <!--   <img src="images/logo.jpg "  alt="Brand Logo"> -->
              <a class="navbar-brand" href="{{ url('/') }}">
                  Aashyana
              </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarNav">
                  <!-- Right Side Of Navbar -->
                  <ul class="nav navbar-nav ml-auto mr-5">
                    <!-- Authentication Links -->
                    @if (Route::has('login'))
                      @if (Auth::check())
                        <li class="nav-item">
                          <a class="nav-link" href="{{ url('/home') }}">Home</a>
                        </li>
                      @else
                        <li class="nav-item">
                          <a class="nav-link" href="{{ url('/login') }}">Sell/Rent Property</a>
                        </li>
                        <!-- <li class="nav-item">
                          <a class="nav-link" href="#">Home Loan</a>
                        </li> -->
                        <li class="nav-item">
                          <a class="nav-link " href="{{ url('/login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="{{ url('/register') }}">Register</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#"><i class="fas fa-bars" onclick="openNav()"></i> </a>
                          <!-- <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <a href="#">About</a>
                            <a href="#">Login/Register</a>
                            <a href="#">Sale/Rent</a>
                            <a href="#">Home Loan</a>
                            <a href="#">Contact</a>
                          </div> -->

                          @include('layouts.sidebar')
                        </li>
                      @endif
                    @endif
                  </ul>
                </div><!-- end navbar-collapse -->
              </nav><!-- /navbar -->

              <!-- search-->

              <div class="container search-division">
                <!-- <div class="inline-nav d-flex align-items-center">
                  <ul class="nav nav-tabs list-inline">
                    <li class="list-inline-item active" > <a href="#">Buy</a> </li>
                    <li class="list-inline-item"> <a href="#">Rent/PG</a> </li>
                    <li class="list-inline-item"> <a href="#">Project</a> </li>
                  </ul>
                </div> -->
                <div class="col align-self-center">
                  <!-- <form class="form-inline">

                    <div class="dropdown">
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Property Type
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Buy</a>
                        <a class="dropdown-item" href="#">Rent</a>

                      </div>
                    </div> -->


                    <form class="form-inline my-2 my-lg-0 justify-content-center" role="search" action="{{route('search')}}" method="GET">
                      <input class="form-control " type="text" placeholder="search by city" aria-label="Search" name="query" id="query"  value="{{ request()->input('query') }}">
                      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                    </form>

                    <!-- <button type="submit" class="btn btn-primary submit">SEARCH</button> -->

                  <!-- </form> -->
                </div>
              </div>

              <!-- /search -->
            </div>






        <div class="header-line-decoration">
           <span class="bg-secondary-color"></span>
           <span class="bg-blue"></span>
           <span class="bg-orange"></span>
           <span class="bg-red"></span>
           <span class="bg-green"></span>
         </div> <!-- end header-line-decoration -->

         <!-- jumbotron -->
        <div class="buy-rent">
         <div class="jumbotron">
           <h3> <span style="color:#16a085;">Buy</span>  / <span style="color:#1e314a;">Rent</span></h3>
         </div><!-- /jumbotron -->

         <div class="container d-flex justify-content-center">

           <ul class="list-inline">

            <li class="list-inline-item">
              <a href="{{ route('buyHouse')}}">
                <div class="card" style="width:150px; height:150px;">
                  <div class="img" >
                    <img class="card-img-top" src="images/house.png" alt="House" style="object-fit: contain; height:80px; ">
                  </div>
                   <div class="card-body " style="height:50px; padding-top: 0.5rem">
                     <p>Buy House</p>
                   </div>
                 </div>
                 </a>
            </li>

            <li class="list-inline-item">
              <a href="{{ route('buyApartment')}}">
                <div class="card" style="width:150px; height:150px;">
                  <div class="img" >
                    <img class="card-img-top" src="images/apartments.png" alt="House" style="object-fit: contain; height:80px; ">
                  </div>
                   <div class="card-body " style="height:50px; padding-top: 0.5rem">
                     <p>Buy Apartment</p>
                   </div>
                 </div>
                 </a>
            </li>

            <li class="list-inline-item">
              <a href="{{ route('rent')}}">
                <div class="card" style="width:150px; height:150px;">
                  <div class="img" >
                    <img class="card-img-top" src="images/pg.png" alt="House" style="object-fit: contain; height:80px; ">
                  </div>
                   <div class="card-body " style="height:50px; padding-top: 0.5rem">
                     <p>Rent/PG</p>
                   </div>
              </div>
              </a>
            </li>

            <!-- <li class="list-inline-item">
              <a href="#">
                <div class="card" style="width:150px; height:150px;">
                  <div class="img" >
                    <img class="card-img-top" src="images/plot.png" alt="House" style="object-fit: contain; height:80px; ">
                  </div>
                   <div class="card-body " style="height:50px; padding-top: 0.5rem">
                     <p>Buy Plot</p>
                   </div>
                 </div>
                 </a>
            </li> -->
          </ul>
         </div>

         </div>

         <!-- posts -->
         <section class=" container post-section">
           <div class="latest-Property">
             <h1>Latest Properties</h1>
           </div><!-- header -->

           <!-- Swiper -->

            <div class="swiper-container property-slides">
              <div class="swiper-wrapper">

                @foreach($shows as $show)


                <div class="swiper-slide">
                  <a href="{{url('search/showinfo/'.$show->id)}}" style="text-decoration:none;">
                  <div class="card">
                    <div class="img">
                      <img class="card-img-top" src="storage/postImage/{{$show->img}}" alt="No image">

                    </div>
                     <div class="card-body" style="padding:0">
                       <p  style="background-color:#061b36e6; padding:8px 5px;width:auto; text-transform:capitalize; font-size:15px; color:#fff; font-weight:600;" >{{$show->location}}</p>
                       <h5 class="card-title" style=""><b>{{$show->company}}</b></h5>
                       <span><br></span>
                       <p style="font-size:15px;">{{$show->flat}} BHK</p>
                       <p style="font-size:15px;"><b><i class="fas fa-rupee-sign"></i> {{$show->price}}</b> onwards</p>
                       <button class="btn btn-info" type="button" name="button" style="">See Details</button>

                     </div>
                   </div><a/>
                </div>

                @endforeach


              </div>
              <!-- Add Pagination -->
              <!-- <div class="swiper-pagination"></div> -->
              <!-- Add Arrows -->
              <div class="arrow swiper-button-next"></div>
              <div class="arrow swiper-button-prev"></div>
            </div>
         </section><!-- /posts -->

         <!-- city section -->

         <section class="latest-updates">
           <div class="container ">
             <h2>Latest Updates</h2>
           </div>

             <!-- Swiper -->
             <div class="container">


              <div class="swiper-container update-slides">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"> <img src="images/update/1.jpg" alt=""> </div>
                  <div class="swiper-slide"> <img src="images/update/5.jpg" alt=""> </div>
                  <div class="swiper-slide"> <img src="images/update/6.jpg" alt=""> </div>
                  <!-- <div class="swiper-slide"> <img src="images/update/4.jpg" alt=""> </div>
                  <div class="swiper-slide"> <img src="images/update/3.jpg" alt=""> </div> -->

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            </div>

         </section><!-- end latest-updates -->

         <!-- <section class="top-collection">
           <h2>Top property Collections For You</h2>


         </section> -->


         <!-- footer -->
        @include('layouts.footer')

         <!-- scripts -->
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{ asset('js/swiper.min.js') }}"></script>
      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper('.property-slides', {
          slidesPerView: 4,
          slidesPerColumn: 2,
          spaceBetween: 20,
          //loop: true,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
      },
        });
      </script>

      <!-- update script -->
      <script>
    var swiper = new Swiper('.update-slides', {
      direction: 'vertical',
      autoplay: {
       delay: 2500,
       disableOnInteraction: false,
     },
      pagination: {
        el: '.swiper-pagination',
        //dynamicBullets: true,
        clickable: true,
      },
    });
  </script>

<!-- random background -->
  <script>
      $(function () {
      var images = ['1.jpg', '2.jpg', '3.jpg', '4.jpg','5.jpg'];
      $('.header').css({
          'background-image': 'url(images/bgImages/' + images[Math.floor(Math.random() * images.length)] + ')'
      });
    });
  </script>
  <!-- /random background -->


  <!-- sidebar -->
  <!-- <script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  </script> -->
  <!-- /sidebar -->



    </body>
</html>
