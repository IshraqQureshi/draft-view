@extends('layouts.frontend')

@section('content')

<section id="page--header">
    <div class="container">
        <div class="page--header-heading">
            <h1>Get in <span class="highlight">Touch</span> With Us</h1>
        </div>
    </div>
</section>

<section id="contact--section">
    <div class="container">
        <div class="flex-row contact--row">
            <div class="contact--content">
                <h3>Send us a message</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                <div class="contact--form">
                    <form method="post" action="{{ route('contact-submit') }}" novalidate>
                        @csrf                        
                        <div class="form--field-row two--field">
                            <div class="form--field">
                                <label for="first_name">First Name <span class="required">*</span></label>
                                <input type="text" name="first_name" required>                                
                                @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form--field">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name">
                                @error('last_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form--field-row two--field">
                            <div class="form--field">
                                <label for="email_address">Email Address <span class="required">*</span></label>
                                <input type="email" name="email_address" required>
                                @error('email_address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form--field">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" required>
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form--field-row one--field">
                            <div class="form--field">
                                <label for="message">Message</label>
                                <textarea name="message"></textarea>
                                @error('message')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form--field-row form--submit-row">
                            <input type="submit" name="submit" value="Send Message">
                        </div>
                    </form>
                </div>
            </div>
            <div class="contact--img">
                <img src="/images/contact-img.png" alt="Contact IMG">
            </div>
        </div>

        <div class="flex-row contact-info-row">
            <div class="contact-info">
                <div class="contact-info--icon">
                    <img src="/images/call-icon.svg" alt="Call">
                </div>
                <div class="contact-info--title">
                    <a href="tel:001-2345-67-89">001-2345-67-89</a>
                </div>
                <div class="contact-info--desc">
                    <p>Monday to Friday, from 8am to 8pm and Saturday, from 8am to 5pm (toll free).</p>
                </div>
            </div>

            <div class="contact-info">
                <div class="contact-info--icon">
                    <img src="/images/mail-icon.svg" alt="Call">
                </div>
                <div class="contact-info--title">
                    <a href="mailto:hello@draftview.com">hello@draftview.com</a>
                </div>
                <div class="contact-info--desc">
                    <p>Do you have any queries or questions? Send us an e-mail and we will reply to you as soon as possible.</p>
                </div>
            </div>

            <div class="contact-info">
                <div class="contact-info--icon">
                    <img src="/images/location-icon.svg" alt="Call">
                </div>
                <div class="contact-info--title">
                    <a href="tel:001-2345-67-89">Newyork</a>
                </div>
                <div class="contact-info--desc">
                    <p>We are located in 3 Rockaway St., New Rochelle, NY 10801</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection