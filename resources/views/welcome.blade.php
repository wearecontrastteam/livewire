@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2 class="card-header">{{ __('An Introduction to Livewire') }}</h2>

                    <div class="card-body">
                        <a href="{{ route('counter') }}" class="btn btn-default m-2">counter</a>
                        <a href="{{ route('data-binding') }}" class="btn btn-default m-2">data-binding</a>
                        <a href="{{ route('action') }}" class="btn btn-default m-2">action</a>
                        <a href="{{ route('mount') }}" class="btn btn-default m-2">mount</a>
                        <a href="{{ route('search') }}" class="btn btn-default m-2">search</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
