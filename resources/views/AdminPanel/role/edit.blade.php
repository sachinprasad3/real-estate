@extends('AdminPanel.adminpanel')
@section('headSection')
<!-- DataTables -->

  <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/select2.min.css') }}">

@endsection
@section('content')

<div class="col-sm-6">
<div class="card card-warning">
  <div class="card-header">
    <h3 class="card-title">Edit Role</h3>
  </div>
  <!-- /.card-header -->
  @if (count($errors)>0)
    @foreach ($errors->all() as $error)
      <p class="alert alert-danger">{{$error}}</p>
    @endforeach
  @endif

  <div class="card-body">
    <form role="form"  action="{{route('role.update',$role->id)}}" method="post">
      {{csrf_field()}}
      {{method_field('PATCH')}}
      <!-- text input -->
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter ..." value="{{$role->name}}">
      </div>


            <div class="container">
              <div class="row">

                <div class="col-md-4">
                  <label>Post Permission</label>
                  @foreach ($permissions as $permission)
                    @if($permission->forname == 'post')
                    <div class="checkbox">
                      <label> <input type="checkbox" name="permission[]" value="{{ $permission->id }}"

                        @foreach ($role->permissions as $role_permit)
                          @if ($role_permit->id == $permission->id)
                            checked
                          @endif

                        @endforeach

                        >{{$permission->name }}</label>
                    </div>
                    @endif
                  @endforeach
                </div>

                <div class="col-md-4">
                  <label>User Permission</label>
                  @foreach ($permissions as $permission)
                    @if($permission->forname == 'user')
                    <div class="checkbox">
                      <label> <input type="checkbox" name="permission[]" value="{{ $permission->id }}"

                        @foreach ($role->permissions as $role_permit)
                          @if ($role_permit->id == $permission->id)
                            checked
                          @endif

                        @endforeach

                        >{{$permission->name }}</label>
                    </div>
                    @endif
                  @endforeach
                </div>

                <div class="col-md-4">
                  <label>Others Permission</label>
                  @foreach ($permissions as $permission)
                    @if($permission->forname == 'other')
                    <div class="checkbox">
                      <label> <input type="checkbox" name="permission[]" value="{{ $permission->id }}"

                        @foreach ($role->permissions as $role_permit)
                          @if ($role_permit->id == $permission->id)
                            checked
                          @endif

                        @endforeach

                        >{{$permission->name }}</label>
                    </div>
                    @endif
                  @endforeach
                </div>


              </div>
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
