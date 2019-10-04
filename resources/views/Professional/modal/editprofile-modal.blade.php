<!-- MODAL FORM -->
<div class="modal fade" id="editformProfile-{{ Auth::user()->id }}" tabindex="-1" role="dialog" aria-labelledby="editformProfile-{{ Auth::user()->id }}Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editformProfile-{{ Auth::user()->id }}Label">EDIT PROFESSIONAL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form method="POST" action="{{ route('update-profile') }}" enctype="multipart/form-data">
        @csrf        
        
        <input type="hidden" name="_method" value="put">
        <input type="hidden" name="id" value="{{ Auth::user()->id }}" />
        <div class="form-group row">
            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

            <div class="col-md-6">
                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ Auth::user()->fname }}" required autocomplete="fname" autofocus>

                @error('fname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br /><br />
            <label for="mname" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

            <div class="col-md-6">
                <input id="mname" type="text" class="form-control @error('mname') is-invalid @enderror" name="mname" value="{{ Auth::user()->mname }}" required autocomplete="mname" autofocus>

                @error('mname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br /><br />
            <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

            <div class="col-md-6">
                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ Auth::user()->lname }}" required autocomplete="lname" autofocus>

                @error('lname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="homeaddr" class="col-md-4 col-form-label text-md-right">{{ __('Home Address') }}</label>

            <div class="col-md-6">
                <input id="homeaddr" type="homeaddr" class="form-control @error('homeaddr') is-invalid @enderror" name="homeaddr" value="{{ Auth::user()->homeaddress }}" required autocomplete="homeaddr">

                @error('homeaddr')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="mobilenum" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

            <div class="col-md-6">
                <input id="mobilenum" type="mobilenum" class="form-control @error('mobilenum') is-invalid @enderror" name="mobilenum" value="{{ Auth::user()->mobilenum }}" required autocomplete="mobilenum">

                @error('mobilenum')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="Account" class="col-md-4 col-form-label text-md-right">{{ __('Account Type') }}</label>

            <div class="col-md-6">
                @if(Auth::user()->user_type == 0)
                    <h4>Regular</h4>    
                    <input type="hidden" name="typeAcc" value="0">                        
                @else                                    
                    <h4>Professional</h4>
                    <input type="hidden" name="typeAcc" value="1">
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="img1" class="col-md-4 col-form-label text-md-right">{{ __('Add Image') }}</label>

            <div class="col-md-6">
                <img src="{{ asset('uploads/employee/' . Auth::user()->image1) }}" alt="Image" height="50px" width="50px">
                <p>{{ Auth::user()->image1 }}</p>
                <input class="file-input" type="file" ref="file" name="img1"> 
                <input type="hidden" name="oldpic" value="{{ Auth::user()->image1 }}">               
                <!-- Check if Image is Import -->

            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to edit this profile?')">
                    {{ __('Register') }}
                </button>
                <button type="button" class="btn btn btn-danger" data-dismiss="modal">CANCEL</button>
            </div>
        </div>
    </form>

      </div> <!-- End of modal-body -->
    </div> <!-- End of modal-content -->
  </div>
</div>