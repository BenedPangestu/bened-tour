@extends('layouts.app')

@section('title')
    Detail Travel
@endsection

@section('content')
    <main>
        <section class="section-detail-header"></section>
        <section class="section-detail-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Paket Travel</li>
                                <li class="breadcrumb-item active">Detail</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-detail">
                            <h1>{{$item->title}}, {{$item->location}}</h1>
                            <p>{{$item->country}}</p>
                            
                            @if ($item->galleries->count())
                                <div class="gallery">
                                <div class="xzoom-container">
                                    <img
                                        src="{{Storage::url($item->galleries->first()->image)}}"
                                        class="xzoom"
                                        id="xzoom-default"
                                        xoriginal="{{Storage::url($item->galleries->first()->image)}}">
                                </div>
                                <div class="xzoom-thumbs">
                                    @foreach ($item->galleries as $gallery)
                                        <a href="{{ Storage::url($gallery->image) }}">
                                            <img
                                                src="{{ Storage::url($gallery->image) }}"
                                                class="xzoom-gallery"
                                                width="128"
                                                xpreview="{{ Storage::url($gallery->image) }}">
                                        </a>
                                    @endforeach
                                </div>
                            </div>    
                            @endif
                            <h2>Tentang Wisata</h2>
                            <p>
                                {!! $item->about !!}
                            </p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <div class="description">
                                        <img src="{{ url('front-end/images/IC-ticket.png')}}" alt="" class="features-image">
                                        <div class="description">
                                            <h3>Event</h3>
                                            <p>{{$item->featured_event}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="{{ url('front-end/images/IC_talk.png') }}" alt="" class="features-image">
                                        <div class="description">
                                            <h3>language</h3>
                                            <p>{{$item->language}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="{{url('front-end/images/IC_food.png')}}" alt="" class="features-image">
                                        <div class="description">
                                            <h3>Foods</h3>
                                            <p>{{$item->food}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="card card-detail card-right">
                            <h2>Members are going</h2>
                            <div class="members my-2">
                                <img src="{{url('front-end/images/members/member-1.png')}}" alt="" class="members-image mr-1">
                                <img src="{{url('front-end/images/members/member-2.png')}}" alt="" class="members-image mr-1">
                                <img src="{{url('front-end/images/members/member-3.png')}}" alt="" class="members-image mr-1">
                            </div>
                            <hr>
                            <h2>Trip Information</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Date of depature</th>
                                    <td width="50%" class="text-right">{{ \Carbon\Carbon::create($item->departure_date)->format('F N, Y') }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-right">{{$item->duration}}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Type of trip</th>
                                    <td width="50%" class="text-right">{{$item->type}}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">${{$item->price}} / person</td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                            @auth
                                <form action="{{route('checkout_proses', $item->id)}}" method="post">
                                    @csrf
                                    <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                                        Join Now
                                    </button>
                                </form>
                            @endauth
                            @guest
                                <a href="{{ route('login')}}" class="btn btn-block btn-join-now mt-3 py-2">
                                    Login Or Register to Join
                                </a>
                            @endguest
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                </div>
            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('front-end/libraries/xzoom/xzoom.css') }}">
@endpush

@push('addon-script')
    <script src="{{url('front-end/libraries/xzoom/xzoom.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.xzoom, .xzoom-gallery').xzoom(
                {zoomwidth: 500, 
                title: false, 
                tint: '#333', 
                xoffset: 15
                });
        });
    </script>
@endpush