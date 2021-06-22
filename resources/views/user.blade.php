@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Tu eres un Usuario!') }}
                </div>
                
                <button class="btn btn-primary">
                <a href="{{ url('partidou') }}" style="color:white">{{ __('Dirigirse a la pagina de usuarios') }}</a>
                </button> 
                
            </div>
        </div>
    </div>
</div>
@endsection
