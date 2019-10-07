<table class="table">
    <thead class="thead-light">
        <tr>
            <th>IMAGE</th>
            <th>NAME</th>
            <th>RATE</th>
            <th>##</th>
        </tr>                        
    </thead>
    <tbody>
    @forelse($ServiceTable as $service1)
        @foreach($Profiles as $Profile)
            @if($service1['userid'] == $Profile['id'])
                <tr>
                    <input type="hidden" name="id" value="{{ $Profile['id'] }}" />
                    <input type="hidden" name="serviceid" value="{{ $service1['userid'] }}" />
                    <td>
                        <img src="{{ asset('uploads/employee/' . $Profile['image1']) }}" alt="Image" height="30px" width="30px">
                    </td>
                    <td>{{ $Profile['fname'] . " " . $Profile['lname'] }}</td>
                    <td>{{ $service1['rate_price'] }}</td>
                    <td>
                        <button type="submit" class="btn btn-primary" data-toggle="modal"> 
                            HIRE
                        </button> 
                    </td>
                </tr>  
            @endif
        @endforeach
    @empty

    @endforelse
    </tbody>
</table>










