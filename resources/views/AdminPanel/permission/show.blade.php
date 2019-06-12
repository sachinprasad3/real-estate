@extends('AdminPanel.adminpanel')
@section('headSection')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Permissions</h3>
    <button class="btn btn-success ml-5" type="button" name="button"> <a  href="{{ route('permission.create')}}">Create</a> </button>

  </div>
  <div class="card-header">
    @include('layouts.message')
  </div>
  <!-- /.card-header -->



  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>S.No</th>
        <th>Permissions Name</th>
        <th>Permission For</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
      </thead>
      <tbody>

        @foreach ($permissions as $permission)

        <tr>
          <td>{{ $loop->index +1 }}</td>
          <td>{{ $permission->name }}</td>
          <td>{{ $permission->forname }}</td>


          <td> <a href="{{ route('permission.edit',$permission->id) }} "><i class="fas fa-edit"></i></a> </td>
          <td>
            <form id="delete-form-{{ $permission->id }}" action="{{ route('permission.destroy',$permission->id) }}" method="post" style="display:none">
              {{csrf_field()}}
              {{method_field('DELETE')}}

            </form>

             <a href="" onclick="if(confirm('Are you sure, You want to delete this ?'))
              {
                event.preventDefault();document.getElementById('delete-form-{{ $permission->id }}').submit();
              }
              else{
                event.preventDefault();
              }
              "> <i class="fas fa-trash"></i></a></td>
        </tr>

        @endforeach


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
