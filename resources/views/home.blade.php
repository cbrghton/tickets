@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading mt-5">
            <h5>Dashboard</h5>
        </div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <h6>You are logged in!</h6>
        </div>
    </div>
@endsection
