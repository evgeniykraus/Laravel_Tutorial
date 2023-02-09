@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        @if($message = session()->get('message', null))
            @include('layouts.alert')
        @endif

        <div class="row">
            <div class="col-md-3">
                <img src="img\user-icon.png" class="img-fluid rounded-circle" alt="User Photo">
            </div>
            <div class="col-md-9">
                <h3>{{ Auth::user()->name .' '. Auth::user()->surname}}</h3>
                <p>{{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>

@endsection
