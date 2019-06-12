<!-- side bar -->
<div class="col-lg-3 sidebar data-spy="affix" data-offset-top="205"">
  <div class="head">
    <h4>Filter</h4>
  </div><!-- /head -->

<!--  <div class="form-group price-range">
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
<!--  </div><!-- /price range -->

  <div class="bedrooms" id="bedroom">
    <h4>Bedrooms</h4>

    <form action="#" method="get" id="filter">
    <table class="table">

      <tbody>
        <tr>
          <td> <input type="checkbox" name="bedroom[]" id="cat" class="cat" value="1">&nbsp 1BHK </td>
          <td> <input type="checkbox" name="bedroom[]" id="cat" class="cat" value="2">&nbsp 2BHK </td>

        </tr>
        <tr>
          <td> <input type="checkbox" name="bedroom[]" id="cat" class="cat" value="3">&nbsp 3BHK </td>
          <td> <input type="checkbox" name="bedroom[]" id="cat" class="cat" value="4">&nbsp 4BHK </td>

        </tr>
        <tr>
          <td> <input type="checkbox" name="bedroom[]" id="cat" class="cat" value="5">&nbsp 5BHK </td>
          <td> <input type="checkbox" name="bedroom[]" id="cat" class="cat" value="6">&nbsp 6BHK </td>

        </tr>
        <tr>
          <td> <input type="checkbox" name="bedroom[]" id="cat" class="cat" value="7">&nbsp 7BHK </td>
          <td> <input type="checkbox" name="bedroom[]" id="cat" class="cat" value="8">&nbsp 8BHK </td>

        </tr>
        <tr>
          <td> <input type="checkbox" name="bedroom[]" id="cat" class="cat" value="9">&nbsp 9BHK </td>
          <td> <input type="checkbox" name="bedroom[]" id="cat" class="cat" value="10">&nbsp 9+BHK </td>

        </tr>
      </tbody>
    </table>
  </form>

  </div><!-- /bedrooms -->

  <!-- <div class="position-in">
    <h4>Position</h4>
    <input type="checkbox" name="" value="">&nbsp read to move <br>
    <input type="checkbox" name="" value="">&nbsp under Construction
  </div><!-- /position-in --> 

  <!-- <div class="property-type">
    <h4>Property Type</h4>
    <input type="checkbox" name="" value="">&nbsp Residential Apartments
  </div><!-- /property-type -->




<!-- <div class="builder">
  <div>
  <h4>Builders</h4>
  <form class="form-inline">
    <input class="form-control " type="search" placeholder="Search" aria-label="Search" style="width:150px;">
    <button class="btn btn-outline-success" type="submit" >Search</button>
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
        <td> <input type="checkbox" name="" value="" id="one">&nbsp abc</td>
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
<!-- </div>
</div><!-- Builder -->

</div>
<!-- /sidebar -->



<script type="text/javascript">
$('.cat').on('click', function () {
  //alert('yes');
  var flat = [];
  $('.cat').each(function(){
    if ($(this).is(":checked")) {
      flat.push($(this).val());
    }
  });
  flattype = flat.toString();
  //console.log(flattype);

  $.ajax({
    type:'get',
    dataType:'html',
    url:'',
    data:'flat='+flattype,
    success:function(response){
      console.log(response);
      $('.search-result').html(response);
      //$('.ajax-search').html(response);
    }
  });
  // alert(flattype);

  // $('#cat1:checked').each(function () {
  //     marchi[$(this).attr('name')] = $(this).val();
  // });
  //
  // $.ajax({
  //     url: '/',
  //     type: 'get',
  //
  //     // This is the important part!
  //     data: {marchi: marchi}
  // });
});
</script>


<!-- <script type="text/javascript">
$('.cat').on('click', function () {
  //alert('yes');
  var flat = [];
  $('.cat').each(function(){
    if ($(this).is(":checked")) {
      flat.push($(this).val());
    }
  });
  flattype = flat.toString();
  console.log(flattype);
  // alert(flattype);

});
</script> -->
