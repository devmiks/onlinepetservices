<!-- MODAL FORM -->
<div class="modal fade" id="newserviceform" tabindex="-1" role="dialog" aria-labelledby="newserviceformLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newserviceformLabel">REGISTER NEW SERVICE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form method="POST" action="{{ route('createnewservice') }}" >
        @csrf
        
        <input type="hidden" name="id" value="{{ Auth::user()->id }}" />
        <div class="form-group row">
            <label for="frmServiceName" class="col-md-4 col-form-label text-md-right">{{ __('SERVICE NAME') }}</label>

            <div class="col-md-6">
                <input id="frmServiceName" type="text" class="form-control @error('frmServiceName') is-invalid @enderror" name="frmServiceName" required autocomplete="frmServiceName" autofocus>

                @error('frmServiceName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br /><br />
            <label for="frmServiceRate" class="col-md-4 col-form-label text-md-right">{{ __('RATE / PRICE') }}</label>

            <div class="col-md-6">
                <input id="frmServiceRate" type="text" class="form-control @error('frmServiceRate') is-invalid @enderror" name="frmServiceRate" required autocomplete="frmServiceRate" autofocus>

                @error('frmServiceRate')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br /><br />
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('SAVE') }}
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
            </div>
        </div>
    </form>

      </div> <!-- End of modal-body -->
    </div> <!-- End of modal-content -->
  </div>
</div>