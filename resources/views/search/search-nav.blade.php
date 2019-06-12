
<div class="search-head ">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <a class="brand" href="{{ url('/') }}" style="text-decoration:none;">Aashyana</a>
      </div>
      <div class="col-md-9">
        <form class="form-inline justify-content-center my-2 my-lg-0 " role="search" action="{{route('search')}}" method="GET" style="text-align: center;">
          <input class="form-control " type="text" placeholder="Search city name to find your sapano ka Aashyana" aria-label="Search" name="query" id="query" value="{{ request()->input('query') }}">
          <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
      <div class="col-md-1">
        <a class="nav-link" href="#"><i class="fas fa-bars" onclick="openNav()"></i> </a>
        @include('layouts.sidebar')

      </div>
    </div><!-- /row -->
  </div>
</div><!-- /search-head -->
<div class="message">
  <div class="container">
    <div class="row">
      <div class="col-md-3"> <span>
        <i class="fas fa-home"></i>
        {{$products->count()}} properties </span>
      </div><!-- /col-md-3-->

      <!-- <div class="col-md-8">
        <div class="form-group" >
           <select class="" id="price-range">
             <option val='' selected>Relevence</option>
             <option val=''>Newest First</option>
             <option val=''>Price- Low to High</option>
             <option val=''>Price- High to Low</option>
           </select>
         </div> <!-- /form group-->

          <div class="col-md-8">
            <!--Blue select-->
              <!-- <select class="mdb-select md-form colorful-select dropdown-primary" id="select" class="selectPrice">
                <option value="1" class="" >Relevence</option>
                <option value="2" class="" >Newest First</option>
                <option value="3" class="" >Price - Low to High</option>
                <option value="4" class="" >Price - High to Low</option>

              </select> -->



              <!--/Blue select-->
          </div>
          </div>
      </div><!-- /col-sm-6 -->

    </div><!-- /row -->
  </div><!-- /container -->

</div><!-- /message -->


<script type="text/javascript">
$('#select').on('click', function () {
  //alert('yes');
   //var price = $("select").val();
   //alert(price);
   // $('#select').each(function(){
   //  if ($(this).is(":checked")) {
   //    price.push($(this).val());
   //   }
   // });

   var optionSelected = $(this).find("option:selected");
  var priceRange = optionSelected.val();
   //priceRange = price.toString();
   //alert(priceRange);
  console.log(priceRange);
  //
 //  $.ajax({
 //    type:'get',
 //    dataType:'html',
 //    url:'',
 //    //data:priceRange,
 //    data:{'sort': priceRange },
 //    success:function(response){
 //    console.log(response);
 //    $('.search-result').html(response);
 //    //  $('.ajax-search').html(response);
 //
 //    }
 // });

});
</script>
