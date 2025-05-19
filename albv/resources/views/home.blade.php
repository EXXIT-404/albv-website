@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Accueil') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Bienvenue sur notre site</h1>
                    <p>Ceci est la page d'accueil de notre application.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
