@extends('AdminPanel.adminpanel')
@section('headSection')


@endsection

@section('content')

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add New Client</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="{{route('user.store')}}" method="post">
            {{csrf_field()}}
            <div class="card-body">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter ...">
              </div>
              <div class="form-group">
                <label >Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
              </div>
          <!--     <div class="form-group">
                <label>Phone Number</label>
                <input type="tel" class="form-control" name="phone" placeholder="Enter ...">
              </div>
             <div class="form-group">
                <label>Gender</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="Male">
                    <label class="form-check-label">Male</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="Female">
                    <label class="form-check-label">Female</label>
                  </div>
              </div> -->

              <!-- phone mask -->
            <!--   <div class="form-group">
                 <label>Phone</label>

                 <div class="input-group">
                   <div class="input-group-prepend">
                     <span class="input-group-text"><i class="fa fa-phone"></i></span>
                   </div>
                   <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                 </div>

               </div> -->
               <!-- /.form group -->

              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>

              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Password">
              </div>

              <div class="form-group">
                <label>Assign Role</label>
              </div>

              <div class="form-group">
                <div class="row">
                  @foreach ($roles as $role)
                  <div class="col-4">
                    <div class="checkbox">
                      <input type="checkbox" name="role[]" value="{{$role->id}}">{{$role->name}}
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div><!-- /card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('footerSection')
<script src="{{ asset('adminlte/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{ asset('adminlte/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>

@endsection
