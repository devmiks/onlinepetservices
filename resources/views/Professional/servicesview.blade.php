<div class="col-md-6">
    <div class="card">
        <div class="card-header ">
            <span class="d-flex align-items-start">YOUR SERVICES</span>
        </div> 

            <form method="POST" action="{{ route('addprofileservice1') }}" >
                @csrf
                
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                <select name="selectUser" class="form-control text-md-right" required focus>
                        <option value="none" disabled selected>Please Select Service</option>        
                    @foreach($ListServices as $lst)
                        <option value="{{$lst->ServiceName}}">{{ $lst->ServiceName }}</option>
                    @endforeach
                </select>
                <br />
                <div class="form-group row">
                    <label for="servicesrateprice" class="col-md-4 col-form-label text-md-right">{{ __('RATE / PRICE') }}</label>
                    
                    <div class="col-md-6">
                        <input id="servicesrateprice" name="servicesrateprice" type="number" min="0.01" step="0.01" maxlength="6" value="25.67" class="form-control @error('servicesrateprice') is-invalid @enderror" required autocomplete="servicesrateprice" autofocus>
                        @error('servicesrateprice')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br /><br />
                </div>
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
                    @forelse($Service1 as $i => $Services)
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
            {!! $Service1->links() !!}
        </div> <!-- End Card Body -->
    </div> <!-- End Card -->
</div> <!-- end of col-md-6 -->
