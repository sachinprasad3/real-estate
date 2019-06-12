@extends('user.adminpanel')
@section('headSection')
<!-- DataTables -->

  <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/select2.min.css') }}">

@endsection
@section('content')

<div class="col-sm-6">
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
    <form role="form"  action="{{route('post.update',$post->id) }}" method="post">
      {{csrf_field()}}
      {{method_field('PATCH')}}
      <!-- text input -->
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter ..." value="{{$post->name}}">
      </div>
      <div class="form-group">
        <label>Company name</label>
        <input type="text" class="form-control" name="company" placeholder="Enter ..." value="{{$post->company}}">
      </div>
      <div class="form-group">
        <label>Location</label>
        <input type="text" class="form-control" name="location" placeholder="Enter ..." value="{{$post->location}}">
      </div>

      <div class="form-group">
        <label>Flat Type</label>
        <div class="form-check">
            <div class="row">

              <div class="col-4">
                <input class="form-check-input" type="checkbox" name="flat[]" value="1BHK"  {{in_array("1BHK",$flat)?"checked":""}}>
                <label class="form-check-label">1BHK</label>
              </div>
              <div class="col-4">
                <input class="form-check-input" type="checkbox" name="flat[]" value="2BHK"  {{in_array("2BHK",$flat)?"checked":""}}>
               <label class="form-check-label">2BHK</label>
              </div>
              <div class="col-4">
                <input class="form-check-input" type="checkbox" name="flat[]" value="3BHK" {{in_array("3BHK",$flat)?"checked":""}}>
                <label class="form-check-label">3BHK</label>
              </div>
              <div class="col-4">
                <input class="form-check-input" type="checkbox" name="flat[]" value="5BHK"  {{in_array("5BHK",$flat)?"checked":""}}>
                <label class="form-check-label">5BHK</label>
              </div>
              <div class="col-4">
                <input class="form-check-input" type="checkbox" name="flat[]" value="7BHK" {{in_array("7BHK",$flat)?"checked":""}}>
                <label class="form-check-label">7BHK</label>
              </div>
            </div>
          </div>
      </div>

      <div class="form-group">
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label>Date masks:</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                  </div>
                  <input type="text" class="form-control" name="date" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask value="{{$post->date}}">
                </div>
                <!-- /.input group -->
              </div>
            </div>

            <div class="col-3">
              <label>price</label>
              <input type="text" class="form-control" name="price" placeholder="Price in lakh" value="{{$post->price}}">
            </div>

        </div>
      </div>

      <!-- textarea -->
      <div class="form-group">
        <label>Textarea</label>
        <textarea class="form-control" rows="3" placeholder="Enter ..." name="body"></textarea>
      </div>

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
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
