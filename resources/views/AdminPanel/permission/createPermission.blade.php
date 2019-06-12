@extends('AdminPanel.adminpanel')
@section('headSection')
<!-- DataTables -->

  <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/select2.min.css') }}">

@endsection
@section('content')

<div class="col-sm-6">
<div class="card card-warning">
  <div class="card-header">
    <h3 class="card-title">Create Permission</h3>
  </div>
  <!-- /.card-header -->
  @if (count($errors)>0)
    @foreach ($errors->all() as $error)
      <p class="alert alert-danger">{{$error}}</p>
    @endforeach
  @endif

  <div class="card-body">
    <form role="form"  action="{{route('permission.store')}}" method="post">
      {{csrf_field()}}
      <!-- text input -->
      <div class="form-group">
        <label>permission</label>
        <input type="text" class="form-control" name="name" placeholder="Enter ...">
      </div>

      <div class="form-group">
        <label for="for">Permission For</label>
        <select class="form-control" name="for" id="for">
          <option selected disabled>Select Permission for</option>
          <option value="user">User</option>
          <option value="post">Post</option>
          <option value="accountent">Accountent</option>
          <option value="others">Others</option>
        </select>
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



@endsection
