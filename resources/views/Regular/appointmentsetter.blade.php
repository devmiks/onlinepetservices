<div class="col-md-6">
    <div class="card">

        <div class="card-header ">
            <span class="d-flex align-items-start">BROWSE FOR SERVICES</span>
        </div> 
        <div class="card-body">
            <div class="d-inline-flex flex-wrap ">  
            <form method="GET" action="{{ route('searchprofilepage') }}">
                <select name="selectUser" class="form-control text-md-right" required focus>
                        <option value="" disabled selected>Please Select Service</option>        
                    @foreach($ListServices as $lst) 
                        <option value="{{$lst->ServiceName}}">{{ $lst->ServiceName }}</option> 
                    @endforeach 
                </select> 
                <br />
                <button type="submit" class="btn btn-primary">SEARCH</button>
            </form>             
            </div>
        </div> <!-- End Card Body -->
    </div> <!-- End Card -->
</div> <!-- end of col-md-6 -->