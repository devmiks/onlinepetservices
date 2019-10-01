<!-- MODAL FORM -->
<div class="modal fade" id="editformServices-{{ Auth::user()->id }}" tabindex="-1" role="dialog" aria-labelledby="editformServices-{{ Auth::user()->id }}Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editformServices-{{ Auth::user()->id }}Label">EDIT SERVICE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group row">
          
            <label for="frmServiceName" class="col-md-4 col-form-label text-md-right">{{ __('SERVICE NAME') }}</label>

            <div class="col-md-6">
                <input id="frmServiceName" type="text" class="form-control @error('frmServiceName') is-invalid @enderror" name="frmServiceName" value="{{ Auth::user()->fname }}" required autocomplete="frmServiceName" autofocus>

                @error('frmServiceName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>              
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
              </div>
          </div>      
      </div> <!-- End of modal-body -->
    </div> <!-- End of modal-content -->
  </div>
</div>