@extends('user.adminpanel')
@section('headSection')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap4.min.css') }}">
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Table With Full Features</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>S.No</th>
        <th>Full Name</th>
        <th>Gender</th>
        <th>Phone Number</th>
        <th>Address</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>1</td>
        <td>Sachin Prasad</td>
        <td>Male</td>
        <td>998979695</td>
        <td>Ramgarh</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Sonia Kashyap</td>
        <td>Female</td>
        <td>89878685</td>
        <td>Balgalore</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Komal</td>
        <td>Female</td>
        <td>777978575</td>
        <td>Hyderabad</td>
      </tr>

      </tfoot>
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
