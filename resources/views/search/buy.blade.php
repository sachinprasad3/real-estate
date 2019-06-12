<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Properties in {{ request()->input('query') }} - Aashyana Real Estate</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../css/search.css" type="text/css"> -->

    <link href="{{ asset('css/search/search.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Akronim|Lato|Roboto+Condensed" rel="stylesheet">

    <!-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> -->


    <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount_start" ).val(ui.values[ 0 ] );
        $( "#amount_end" ).val(ui.values[ 1 ] );

      }
    });

  } );
  </script>

  </head>
  <body class="body">
    <!-- navbar -->
    @include('search.search-nav')
<!-- end navbar -->

<!-- feedback -->
@include('layouts.feedback')


<div class="container body mt-2">
  <div class="row">

    <!-- sidebar -->
    @include('search.sidebar')
    <!-- /sidebar -->

    <aside class="col-lg-8 search-result">

      @if(Session::has('flash_message'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>

        {{Session::get('flash_message') }}

      </div>
      @endif
      <!-- path -->
      <div class="path">
        <span>home >properties in Ranchi > All Residential</span>
      </div>
      <div class="search-result">
        <span>{{$products->count()}} properties | All Residential for buy in '{{ request()->input('query')}}'</span>
      </div>


      @foreach($products as $product)
      <div class="update">


      <a href="{{url('search/showinfo/'.$product->id)}}" style="text-decoration:none; color:#000;">

      <div class="card" style="width: 100%;">
        <div class="card-header">
          {{$product->flat}}BHK Apartment{{$product->type}} in {{$product->locality}}, {{$product->city}}
          <span style="float:right"><b><i class="fas fa-rupee-sign"></i>&nbsp{{$product->price}}</b></span>
        </div>
        <div class="card-body">
          <div class="content">
            <div class=" image" >
              <!-- <img src="storage/postImage/{$product->img}" alt=""> -->
              <img src="{{asset('store/postImage/{$product->img->url}')}}" alt="">

            </div><!-- image -->
            <div class=" info">
              <table class="table">
                <tbody>
                  <tr >
                    <td colspan="4">Apartments in {{$product->location}}</td>
                    <td>{{$product->category}}</td>

                  </tr>
                  <tr>
                    <td colspan="5">{{$product->company}}</td>
                  </tr>
                  <tr>
                    <!-- <td colspan="3">1175 - 2575 Sq.Ft.</td>
                    <td colspan="2">Ready to mave</td> -->
                    <td colspan="5"><span>Area : 1175 - 2575 Sq.Ft.</span>&nbsp &nbsp
                    <span>Ready to mave</span></td>


                    <!-- <td><i class="fas fa-rupee-sign"></i> <b><span>{{$product->price}} </span></b>  </td> -->

                    <!-- <td>{{$product->flat}}</td> -->

                  </tr>
                  <tr>
                    <td ><a href="#" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#contact-nquiry-{{$product->id}}">Contact Bulider</a>
                    <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#contact-nquiry-{{$product->id}}" style="float:right">Enquiry Now</a></td>
                    <!-- <td colspan="2"> <span>Owner </span>{{$product->name}} </td> -->
                  </tr>

                </tbody>
              </table>
            </div>
          </div><!-- content -->

          <div class="card-footer ">
            <span>Posted : </span><span>{{date('M j,Y',strtotime($product->created_at))}}</span>
            <span style="float:right">Posted by: {{$product->name}}</span>
          </div><!-- card-footer -->

        </div><!-- card-body -->
      </div><!-- card -->
    </a>
    </div>



    <!-- Modal -->

    <div class="modal fade " id="contact-nquiry-{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle"> Contact Bulider <b>{{$product->name}}</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">


            <form action="{{ route('postenquiry')}}" method="POST">
              {{ csrf_field() }}

              <input type="hidden" name="hidden" value="{{$product->name}}">
              <input type="hidden" name="property_id" value="{{$product->id}}">


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
                <label>Contact No.</label>
                <input class="form-control" type="tel" name="phone" value="">
                @if ($errors->has('phone'))
                  <small class="form-text invalid-feedback">{{ $errors->first('phone') }}</small>
                @endif
              </div>

              <!-- <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control" rows="8" cols="80" is-invalid></textarea>
                @if ($errors->has('message'))
                  <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
                @endif
              </div> -->

              <button type="submit" class="btn btn-primary" name="button">Submit</button>

            </form>
          </div>
      </div>
    </div>
  </div>


      @endforeach
      <div class="paginate">

        {{ $products->appends(Request::except('page'))->links() }}
      </div>



    </aside>

  </div><!-- /row -->
</div><!--/ container -->

<!-- footer -->
@include('layouts.footer')






<!-- <script >
  $(function(){
    $('#bedroom').click(function(){
      alert('hiii');
    });
  });
</script> -->







    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script
    			  src="http://code.jquery.com/jquery-3.4.1.js"
    			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    			  crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
  </body>
</html>
