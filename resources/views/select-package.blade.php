@extends('layouts.frontend')

@section('content')
<section id="page--header">
    <div class="container">
        <div class="page--header-heading">
            <h1>Get your <span class="highlight">dream</span> job</h1>
        </div>
    </div>
</section>

<section id="selectPackage">
    <div class="container">
        <div class="flex-row selectPackage--row">
            <div class="package--col">
                <h3>Select Package</h3>
                <div class="selectPackage--list">
                    <div class="selectPackage--box active" data-package-name="basic" data-package-price="74.95">
                        <div class="selectPackage--icon">
                            <img src="/images/basic-package-icon.png" alt="Basic">
                        </div>
                        <h3>Basic</h3>
                    </div>
                    <div class="selectPackage--box" data-package-name="starter" data-package-price="84.95">
                        <div class="selectPackage--icon">
                            <img src="/images/starter-package-icon.png" alt="Starter">
                        </div>
                        <h3>Starter</h3>
                    </div>
                    <div class="selectPackage--box" data-package-name="premium" data-package-price="99.95">
                        <div class="selectPackage--icon">
                            <img src="/images/premium-package-icon.png" alt="Premium">
                        </div>
                        <h3>Premium</h3>
                    </div>
                </div>
                <div class="selectPackage--content">
                    <h3>Get your dream job</h3>
                    <ul>
                        <li>Payment through a trusted payment service</li>
                        <li>SSL Secure / 256-bit SSL secure checkout</li>
                        <li>7-day money back guarantee</li>
                    </ul>
                    <h3>How can I cancel?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    <h3>Money-Back Guarantee!</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    <h3>Your payment is protected by</h3>
                </div>
            </div>
            <div class="payment--col">
                <div class="payment--header">
                    <h2>Total Due Today: </h2>
                    <h2 class="payment--amount">$<span>74.95</span></h2>
                </div>
                <div class="payment--body">
                    <h2>Where are you located?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dolore porro ducimus dolor</p>
                    <form 
                        data-stripe-publishable-key="{{ env('STRIPE_PUBLISHABLE_KEY') }}"
                        class="stripe-pay"
                        method="post"
                        action="{{ route('stripe-post') }}"
                    >
                        @csrf
                        
                        <div class="form--field-row one--field">
                            <div class="form--field">
                                <select name="country">
                                    <option value="USA">United States Of America</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="India">India</option>
                                </select>
                                @error('country')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="payment--mode-wrapper">
                            <div class="payment--mode">
                                <button type="button" data-payment-mode="stripe" class="active">Pay Via Credit Card</button>
                            </div>
                            <div class="payment--mode">
                                <button type="button" data-payment-mode="paypal">Pay Via Paypal</button>
                            </div>
                        </div>
                        <div class="payment--mode-tab active" data-payment-mode="stripe">
                            <div class="form--error-row" style="display: none">
                                <p></p>
                            </div>
                            <div class="form--field-row one--field">
                                <div class="form--field">
                                    <input name="card_number" type="text" placeholder="xxxx xxxx xxxx xxxx">
                                    @error('card_number')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form--field-row one--field">
                                <div class="form--field">
                                    <input name="card_name" type="text" placeholder="Cardholder Name">
                                    @error('card_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form--field-row one-third--field">
                                <div class="form--field">
                                    <input name="card_expiry" type="text" placeholder="MM / YYYY">
                                    @error('card_expiry')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form--field">
                                    <input name="card_cvv" type="text" placeholder="CVV">
                                    @error('card_cvv')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form--field-row one--field">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At dolore porro ducimus dolor</p>
                            </div>
                            <div class="form--field-row form--submit-row">
                                <input type="submit" name="submit" value="Pay Now">
                                <img src="/images/ajax-loader.gif" class="ajax--loader" alt="Ajax Loader" style="display: none">
                            </div>
                        </div>
                        <div class="payment--mode-tab" data-payment-mode="paypal">
                            <h2>Paypal</h2>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
@endsection