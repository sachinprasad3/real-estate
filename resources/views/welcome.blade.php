<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <title>Welcome</title>

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
                          <a class="nav-link" href="#">Sell/Rent Property</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Home Loan</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="{{ url('/login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="{{ url('/register') }}">Register</a>
                        </li>
                      @endif
                    @endif
                  </ul>
                </div><!-- end navbar-collapse -->
              </nav><!-- /navbar -->

              <!-- search-->

              <div class="container search-division">
                <div class="col align-self-center">
                  <form class="form-inline">

                    <div class="dropdown">
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Property Type
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                      </div>
                    </div>

                    <div class="form-groups" action="{{route('buysearch')}}" method="GET">
                      <input class="form-control " type="text" placeholder="search location to find your sapano ka aashyana" aria-label="Search" name="query" id="query" value="{{ request()->input('query') }}">
                    </div>

                    <button type="submit" class="btn btn-primary submit">SEARCH</button>

                  </form>
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

         <!-- all contents are here -->
         <div class="all-content">
           <div class="apartments">
             <div class="container-fluid padding">
               <div class="row padding">
                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                   <div class="card">
                      <img class="card-img-top" src="images/home/apatment.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Buy-Apartments</h5>
                        <a href="#">1BHK</a>
                        <a href="#">2BHK</a>
                        <a href="#">5BHK</a>
                      </div>
                    </div>
                 </div><!-- end first card -->

                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                   <div class="card">
                      <img class="card-img-top" src="images/home/villa.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Buy-Villas</h5>
                        <a href="#">Below 60Lakhs</a>
                        <a href="#">60Lakhs-80Lakhs</a>
                        <a href="#">Above 80 Lakhs</a>
                      </div>
                    </div>
                 </div><!-- end second card -->
                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                   <div class="card">
                      <img class="card-img-top" src="images/home/plot.jpeg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Buy-plots</h5>
                        <a href="#">Below 60Lakhs</a>
                        <a href="#">60Lakhs-80Lakhs</a>
                        <a href="#">Above 80 Lakhs</a>
                      </div>
                    </div>
                 </div><!-- end third card -->
                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                   <div class="card">
                      <img class="card-img-top" src="images/home/rent.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Rent-Apartments</h5>
                        <a href="#">1BHK</a>
                        <a href="#">2BHK</a>
                        <a href="#">5BHK</a>
                      </div>
                    </div>
                 </div><!-- end fourth card -->
               </div><!-- end row -->
             </div><!-- end container-fluid -->
           </div><!-- end Apartments -->
           <hr class="my-4">
         </div><!-- end all-content -->


         <!-- posts -->
         <section class=" container post-section">
           <div class="latest-Property">
             <h1>latest Properties</h1>
           </div><!-- header -->

           <!-- Swiper -->
            <div class="swiper-container property-slides">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="card">
                     <img class="card-img-top" src="images/home/rent.jpg" alt="Card image cap">
                     <div class="card-body">
                       <h5 class="card-title">Buy-plots</h5>
                       <a href="#">Below 60Lakhs</a>
                       <a href="#">60Lakhs-80Lakhs</a>
                       <a href="#">Above 80 Lakhs</a>
                     </div>
                   </div>
                </div>
                <div class="swiper-slide">
                  <div class="card">
                     <img class="card-img-top" src="images/home/plot.jpeg" alt="Card image cap">
                     <div class="card-body">
                       <h5 class="card-title">Buy-plots</h5>
                       <a href="#">Below 60Lakhs</a>
                       <a href="#">60Lakhs-80Lakhs</a>
                       <a href="#">Above 80 Lakhs</a>
                     </div>
                   </div>
                </div>

                <div class="swiper-slide">
                  <div class="card">
                     <img class="card-img-top" src="images/home/plot.jpeg" alt="Card image cap">
                     <div class="card-body">
                       <h5 class="card-title">Buy-plots</h5>
                       <a href="#">Below 60Lakhs</a>
                       <a href="#">60Lakhs-80Lakhs</a>
                       <a href="#">Above 80 Lakhs</a>
                     </div>
                   </div>
                </div>

                <div class="swiper-slide">
                  <div class="card">
                     <img class="card-img-top" src="images/home/rent.jpg" alt="Card image cap">
                     <div class="card-body">
                       <h5 class="card-title">Buy-plots</h5>
                       <a href="#">Below 60Lakhs</a>
                       <a href="#">60Lakhs-80Lakhs</a>
                       <a href="#">Above 80 Lakhs</a>
                     </div>
                   </div>
                </div>

                <div class="swiper-slide">
                  <div class="card">
                     <img class="card-img-top" src="images/home/plot.jpeg" alt="Card image cap">
                     <div class="card-body">
                       <h5 class="card-title">Buy-plots</h5>
                       <a href="#">Below 60Lakhs</a>
                       <a href="#">60Lakhs-80Lakhs</a>
                       <a href="#">Above 80 Lakhs</a>
                     </div>
                   </div>
                </div>

                <div class="swiper-slide">
                  <div class="card">
                     <img class="card-img-top" src="images/home/rent.jpg" alt="Card image cap">
                     <div class="card-body">
                       <h5 class="card-title">Buy-plots</h5>
                       <a href="#">Below 60Lakhs</a>
                       <a href="#">60Lakhs-80Lakhs</a>
                       <a href="#">Above 80 Lakhs</a>
                     </div>
                   </div>
                </div>

                <div class="swiper-slide">
                  <div class="card">
                     <img class="card-img-top" src="images/home/plot.jpeg" alt="Card image cap">
                     <div class="card-body">
                       <h5 class="card-title">Buy-plots</h5>
                       <a href="#">Below 60Lakhs</a>
                       <a href="#">60Lakhs-80Lakhs</a>
                       <a href="#">Above 80 Lakhs</a>
                     </div>
                   </div>
                </div>
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
           <div class="container Popular-city">
             <h3>Latest Updates</h3>

             <!-- Swiper -->
              <div class="swiper-container update-slides">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"> <img src="images/bgImages/1.jpg" alt=""> </div>
                  <div class="swiper-slide"> <img src="images/bgImages/2.jpg" alt=""> </div>
                  <div class="swiper-slide"> <img src="images/bgImages/3.jpg" alt=""> </div>
                  <div class="swiper-slide"> <img src="images/bgImages/4.jpg" alt=""> </div>
                  <div class="swiper-slide"> <img src="images/bgImages/5.jpg" alt=""> </div>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
           </div>
         </section><!-- end latest-updates -->

         <div class="cities">
           <h3>Popular cities</h3>
         </div>
         <!-- footer -->
         <footer>
           <div class="row">
             <div class="col-lg-3 col-sm-3 ftcity">
               <h3>Real Estate in India</h3>

               <ul class="nav flex-column" >

                 <div class="row">
                   <div class="col">
                     <li class="nav-item">
                       <a class="nav-links" title="Bangalore Real Estate" href="">Bangalore</a></li>
                   </div>
                   <div class="col">
                     <li class="nav-item">
                       <a class="nav-links" title="Chennai Real Estate" href="">Chennai</a></li>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col">
                     <li class="nav-item">
                       <a class="nav-links" title="Hyderabad Real Estate" href="">Hyderabad</a></li>
                   </div>
                   <div class="col">
                     <li class="nav-item">
                       <a class="nav-links" title="Pune Real Estate" href="">Pune</a></li>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col">

                        <li class="nav-item">
                        <a class="nav-links" title="Kolkata Real Estate" href="">Kolkata</a></li>
                   </div>
                   <div class="col">
                     <li class="nav-item">
                       <a class="nav-links" title="Ahmedabad Real Estate" href="">Ahmedabad</a></li>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col">
                     <li class="nav-item">
                       <a class="nav-links" title="Ahmedabad Real Estate" href="">Ahmedabad</a></li>
                   </div>
                   <div class="col">
                     <li class="nav-item">
                       <a class="nav-links" title="Chandigarh Real Estate" href="">Chandigarh</a></li>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col">
                     <li class="nav-item">
                     <a class="nav-links" title="Jaipur Real Estate" href="">Jaipur</a></li>
                   </div>
                   <div class="col">
                     <li class="nav-item">
                     <a class="nav-links" title="Nagpur Real Estate" href="">Nagpur</a></li>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col">
                     <li class="nav-item">
                    <a class="nav-links" title="Bhubaneswar Real Estate" href="">Bhubaneswar</a></li>
                   </div>
                   <div class="col">
                     <li class="nav-item">
                     <a class="nav-links" title="Coimbatore Real Estate" href="">Coimbatore</a></li>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col">
                     <li class="nav-item">
                     <a class="nav-links" title="Ranchi Real Estate" href="">Ranchi</a></li>
                   </div>
                   <div class="col">
                     <li class="nav-item">
                     <a class="nav-links" title="Raipur Real Estate" href="">Raipur</a></li>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col">
                     <li class="nav-item">
                     <a class="nav-links" title="Goa Real Estate" href=""</a>Goa</li>
                   </div>
                   <div class="col">
                     <li class="nav-item">
                     <a class="nav-links" title="Indore Real Estate" href="">Indore</a></li>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col">
                     <li class="nav-item">
                    <a class="nav-links" title="Kerala Real Estate" href="">Kerala</a></li>
                   </div>
                   <div class="col">
                     <li class="nav-item">
                     <a class="nav-links" title="Surat Real Estate" href="">Surat</a></li>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col">
                     <li class="nav-item">
                     <a class="nav-links" title="Patna Real Estate" href="">Patna</a></li>
                   </div>
                   <div class="col">
                     <li class="nav-item">
                     <a class="nav-links" title="Varanasi Real Estate" href="">Varanasi</a></li>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col">
                     <li class="nav-item">
                    <a class="nav-links" title="Kanpur Real Estate" href="">Kanpur</a></li>
                   </div>
                   <div class="col">
                     <li class="nav-item">
                     <a class="nav-links" title="Dehradun Real Estate" href="">Dehradun</a></li>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col">
                     <li class="nav-item">
                     <a class="nav-links" title="Vadodara Real Estate" href="">Vadodara</a></li>

                   </div>
                   <div class="col">
                     <li class="nav-item">
                     <a class="nav-links" title="Nasik Real Estate" href="">Nasik</a></li>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col">
                     <li class="nav-item">
                    <a class="nav-links" title="Vijayawada Real Estate" href="">Vijayawada</a></li>
                   </div>
                   <div class="col">
                     <li class="nav-item">
                    <a class="nav-links" title="Mysore Real Estate" href="">Mysore</a></li>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col">
                     <li class="nav-item">
                       <a class="nav-links" title="Delhi / NCR Real Estate" href="">Delhi / NCR</a></li>
                   </div>
                   <div class="col">
                     <li class="nav-item">
                       <a class="nav-links" title="Mumbai Real Estate" href="">Mumbai</a></li>
                   </div>
                 </div>



              </ul>

             </div>

             <div class="col-lg-3 col-sm-3">
               <h3>Aashyana</h3>
               <p>Links</p>
               <ul class="nav flex-column">
                 <li class="nav-item">
                   <a class="nav-link" href="#">Home</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="#">About</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="#">Sell</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="#">Rent</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="#">Others</a>
                 </li>
               </ul>

             </div>

             <div class="col-lg-3 col-sm-3">
               <h3>Parntens</h3>

             </div>

             <div class="col-lg-3 col-sm-3">
               <div class="contact">
                 <h5>Contact Us</h5>
                 <p>Toll Free <span>1800-41-99099</span> </p>
                 <p>Monday-Saturday(10:00AM - 04:00PM)</p>
                 <p>Email: <span>sapnoka@aashyana.com</span> </p>
               </div>

               <div class="contact-social">
                 <h5>Connect with us</h5>

               </div>


             </div>
           </div><!-- end row -->

         </footer>


         <!-- scripts -->
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{ asset('js/swiper.min.js') }}"></script>
      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper('.property-slides', {
          slidesPerView: 3,
          spaceBetween: 30,
          loop: true,
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

  <script>
      $(function () {
      var images = ['1.jpg', '2.jpg', '3.jpg', '4.jpg','5.jpg'];
      $('.header').css({
          'background-image': 'url(images/bgImages/' + images[Math.floor(Math.random() * images.length)] + ')'
      });
    });
  </script>



    </body>
</html>
