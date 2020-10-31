@extends('layouts.succes')

@section('title', 'Checkout Succes')

@section('content')
<main>
    <div class="section-succes d-flex align-item-center">
        <div class="col text-center">
            <img src="{{url('/front-end/images/IC_MessageBox.png')}}" >
            <h1>Yeahh! Succes</h1>
            <p>
                we sent you email for trip instruction 
                <br>please read it as well
            </p>
            <a href="{{url ('/')}}" class="btn btn-home-page mt-3 px-5">
                Home Page
            </a>
        </div>
    </div>
</main>
@endsection
