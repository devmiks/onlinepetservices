<div class="row justify-content-center">
    <div class="col-md-12 d-flex align-content-start flex-wrap">
    @if(Auth::user()->user_type > 0)
        @include('Professional.profileview')    
        @include('Professional.servicesview')
        @include('Professional.clientview') 
    @else        
        @include('Regular.profileview1')
        @include('Regular.appointmentSetter')
    @endif
    </div> <!-- col-md-12 d-block -->    
</div> <!-- End of row justify-content-center -->