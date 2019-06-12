<div class="feedback" >
  <a href="#" data-toggle="modal" data-target="#exampleModalCenter"> <span style="color:#1455f2;">feed</span><span style="color:#21ff00;">back</span> </a>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"> <span style="color:#1455f2;">feed</span><span style="color:#7d7f81;">back</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if(Session::has('flash_message'))
        <div class="alert alert-success">
          {{Session::get('flash_message') }}

        </div>
        @endif

        <form action="{{ route('feedback')}}" method="POST">
          {{ csrf_field() }}


          <div class="form-group">
            <label>Full Name</label>
            <input class="form-control" type="text" name="name" value="">
            @if ($errors->has('name'))
              <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
            @endif
          </div>

          <div class="form-group">
            <label>Email Address</label>
            <input class="form-control" type="email" name="email" value="">
            @if ($errors->has('email'))
              <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
            @endif
          </div>

          <div class="form-group">
            <label>Message</label>
            <textarea name="message" class="form-control" rows="6" cols="60" is-invalid style="border: 1px solid #16a085;"></textarea>
            @if ($errors->has('message'))
              <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
            @endif
          </div>

          <button type="submit" class="btn btn-primary" name="button">Submit</button>

        </form>
      </div>

    </div>
  </div>
</div>
