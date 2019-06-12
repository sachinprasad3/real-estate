<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../css/search.css" type="text/css"> -->
    <link href="{{ asset('css/search/search.css') }}" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <!-- searching -->
        <form class="form-inline my-2 my-lg-0" role="search" action="{{route('search')}}" method="GET">
          <input class="form-control " type="text" placeholder="search by city" aria-label="Search" name="query" id="query"  value="{{ request()->input('query') }}">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

      </li>

    </ul>
    <div class="">
      <a href="#">Home Loan</a>
      <a href="#">Menu</a>
    </div>



  </div>
</nav>
<!-- end navbar -->

<!-- feedback -->
<div class="feedback" >
  <a href="#" data-toggle="modal" data-target="#exampleModalCenter"> <span style="color:#1455f2;">feed</span><span style="color:#21ff00;">back</span> </a>
</div>

<div class="container body mt-2">
  <div class="row">

    <!-- side bar -->
    <div class="col-lg-3 sidebar data-spy="affix" data-offset-top="205"">
      <div class="head">
        <h4>Filter</h4>
      </div><!-- /head -->

      <div class="form-group price-range">
        <p>Budget</p>
        <div class="row">
          <div class=" col-5">
            <select class="form-control" aria-hidden="true">
                <option selected="selected" >min</option>
                <option>5 Lakhs</option>
                <option>10 Lakhs</option>
                <option>15 Lakhs</option>
                <option>20 Lakhs</option>
                <option>25 Lakhs</option>

            </select>
          </div>
          <div class="col-2">
            <span>-</span>
          </div>
          <div class="col-5">
            <select class="form-control" aria-hidden="true">
                <option selected="selected">max</option>
                <option>10 Lakhs</option>
                <option>20 lakhs</option>
                <option>50 lakhs</option>
                <option>60 lakhs</option>
                <option>75 lakhs</option>
            </select>
          </div>
        </div><!-- /row -->
      </div><!-- /price range -->

      <div class="bedrooms">
        <h4>Bedrooms</h4>
        <table class="table">

          <tbody>
            <tr>
              <td> <input type="checkbox" name="bedroom[]" value="1">&nbsp 1BHK </td>
              <td> <input type="checkbox" name="bedroom[]" value="2">&nbsp 2BHK </td>

            </tr>
            <tr>
              <td> <input type="checkbox" name="bedroom[]" value="3">&nbsp 3BHK </td>
              <td> <input type="checkbox" name="bedroom[]" value="4">&nbsp 4BHK </td>

            </tr>
            <tr>
              <td> <input type="checkbox" name="bedroom[]" value="5">&nbsp 5BHK </td>
              <td> <input type="checkbox" name="bedroom[]" value="6">&nbsp 6BHK </td>

            </tr>
            <tr>
              <td> <input type="checkbox" name="bedroom[]" value="7">&nbsp 7BHK </td>
              <td> <input type="checkbox" name="bedroom[]" value="8">&nbsp 8BHK </td>

            </tr>
            <tr>
              <td> <input type="checkbox" name="bedroom[]" value="9">&nbsp 9BHK </td>
              <td> <input type="checkbox" name="bedroom[]" value="10">&nbsp 9+BHK </td>

            </tr>
          </tbody>
        </table>

      </div><!-- /bedrooms -->

      <div class="position-in">
        <h4>Position</h4>
        <input type="checkbox" name="" value="">&nbsp read to move <br>
        <input type="checkbox" name="" value="">&nbsp under Construction
      </div><!-- /position-in -->

      <div class="property-type">
        <h4>Property Type</h4>
        <input type="checkbox" name="" value="">&nbsp Residential Apartments
      </div><!-- /property-type -->

      <div class="search">
        <div>
        <h4>Search</h4>
        <form class="form-inline">
          <input class="form-control " type="search" placeholder="Search" aria-label="Search" style="width:180px;">
          <button class="btn btn-outline-success" type="submit" style="width:20px">Search</button>
        </form>
      </div><br>
      <div class="localities">
        <div>
        <h6>Top Localities</h6>
      </div>
        <div class="scroll">
        <table class="table">
          <tbody>
            <tr>
              <td> <input type="checkbox" name="" value="">&nbsp lalpur</td>
            </tr>
            <tr>
              <td> <input type="checkbox" name="" value="">&nbsp kokar</td>
            </tr>
            <tr>
              <td> <input type="checkbox" name="" value="">&nbsp booty more</td>
            </tr>
            <tr>
              <td> <input type="checkbox" name="" value="">&nbsp hinoo</td>
            </tr>
            <tr>
              <td> <input type="checkbox" name="" value="">&nbsp hinoo</td>
            </tr>
            <tr>
              <td> <input type="checkbox" name="" value="">&nbsp hinoo</td>
            </tr>
          </tbody>
        </table>
      </div><!-- scroll-->
      </div>
    </div><!-- search -->


    <div class="builder">
      <div>
      <h4>Builders</h4>
      <form class="form-inline">
        <input class="form-control " type="search" placeholder="Search" aria-label="Search" style="width:180px;">
        <button class="btn btn-outline-success" type="submit" style="width:20px">Search</button>
      </form>
    </div><br>
    <div class="localities">
      <div>
      <h6>Top Builders</h6>
    </div>
      <div class="scroll">
      <table class="table">
        <tbody>
          <tr>
            <td> <input type="checkbox" name="" value="">&nbsp abc</td>
          </tr>
          <tr>
            <td> <input type="checkbox" name="" value="">&nbsp xyz</td>
          </tr>
          <tr>
            <td> <input type="checkbox" name="" value="">&nbsp pqr</td>
          </tr>
          <tr>
            <td> <input type="checkbox" name="" value="">&nbsp mno</td>
          </tr>
        </tbody>
      </table>
    </div><!-- scroll-->
    </div>
  </div><!-- Builder -->

    </div>
    <!-- /sidebar -->

    <aside class="col-lg-8 search-result">
      <!-- path -->
      <div class="path">
        <span>home >properties in Ranchi > All Residential</span>
      </div>
      <div class="search-result">
        <span>{{$products->count()}} properties | All Residential for buy in '{{ request()->input('query')}}'</span>
      </div>


      @foreach($products as $product)
      <a href="{{url('search/showinfo/'.$product->id)}}">

      <div class="card" style="width: 100%;">
        <div class="card-body">
          <div class="content">
            <div class=" image" >
              <img src="storage/upload/{{$product->image}}" alt="">
            </div><!-- image -->
            <div class=" info">
              <table class="table">
                <tbody>
                  <tr >
                    <td colspan="4">2 BHK Apartments in {{$product->location}}</td>

                  </tr>
                  <tr>
                    <td colspan="4">{{$product->company}}</td>
                  </tr>
                  <tr>
                    <td><i class="fas fa-rupee-sign"></i> <b><span>{{$product->price}} </span></b>  </td>
                    <td>1175 - 2575 Sq.Ft.</td>
                    <td>{{$product->flat}}</td>
                    <td>Ready to mave</td>
                  </tr>
                  <tr>
                    <td ><a href="#" class="btn btn-primary ml-auto">Contact Bulider</a></td>
                    <td><a href="#" class="btn btn-outline-danger" style="float:right">Enquiry Now</a></td>
                    <td colspan="2"> <span>Owner </span>{{$product->name}} </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div><!-- content -->

          <div class="card-footer ">
            <span>Posted : </span><span>{{$product->date}}</span>
          </div><!-- card-footer -->

        </div><!-- card-body -->
      </div><!-- card -->
    </a>

      @endforeach

      {{ $products->appends(Request::except('page'))->links() }}


    </aside>

  </div><!-- /row -->
</div><!--/ container -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"> <span style="color:#1455f2;">feed</span><span style="color:#7d7f81;">back</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <fieldset class="form-group">
            <label >Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name">
          </fieldset>
          <fieldset class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </fieldset>

          <fieldset class="form-group">
            <label for="exampleTextarea">Comment</label>
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
          </fieldset>

        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>








    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
  </body>
</html>
