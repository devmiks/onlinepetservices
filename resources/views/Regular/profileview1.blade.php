<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    <img src="{{ asset('uploads/employee/' . Auth::user()->image1) }}" alt="Image" height="110px" width="110px">
                </div>
                <div class="p-2 bd-highlight">
                    <label class="d-block p-2">
                        <h4>NAME: {{ Auth::user()->fname . " " . Auth::user()->mname . " " . Auth::user()->lname }} </h4>
                    </label>
                    <label class="d-block p-2">
                        <h4>
                            USER: @if(Auth::user()->user_type == 0)
                                    REGULAR
                                  @else
                                    PROFESSIONAL
                                  @endif
                        </h4>
                    </label>
                </div>
            </div>
            <a href="{{ route('admin') }}" class="btn btn-primary" data-toggle="modal" data-target="#viewprofileformServices-{{ Auth::user()->id }}"><i class="far fa-user"></i>VIEW FULL PROFILE</a>             
            <a href="{{ route('admin') }}" class="btn btn-primary" data-toggle="modal" data-target="#editformProfile-{{ Auth::user()->id }}">EDIT PROFILE</a>             
        </div> <!-- End Card Body -->
    </div> <!-- End Card -->
</div> <!-- End Col-md-6 -->

@include('Professional.modal.viewfullprofile-modal')
@include('Professional.modal.editprofile-modal')