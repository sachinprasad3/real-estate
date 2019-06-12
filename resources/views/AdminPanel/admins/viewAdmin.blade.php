@extends('AdminPanel.adminpanel')
@section('headSection')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

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
        <th>Phone No.</th>
        <th>Email</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
      <tr>
        <td>{{ $loop->index + 1 }}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->company}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->address}}</td>
        <td>Male</td>
        <td><a href="# "><i class="fas fa-edit"></i></a></td>
        <td>
          <form id="delete-form-{{ $user->id }}" action="{{ route('user.destroy',$user->id) }}" method="post" style="display:none">
            {{csrf_field()}}
            {{method_field('DELETE')}}

          </form>
          <a href="" onclick="if(confirm('Are you sure, You want to delete this ?'))
           {
             event.preventDefault();document.getElementById('delete-form-{{ $user->id }}').submit();
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
