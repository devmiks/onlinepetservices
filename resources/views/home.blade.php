@extends('layouts.app')

@section('content')
@if(Auth::user()->accounttype > 0)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@else
    <h4> 
        @php 
            abort(403, 'Unauthorized action.')
        @endphp
    </h4>
@endif
@endsection
