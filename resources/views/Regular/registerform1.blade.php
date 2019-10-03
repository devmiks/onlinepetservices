<div class="card-body">
    <form method="POST" action="{{ route('update-REGprofile') }}" enctype="multipart/form-data">
        @csrf
        
        <input type="hidden" name="_method" value="put">
        <input type="hidden" name="id" value="{{ Auth::user()->id }}" />
        <div class="form-group row">
            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

            <div class="col-md-6">
                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="" required autocomplete="fname" autofocus>

                @error('fname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br /><br />
            <label for="mname" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

            <div class="col-md-6">
                <input id="mname" type="text" class="form-control @error('mname') is-invalid @enderror" name="mname" value="" required autocomplete="mname" autofocus>

                @error('mname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br /><br />
            <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

            <div class="col-md-6">
                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="" required autocomplete="lname" autofocus>

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
                <input id="homeaddr" type="homeaddr" class="form-control @error('homeaddr') is-invalid @enderror" name="homeaddr" value="" required autocomplete="homeaddr">

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
                <input id="mobilenum" type="mobilenum" class="form-control @error('mobilenum') is-invalid @enderror" name="mobilenum" value="" required autocomplete="mobilenum">

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
                @if(Auth::user()->accounttype > 0)
                    <h4>Professional</h4>    
                    <input type="hidden" name="typeAcc" value="1">                        
                @else                                    
                    <h4>Regular</h4>
                    <input type="hidden" name="typeAcc" value="0">
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="img1" class="col-md-4 col-form-label text-md-right">{{ __('Add Image') }}</label>

            <div class="col-md-6">
                <input class="file-input" type="file" ref="file" name="img1" @change="addFile()">

                <!-- Check if Image is Import -->

            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
                <a href="{{ route('home') }}" class="btn btn-danger">CANCEL</a>
            </div>
        </div>
    </form>
</div>