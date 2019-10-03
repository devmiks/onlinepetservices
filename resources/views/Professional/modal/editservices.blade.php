<!-- MODAL FORM -->
<div class="modal fade" id="editformServices-{{ $Services->id }}" tabindex="-1" role="dialog" aria-labelledby="editformServices-{{ $Services->id }}Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editformServices-{{ $Services->id }}Label">EDIT SERVICE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form method="POST" action="{{ route('editservices1') }}" >
        @csrf
        
        <input type="hidden" name="_method" value="put">
        <input type="hidden" name="id" value="{{ $Services->id }}" />
        <div class="form-group row">
            <label for="inputServiceName" class="col-md-4 col-form-label text-md-right">{{ __('SERVICE NAME') }}</label>

            <div class="col-md-6">
                <input id="inputServiceName" type="text" class="form-control @error('inputServiceName') is-invalid @enderror" value="{{ $Services->services_name }}" name="inputServiceName" required autocomplete="inputServiceName" autofocus>

                @error('inputServiceName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <br /><br />
        </div>

        <div class="form-group row">
            <label for="inputServiceRate" class="col-md-4 col-form-label text-md-right">{{ __('RATE / PRICE') }}</label>

            <div class="col-md-6">
                <input id="inputServiceRate" type="text" class="form-control @error('inputServiceRate') is-invalid @enderror" value="{{ $Services->rate_price }}" name="inputServiceRate" required autocomplete="inputServiceRate" autofocus>

                @error('inputServiceRate')
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