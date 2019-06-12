@extends('user.adminpanel')
@section('headSection')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap4.min.css') }}">
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">See All Post Here</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>S.No</th>
        <th>Full Name</th>
        <th>Company</th>
        <th>Address</th>
        <th>Phone No.</th>
        <th>Gender</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>1</td>
        <td>Sachin Prasad</td>
        <td>Silent Group</td>
        <td>Ranchi</td>
        <td>998989796</td>
        <td>Male</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Sonia Kashyap</td>
        <td>Silent Group</td>
        <td>Bokaro</td>
        <td>7879795764</td>
        <td>Female</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Komal</td>
        <td>Komal Group</td>
        <td>jamshedpur</td>
        <td>909859756</td>
        <td>Female</td>
        <td></td>
        <td></td>
      </tr>

    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

@endsection

@section('footerSection')
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

@endsection
