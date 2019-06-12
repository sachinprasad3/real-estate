@extends('user.adminpanel')
@section('headSection')
<!-- DataTables -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">See All Post Here</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="image">
      <img src="" alt="" style="width:100px; height:150px;">
    </div>
    
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
