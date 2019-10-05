<div class="col-md-6">
    <div class="card">

        <div class="card-header ">
            <span class="d-flex align-items-start">BROWSE FOR SERVICES</span>
        </div> 
        <div class="card-body">
            <div class="d-inline-flex flex-wrap ">
                
            <form method="POST" action="#" >
                @csrf
                
                <select name="selectUser" class="form-control text-md-right" required focus>
                        <option value="none" disabled selected>Please Select Service</option>        
                    @foreach($ListServices as $lst) 
                        <option value="{{$lst->ServiceName}}">{{ $lst->ServiceName }}</option> 
                    @endforeach 
                </select> 
                <button type="submit" class="btn btn-danger" data-toggle="modal"> 
                    SEARCH
                </button> 
            </form>
            </div><!-- end of Div -->

        </div> <!-- End Card Body -->




        <div class="card-header ">       
        @if(isset($ServiceTable))
            <h4 class="d-flex align-items-start">SEARCH RESULTS  [<span class="text-uppercase text-danger"> {{ $ServiceTable->services_name }} </span>]</h4>              
        @else
            <h4 class="d-flex align-items-start">SEARCH RESULTS </h4>     
        @endif   
        </div> 
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
    </div> <!-- End Card -->
</div> <!-- end of col-md-6 -->
