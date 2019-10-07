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
            <div class="card-header">SEARCH RESULT <span class="text-uppercase text-danger">{{ $FieldSearch }}</span></div>
            <div class="card-body">
            @if(!empty($SearchField))
                @foreach($SearchField as $field)

                @endforeach
            @else
                NO SEARCH RESULT                        
            @endif            
            </div>
            <a href="{{ route('home1') }}" class="btn btn-primary">BACK TO PROFILE</a>
        </div>
    </div>
</div>
@endif
@endsection