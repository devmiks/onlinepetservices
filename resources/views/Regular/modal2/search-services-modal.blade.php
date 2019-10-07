<!-- MODAL FORM -->
<div class="modal fade" id="searchresult" tabindex="-1" role="dialog" aria-labelledby="searchresultLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="searchresultLabel">SEARCH RESULT {{ Input::get('selectUser') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="card-body">
          <div class="d-flex flex-row bd-highlight mb-3">
              @if(isset($ServiceTable))
                  @if(!empty($ServiceTable))
                    @include('Regular.homesearchview')
                  @else
                    NO SEARCH RESULT                        
                  @endif
              @else
                  NO SEARCH RESULT
              @endif
          </div>
        </div> <!-- End Card Body -->
      
      </div> <!-- End of modal-body -->
    </div> <!-- End of modal-content -->
  </div>
</div>