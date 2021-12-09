@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="text-center">
                <img src="info.jpeg" class="rounded" alt="..." width="1110" height="600">
            </div>

            <div class="card">
                <div class="card-header">{{ __('Bienvenido!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('-------------------------') }}
                    
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
