<!-- MODAL FORM -->
<div class="modal fade bd-profile-modal-sm" id="viewprofileformServices-{{ Auth::user()->id }}" tabindex="-1" role="dialog" aria-labelledby="viewprofileformServices-{{ Auth::user()->id }}Label" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewprofileformServices-{{ Auth::user()->id }}Label">VIEW FULL PROFILE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group row">
            <div class="card text-center">

              <div class="card-header">
                <img src="{{ asset('uploads/employee/' . Auth::user()->image1) }}" alt="Image" height="140px" width="140px" class="rounded-circle">
              </div>

              <div class="card-body d-block p-2">
                  <label class="text-uppercase ">
                    FULL NAME: <span class="text-muted font-weight-bold">[ {{ Auth::user()->fname . " " . Auth::user()->mname . " " . Auth::user()->lname }} ]</span>
                  </label>
                  <label>
                    @if(Auth::user()->user_type > 0)
                      ACCOUNT TYPE: <span class="text-muted font-weight-bold">[ Professional ]</span>
                    @else
                      ACCOUNT TYPE: <span class="text-muted font-weight-bold">[ Regular ]</span>
                    @endif 
                  </label>
                  <label>
                    ADDRESS: <span class="text-muted font-weight-bold">[ {{ Auth::user()->homeaddress }} ]</span>
                  </label>
                  <label>
                    MOBILE NUMBER: <span class="text-muted font-weight-bold">[ {{ Auth::user()->mobilenum }} ]</span>
                  </label>                  
              </div>              
              
              <button type="button" class="btn btn-secondary active" data-dismiss="modal">CLOSE</button>              
            </div>
          </div>      
      </div> <!-- End of modal-body -->
    </div> <!-- End of modal-content -->
  </div>
</div>