@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/v2/css/billing.css') }}">
    <link rel="stylesheet" href="{{ asset('site/countery/countrySelect.min.css') }}">
@stop
@section('content')
    <main class="main" style="margin-top: 75px;">

        <div class="billing-container">
            <div class="container">
                <div class="billing-wrapper">
                    <div class="billing-form">
                        <p class="billing-title">BILLING DETAILS</p>
                        <p class="billing-warning">BILLING DETAILS REQUIRED BEFORE CHECKOUT. THIS IS FOR SECURITY
                            PURPOSES ONLY. AS ALL DELIVERIES ARE DIGITAL, NOTHING WILL BE POSTED OUT TO YOU. ALL DETAILS
                            WILL BE SAVED FOR FUTURE ORDERS AND CAN BE EDITED IN YOUR ACCOUNT PAGE.</p>
                        <form role="form" id="billing-form" action="{{ url('user/billingDetails') }}" method="post">
                            @csrf
                            @method('put')
                            <div class="billing-form-row">
                                <div class="billing-form-label">FULL NAME</div>
                                <div class="billing-form-input">
                                    <input name="full_name" id="BillingDetails_full_name" type="text" placeholder="full name"
                                           maxlength="128" value="{{ $data['billingDetails'] ? $data['billingDetails']->full_name : old('id') }}"></div>
                            </div>
                            <div class="billing-form-row">
                                <div class="billing-form-label">DATE OF BIRTH</div>
                                <div class="billing-form-input">
                                    <input value="{{ $data['billingDetails'] ? $data['billingDetails']->date_of_birth : old('date_of_birth') }}" id="BillingDetails_date_of_birth"
                                           name="date_of_birth" type="text" placeholder="date of birth" class="hasDatepicker"></div>
                            </div>
                            <div class="billing-form-row">
                                <div class="billing-form-label">PHONE</div>
                                <div class="billing-form-input">
                                    <input name="phone" id="BillingDetails_phone" type="text" placeholder="phone"
                                           maxlength="128" value="{{ $data['billingDetails'] ? $data['billingDetails']->phone : old('phone') }}"></div>
                            </div>
                            <div class="billing-form-row">
                                <div class="billing-form-label">ADDRESS</div>
                                <div class="billing-form-input">
                                    <input name="address" id="BillingDetails_address" type="text" placeholder="address"
                                           maxlength="128" value="{{ $data['billingDetails'] ? $data['billingDetails']->address : old('address') }}"></div>
                            </div>
                            <div class="billing-form-row">
                                <div class="billing-form-label">CITY</div>
                                <div class="billing-form-input">
                                    <input name="city" id="BillingDetails_city" type="text" placeholder="city"
                                           maxlength="32" value="{{ $data['billingDetails'] ? $data['billingDetails']->city : old('city') }}"></div>
                            </div>
                            <div class="billing-form-row">
                                <div class="billing-form-label">REGION</div>
                                <div class="billing-form-input">
                                    <input name="region" id="BillingDetails_region" type="text" placeholder="region"
                                           maxlength="32" value="{{ $data['billingDetails'] ? $data['billingDetails']->region : old('region') }}"></div>
                            </div>
                            <div class="billing-form-row">
                                <div class="billing-form-label">COUNTRY</div>
                                <div class="billing-form-input">
                                    <div class="country-select inside">
                                        <input value="" readonly="readonly"
                                                                              style="background-color:white;"
                                                                              name="country_code"
                                                                              id="BillingDetails_country_code"
                                                                              type="text">

                                    </div>
                                </div>
                                <input type="hidden" name="country_code_code"
                                       id="BillingDetails_country_code_code" value="am"></div>
                            <div class="billing-form-row">
                                <div class="billing-form-label">ZIP CODE</div>
                                <div class="billing-form-input">
                                    <input name="zip_code" id="BillingDetails_zip_code" type="text" placeholder="zip code"
                                           maxlength="32" value="{{ $data['billingDetails'] ? $data['billingDetails']->zip_code : old('zip_code') }}"></div>
                            </div>
                            <p class="billing-warning bottom">NOTE: ANY ATTEMPT TO MASK YOUR IDENTITY SUCH AS USING A
                                VPN COULD CAUSE YOUR ORDER TO BE DECLINED.</p>
                            <button class="billing-submit">SAVE</button>
                        </form>
                    </div>
                    <div class="billing-banner">
                        <img src="{{ asset('/assets/v2/img/cart/billing-details.png') }}">
                    </div>
                </div>
            </div>
        </div>
        <div></div>
    </main>
@endsection
@section('js')
    <script src="{{ asset('site/countery/countrySelect.min.js') }}"></script>
    <script>
        $('#BillingDetails_country_code').countrySelect({defaultCountry:'{{ $data['billingDetails'] ? $data['billingDetails']->country_code : old('country_code_code') }}'})
    </script>
@stop
