@extends('layouts.app')

@section('title')
    Bened-Tour
@endsection

@section('content')
    <!-- Header -->

    <header class="text-center">
        <h1>Easy goes to destination
            <br>you want</h1>
        <p class="mt-3">you will see beutiful
            <br>
            moment you never see before</p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">Get Started</a>
    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Member</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Contries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotel</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>4</h2>
                    <p>Patners</p>
                </div>
            </section>
            <section class="popular-content" id="popular-content">
                <div class="container">
                    <div class="section-popular-content row justify-content-center"></div>
                </div>

            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>something that you never try
                            <br>
                            before in this world</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div
                    class="section-popular-travel row
                justify-content-center">
                    @foreach ($item->take(4) as $items)
                        <!-- popular-1 -->
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div
                                class="card-travel text-center d-flex flex-column"
                                style="background-image: url('{{ $items->galleries->count() ? Storage::url($items->galleries->first()->image) : ''}}');">
                                <div class="travel-location">{{$items->title}}, {{$items->location}}</div>
                                <div class="travel-location">{{$items->country}}</div>
                                <div class="travel-harga mt-auto">${{$items->price}}</div>
                            </div>
                            <div class="travel-button">
                                <a href="{{route('Detail', $items->slug)}}" class="btn btn-travel-detail text-center px-4">
                                    VIEW DETAILS
                                </a>
                            </div>
                        </div>
                    @endforeach
                    
                    {{-- <!-- popular-2 -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div
                            class="card-travel text-center d-flex
                        flex-column"
                            style="background-image: url('front-end/images/popular-2.png');">
                            <div class="travel-location">Denpasar, Bali</div>
                            <div class="travel-harga mt-auto">$100</div>
                        </div>
                        <div class="travel-button">
                            <a href="{{route('Detail')}}" class="btn btn-travel-detail text-center px-4">
                                VIEW DETAILS
                            </a>
                        </div>
                    </div>
                    <!-- popular-3 -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div
                            class="card-travel text-center d-flex
                        flex-column"
                            style="background-image: url('front-end/images/popular-3.png');">
                            <div class="travel-location">Osaka, Jepang</div>
                            <div class="travel-harga mt-auto">$150</div>
                        </div>
                        <div class="travel-button">
                            <a href="{{route('Detail')}}" class="btn btn-travel-detail text-center px-4">
                                VIEW DETAILS
                            </a>
                        </div>
                    </div>
                    <!-- popular-4 -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div
                            class="card-travel text-center d-flex
                        flex-column"
                            style="background-image: url('front-end/images/popular-4.png');">
                            <div class="travel-location">Bangkok, Singapure</div>
                            <div class="travel-harga mt-auto">$200</div>
                        </div>
                        <div class="travel-button">
                            <a href="{{route('Detail')}}" class="btn btn-travel-detail text-center px-4">
                                VIEW DETAILS
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

        <section class="section-networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Collaboration</h2>
                        <p>Companies are trusted us
                            <br>
                            more than just a trip</p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="front-end/images/collaboration-pict.png" alt="logo patner">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>Testimonial</h2>
                        <p>Moment were giving them
                            <br>the best experience</p>
                    </div>
                </div>
            </div>

        </section>

        <section class="section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <!-- testimonial-1 -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img
                                    src="front-end/images/testimonial-1.png"
                                    alt="user"
                                    class="mb-4 rounded-circle">
                                <h3 class="mb-4">Aji Pangestu</h3>
                                <p class="testimonial">
                                    "it was glorious and i could not stop to say wohoo for every single moment
                                    dankee"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Osaka
                            </p>
                        </div>
                    </div>
                    <!-- testimonial-2 -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img
                                    src="front-end/images/testimonial-2.png"
                                    alt="user"
                                    class="mb-4 rounded-circle">
                                <h3 class="mb-4">Nurul Komariah</h3>
                                <p class="testimonial">
                                    "it was glorius and I clould no stop to say what the fuck for every single
                                    moment danke"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Arizona
                            </p>
                        </div>
                    </div>
                    <!-- testimonial-3 -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img
                                    src="front-end/images/testimonial-3.png"
                                    alt="user"
                                    class="mb-4 rounded-circle">
                                <h3 class="mb-4">Fajar Maulana</h3>
                                <p class="testimonial">
                                    "it was glorious and i could not stop to say wohoo for every single moment
                                    dankee"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Bangkok
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection