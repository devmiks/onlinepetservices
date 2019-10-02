<div class="col-md-6">
    <div class="card">
        <div class="card-header ">
            <span class="d-flex align-items-start">YOUR SERVICES</span>
        </div> 

            <form method="post" action="" >
                <select class="form-control" id="selectUser" name="user_selected" required focus>
                    <option value="" disabled selected>Please Select Service</option>        
                    @foreach($ListServices as $lst)
                    <option value="{{$lst->services_name}}">{{ $lst->services_name }}</option>
                    @endforeach
                </select>
                <br />
                <button type="submit" class="btn btn-danger" data-toggle="modal" onclick="return confirm('Are you sure you want to add this services?')">
                    ADD NEW SERVICE
                </button>                   
            </form>
                <br />
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newserviceform">
                    CREATE NEW SERVICE
                </button>
                @include('Professional.modal.createnewservices')        
        <div class="card-body">
            <div class="d-flex flex-row bd-highlight mb-3">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Service Name</th>
                        <th scope="col">Rate / Price</th>
                        <th scope="col" colspan="2">Action</th>            
                        </tr>
                    </thead>
                    <tbody>                    
                    @forelse($Service as $i => $Services)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $Services->services_name }}</td>
                            <td>{{ $Services->rate_price }}</td>
                            <td colspan="2" class="d-inline-flex">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editformServices-{{ $Services->id }}" onclick="return confirm('Are you sure you want to edit this profile?')">
                                    EDIT
                                </button>
                                <br />                                
                                <button type="button" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this profile?')">
                                    Delete
                                </button>                                                              
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" style="align:center;"><h4>NO SERVICES ON LIST</h4></td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div> <!-- End Card Body -->
    </div> <!-- End Card -->
</div> <!-- end of col-md-6 -->
