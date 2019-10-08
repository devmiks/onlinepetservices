@extends('layouts.app')

@section('content')
@if(Auth::user()->user_type > 0)

    <h4> 
        @php 
            abort(403, 'Unauthorized action.')
        @endphp
    </h4>

@else
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
        <div class="card">
            <div class="card-header">SEARCH RESULT <span class="text-uppercase text-danger">{{ $fieldSearch }}</span></div>
            <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scopre="col">IMAGE</th>
                        <th scopre="col">NAME</th>
                        <th scopre="col">HOME ADDRESS</th>
                        <th scopre="col">EMAIL ADDRESS</th>
                        <th scopre="col">MOBILE</th>
                        <th scopre="col">RATE</th>
                        <th scopre="col">ACTION</th>
                    </tr>
                </thead>    
                <tbody>        
                @if(!empty($serviceinfo))                
                    @foreach($searchprofile as $profile)
                    <tr>
                        <td><img src="{{ asset('uploads/employee/' . $profile->image1) }}" alt="Image" height="80px" width="80px"></td>
                        <td>{{ $profile->fname . " " . $profile->mname . " " . $profile->lname }}</td>
                        <td>{{ $profile->homeaddress }}</td>
                        <td>{{ $profile->email }}</td>
                        <td>{{ $profile->mobilenum }}</td>
                        <td>RATE</td>                    
                        <td>
                            <a href="{{ route('searchprofilepage') }}" class="btn btn-primary">HIRE</a>
                        </td>
                    </tr>
                    @endforeach
                @else
                <tr>
                    <h4>NO SEARCH RESULT</h4>
                </tr>
                @endif      
                </tbody>
            </table>      
            </div>
            <a href="{{ route('home1') }}" class="btn btn-primary">BACK TO PROFILE</a>
        </div>
    </div>
</div>
@endif
@endsection