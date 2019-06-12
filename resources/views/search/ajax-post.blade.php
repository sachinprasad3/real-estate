<aside class="search-result">
  <!-- path -->
  <div class="path">
    <span>home >properties in Ranchi > All Residential</span>
  </div>
  <div class="search-result">
    <span>{{$products->count()}} properties | All Residential for buy in '{{ request()->input('query')}}'</span>
  </div>


  @foreach($products as $product)
  <div class="update">


  <a href="{{url('search/showinfo/'.$product->id)}}" style="text-decoration:none;">

  <div class="card" style="width: 100%;">
    <div class="card-header">
      {{$product->flat}}BHK Apartment{{$product->type}} in {{$product->location}}
      <span style="float:right"><b><i class="fas fa-rupee-sign"></i>&nbsp{{$product->price}}</b></span>
    </div>
    <div class="card-body">
      <div class="content">
        <div class=" image" >
          <!-- <img src="storage/postImage/{{$product->img}}" alt=""> -->
          <img src="storage/postImage/{{$product->img}}" alt="No image">
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
        <span>Posted : </span><span>{{$product->date}}</span>
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

  {{ $products->appends(Request::except('page'))->links() }}


</aside>
