@extends('AdminPanel.adminpanel')
@section('headSection')
<!-- DataTables -->

  <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/select2.min.css') }}">

@endsection
@section('content')

<div class="col-sm-12">
<div class="card card-warning">
  <div class="card-header">
    <h3 class="card-title">Add New Post</h3>
  </div>
  <!-- /.card-header -->
  @if (count($errors)>0)
    @foreach ($errors->all() as $error)
      <p class="alert alert-danger">{{$error}}</p>
    @endforeach
  @endif

  <div class="card-body">
    <form role="form"  action="{{route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      {{method_field('PATCH')}}
      <!-- text input -->

      <h2>Basic Details</h2>
      <label for="">You Are</label>
      <div class="row">
        <div class="col-2">
          <input type="radio" name="who" value="Owner" {{ $post->who == "Owner" ? 'checked' : '' }} >&nbsp Owner
        </div>
        <div class="col-2">
          <input type="radio" name="who" value="Dealer" {{ $post->who == "Dealer" ? 'checked' : '' }} >&nbsp Dealer
        </div>
        <div class="col-2">
          <input type="radio" name="who" value="Builder" {{ $post->who == "Builder" ? 'checked' : '' }} >&nbsp Builder
        </div>
      </div>
      <br>

      <div class="row">
         <div class="form-group col-4">
          <label>Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter ..." value="{{$post->name}}">
        </div>

      <div class="form-group col-4">
        <label>List Property for</label>
        <select class="form-control" name="category">
          <option selected disabled value="">Select Category</option>
          <option value="sale" {{ $post->category == "sale" ? 'selected' : '' }} >Sale</option>
          <option value="rent" {{ $post->category == "rent" ? 'selected' : '' }} >Rent</option>
        </select>
      </div>
      <div class="form-group col-4">
        <label>Property Type</label>
        <select class="form-control" name="type">
          <option selected disabled value="">Select Type</option>
          <option value="house" {{ $post->type == "house" ? 'selected' : '' }} >House</option>
          <option value="apartment" {{ $post->type == "apartment" ? 'selected' : '' }} >Apartment</option>
          <option value="plot" {{ $post->type == "plot" ? 'selected' : '' }} >Plot</option>
        </select>
      </div>

    </div><!-- /row -->

    <h2>Location</h2>
    <div class="row">

      <div class="form-group col-4">
        <label>Company name</label>
        <input type="text" class="form-control" name="company" placeholder="Enter ..." value="{{$post->company}}">
      </div>
      <div class="form-group col-4">
        <label>City</label>
        <input type="text" class="form-control" name="city" placeholder="Enter ..." value="{{$post->city}}">
      </div>
      <div class="form-group col-4">
        <label>Locality</label>
        <input type="text" class="form-control" name="locality" placeholder="Enter ..." value="{{$post->locality}}">
      </div>



    </div><!--/row -->
    <div class="form-group col-4">
      <label>House no. / Street Name</label>
      <input type="text" class="form-control" name="houseno" placeholder="Enter ..." value="{{$post->houseno}}">
    </div>

    <h2>Property Details</h2>



    <div class="form-group col-6">
      <label>Flat Type</label>
      <div class="form-check">
          <div class="row">

            <div class="col-4">
              <input class="form-check-input" type="checkbox" name="flat[]" value="1" >
              <label class="form-check-label">1BHK</label>
            </div>
            <div class="col-4">
              <input class="form-check-input" type="checkbox" name="flat[]" value="2" >
              <label class="form-check-label">2BHK</label>
            </div>
            <div class="col-4">
              <input class="form-check-input" type="checkbox" name="flat[]" value="3">
              <label class="form-check-label">3BHK</label>
            </div>
            <div class="col-4">
              <input class="form-check-input" type="checkbox" name="flat[]" value="5">
              <label class="form-check-label">5BHK</label>
            </div>
            <div class="col-4">
              <input class="form-check-input" type="checkbox" name="flat[]" value="7">
              <label class="form-check-label">7BHK</label>
            </div>
            <div class="col-4">
              <input class="form-check-input" type="checkbox" name="flat[]" value="8">
              <label class="form-check-label">8BHK</label>
            </div>
            <div class="col-4">
              <input class="form-check-input" type="checkbox" name="flat[]" value="9">
              <label class="form-check-label">9BHK</label>
            </div>
            <div class="col-4">
              <input class="form-check-input" type="checkbox" name="flat[]" value="10" >
              <label class="form-check-label">9+ BHK</label>
            </div>
          </div>
        </div>
    </div>


    <div class="form-group col-6">
      <label for="">Additional Details</label>
      <table class="table">
        <tbody>
          <tr>
            <td>Bedrooms</td>
            <td>
              <select class=" col-4" name="bedroom">
                <option value="0" {{ $post->bedroom == "0" ? 'selected' : '' }} >0</option>
                <option value="1" {{ $post->bedroom == "1" ? 'selected' : '' }} >1</option>
                <option value="2" {{ $post->bedroom == "2" ? 'selected' : '' }} >2</option>
                <option value="3" {{ $post->bedroom == "3" ? 'selected' : '' }} >3</option>
                <option value="4" {{ $post->bedroom == "4" ? 'selected' : '' }} >4</option>
                <option value="5" {{ $post->bedroom == "5" ? 'selected' : '' }} >5</option>
                <option value="6" {{ $post->bedroom == "6" ? 'selected' : '' }} >6</option>
                <option value="7" {{ $post->bedroom == "7" ? 'selected' : '' }} >7</option>
                <option value="8" {{ $post->bedroom == "8" ? 'selected' : '' }} >8</option>
                <option value="9" {{ $post->bedroom == "9" ? 'selected' : '' }} >9</option>
                <option value="10" {{ $post->bedroom == "10" ? 'selected' : '' }} >10</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Bathroom</td>
            <td><select class=" col-4" name="bathroom">
              <option value="0" {{ $post->bathroom == "0" ? 'selected' : '' }} >0</option>
              <option value="1" {{ $post->bathroom == "1" ? 'selected' : '' }} >1</option>
              <option value="2" {{ $post->bathroom == "2" ? 'selected' : '' }} >2</option>
              <option value="3" {{ $post->bathroom == "3" ? 'selected' : '' }} >3</option>
              <option value="4" {{ $post->bathroom == "4" ? 'selected' : '' }} >4</option>
              <option value="5" {{ $post->bathroom == "5" ? 'selected' : '' }} >5</option>
              <option value="6" {{ $post->bathroom == "6" ? 'selected' : '' }} >6</option>
              <option value="7" {{ $post->bathroom == "7" ? 'selected' : '' }} >7</option>
              <option value="8" {{ $post->bathroom == "8" ? 'selected' : '' }} >8</option>
              <option value="9" {{ $post->bathroom == "9" ? 'selected' : '' }} >9</option>
              <option value="10" {{ $post->bathroom == "10" ? 'selected' : '' }} >10</option>
            </select></td>
          </tr>
          <tr>
            <td>Balconies</td>
            <td>
              <select class=" col-4" name="balcony">
                <option value="0" {{ $post->balcony == "0" ? 'selected' : '' }} >0</option>
                <option value="1" {{ $post->balcony == "1" ? 'selected' : '' }} >1</option>
                <option value="2" {{ $post->balcony == "2" ? 'selected' : '' }} >2</option>
                <option value="3" {{ $post->balcony == "3" ? 'selected' : '' }} >3</option>
                <option value="4" {{ $post->balcony == "4" ? 'selected' : '' }} >4</option>
                <option value="5" {{ $post->balcony == "5" ? 'selected' : '' }} >5</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Car Parking</td>
            <td>
              <input type="radio" name="parking" value="yes" {{ $post->parking == "yes" ? 'checked' : '' }} >Yes &nbsp
              <input type="radio" name="parking" value="no" {{ $post->parking == "no" ? 'checked' : '' }} >No
            </td>
          </tr>
          <tr>
            <td>Area (in Sq.Ft.)</td>
            <td><input type="text" class="form-control col-4" name="area" placeholder="" value="{{$post->area}}"> </td>
          </tr>
          <tr>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>

    <h2>Pricing</h2>

    <div class="col-3">
      <label>Price</label>
      <input type="text" class="form-control" name="price" placeholder="Price in lakh" value="{{$post->price}}">
    </div><br>

    <div class="form-group">
      <label for="exampleInputFile">Upload Property Image</label>
      <div class="input-group">
        <div class="custom-file">
          <!-- <input type="file" class="custom-file-input" id="image" name="image">
          -->
          <input type="file" name="image" id="image">
        </div>
      </div>
    </div>

    <!-- textarea -->
    <div class="form-group">
      <label>Textarea</label>
      <textarea class="form-control" rows="3" placeholder="Enter ..." name="body"></textarea>
    </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>


    </form>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->


</div>
@endsection

@section('footerSection')


<!-- Select2 -->
<script src="{{ asset('adminlte/plugins/select2/select2.full.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('adminlte/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('adminlte/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()
  })
</script>

@endsection
