@extends('layouts.checkout')

@section('title', 'Checkout')

@push('prepend-style')
<link rel="stylesheet" href="{{url('/front-end/libraries/combined/css/gijgo.min.css')}}">
@endpush

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
                            <li class="breadcrumb-item">Detail</li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-detail">
                        <h1>Who's Going</h1>
                        <p>Trip to Arizona, North America</p>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Picture</td>
                                        <td>Name</td>
                                        <td>Nationality</td>
                                        <td>Visa</td>
                                        <td>Passport</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle"><img src="{{url('front-end/images/testimonial-1.png')}}" alt="" height="60px"></td>
                                        <td class="align-middle">Aji Pangestu</td>
                                        <td class="align-middle">Singapure</td>
                                        <td class="align-middle">30 Days</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle">
                                            <a href="#">
                                                <img src="{{url('front-end/images/IC_delete.png')}}" alt="">
                                            </a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="align-middle"><img src="front-end/images/testimonial-2.png" alt="" height="60px"></td>
                                        <td class="align-middle">Nurul Komariah</td>
                                        <td class="align-middle">Indonesia</td>
                                        <td class="align-middle">N / A</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle">
                                            <a href="#">
                                                <img src="{{url('front-end/images/IC_delete.png')}}" alt="">
                                            </a>
                                        </td>
                                        </tr>
                                </tbody>
                            </table>
                            <div class="member mt-3">
                                <h2>Add Member</h2>
                                <form class="form-inline">
                                    <label for="inputUsername" class="sr-only">Name</label>
                                    <input type="text" name="inputUsername" class="form-control mb-2 mr-sm-2" id="inputUsername" placeholder="Username">
                                    <label for="inputVisa" class="sr-only">Visa</label>
                                    <select name="inputVisa" id="" class="custom-select mb-2 mr-sm-2">
                                        <option value="Visa" selected>Visa</option>
                                        <option value="30 Days">30 Days</option>
                                        <option value="N/A">N/A</option>
                                    </select>

                                    <label for="doePassport" class="sr-only">DOE Passport</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control datepicker" id="doePassport" placeholder="DOE Passport">
                                    </div>

                                    <button class="btn btn-add-now mb-2 px-4">
                                        Add Now
                                    </button>
                                </form>
                                <h3 class="mt-2 mb-0">
                                    Note
                                </h3>
                                <p class="disclaimer mb-0">
                                    You are only able to invite member that has registred in Bened Tour
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="card card-detail card-right">
                        <h2>Check Information</h2>
                        <table class="trip-information">
                            <tr>
                                <th width="50%">Member</th>
                                <td width="50%" class="text-right">2 Person</td>
                            </tr>
                            <tr>
                                <th width="50%">Additional Visa</th>
                                <td width="50%" class="text-right">$190,00</td>
                            </tr>
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td width="50%" class="text-right">$80,00/Person</td>
                            </tr>
                            <tr>
                                <th width="50%">Total (+Unique Code)</th>
                                <td width="50%" class="text-right text-total">
                                    <span class="text-blue">$ 279,</span>
                                    <span class="text-orange">33</span>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <h2>Payment Instruction</h2>
                        <p class="payment-instruction">Please complate the paymaent before you continue the trip</p>
                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img src="{{url('front-end/images/IC_bank.png')}}" alt="" class="bank-image">
                                <div class="description">
                                    <h3>PT Bened Tour</h3>
                                    <p>0881 8239 9920 <br> Bank Central Asia</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="bank">
                            <div class="bank-item pt-3">
                                <img src="{{url('front-end/images/IC_bank.png')}}" alt="" class="bank-image">
                                <div class="description">
                                    <h3>PT Bened Tour</h3>
                                    <p>0881 8239 9920 <br> Bank Central Asia</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="join-container">
                        <a href="{{route('Checkout Succes')}}" class="btn btn-block btn-join-now mt-3 py-2">
                            I Have Made Payment
                        </a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{route('Detail')}}" class="text-muted">
                            Cancel Booking
                        </a>
                    </div>
                </div>
            </div>
            <div class="row"></div>
        </div>
    </section>
</main>
@endsection

@push('addon-script')
<script src="{{ url('/front-end/libraries/combined/js/gijgo.min.js') }}"></script>
<script>
    $(document).ready(function () {

        $('.datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        })
    });
</script>
@endpush