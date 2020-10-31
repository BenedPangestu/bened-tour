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
                            <h1>Arizona, North America</h1>
                            <p>United State</p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img
                                        src="front-end/images/gallery-1.png"
                                        class="xzoom"
                                        id="xzoom-default"
                                        xoriginal="front-end/images/gallery-preview/gal-1.jpg">
                                </div>
                                <div class="xzoom-thumbs">
                                    <a href="front-end/images/gallery-1.png">
                                        <img
                                            src="front-end/images/gallery-1.png"
                                            class="xzoom-gallery"
                                            width="128"
                                            xpreview="front-end/images/gallery-preview/gal-1.jpg">
                                    </a>
                                    <a href="front-end/images/gallery-preview/gal-2.jpg">
                                        <img
                                            src="front-end/images/gallery-2.png"
                                            class="xzoom-gallery"
                                            width="128"
                                            xpreview="front-end/images/gallery-preview/gal-2.jpg">
                                    </a>
                                    <a href="front-end/images/gallery-preview/gal-3.jpg">
                                        <img
                                            src="front-end/images/gallery-3.png"
                                            class="xzoom-gallery"
                                            width="128"
                                            xpreview="front-end/images/gallery-preview/gal-3.jpg">
                                    </a>
                                    <a href="front-end/images/gallery-preview/gal-4.jpg">
                                        <img
                                            src="front-end/images/gallery-4.png"
                                            class="xzoom-gallery"
                                            width="128"
                                            xpreview="front-end/images/gallery-preview/gal-4.jpg">
                                    </a>
                                    <a href="front-end/images/gallery-1.png">
                                        <img
                                            src="front-end/images/gallery-1.png"
                                            class="xzoom-gallery"
                                            width="128"
                                            xpreview="front-end/images/gallery-1.png">
                                    </a>
                                </div>
                            </div>
                            <h2>Tentang Wisata</h2>
                            <p>adalah sebuah negara bagian di wilayah barat daya Amerika Serikat. Ibukotanya
                                dan kota terbesarnya adalah Phoenix. Arizona berbagi wilayah Four Corners dengan
                                Utah, Colorado, dan New Mexico; negara-negara tetangga lainnya adalah Nevada dan
                                California di barat dan negara bagian Meksiko yaitu Sonora dan Baja California
                                di selatan dan barat daya.</p>
                            <p>is a state in the southwestern region of the United States. It is also part
                                of the Western and the Mountain states. It is the 6th largest and the 14th most
                                populous of the 50 states.</p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <div class="description">
                                        <img src="front-end/images/IC-ticket.png" alt="" class="features-image">
                                        <div class="description">
                                            <h3>Nature</h3>
                                            <p>Waterfall</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="front-end/images/IC_talk.png" alt="" class="features-image">
                                        <div class="description">
                                            <h3>language</h3>
                                            <p>Bahasa Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="front-end/images/IC_food.png" alt="" class="features-image">
                                        <div class="description">
                                            <h3>Foods</h3>
                                            <p>Junk Foods</p>
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
                                <img src="front-end/images/members/member-1.png" alt="" class="members-image mr-1">
                                <img src="front-end/images/members/member-2.png" alt="" class="members-image mr-1">
                                <img src="front-end/images/members/member-3.png" alt="" class="members-image mr-1">
                            </div>
                            <hr>
                            <h2>Trip Information</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Date of depature</th>
                                    <td width="50%" class="text-right">22 Aug, 2020</td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-right">4 Days 3 Night</td>
                                </tr>
                                <tr>
                                    <th width="50%">Type of trip</th>
                                    <td width="50%" class="text-right">Open Public</td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">$200 / person</td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                        <a href="{{ route('Checkout')}}" class="btn btn-block btn-join-now mt-3 py-2">
                                Join Now
                            </a>
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