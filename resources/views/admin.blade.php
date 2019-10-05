@extends('layouts.app')

@section('content')
@if(Auth::user()->user_type == 0)

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
            @if((Auth::user()->fname == null) && (Auth::user()->lname == null))
                <div class="card-header">Complete Profile Register</div>
            @else
                <div class="card-header">PROFILE VIEW AND SERVICES</div>
            @endif
                <div class="card-body">
                @if((Auth::user()->fname == null) && (Auth::user()->lname == null))                    
                    @include('Professional.registerform')
                @else
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Welcome <span class="text-muted">{{Auth::user()->fname}} {{Auth::user()->lname}}</span> !</h4>

                    @include('displayform')
                @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection