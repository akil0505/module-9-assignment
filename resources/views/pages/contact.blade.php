@extends('layouts.app')
@section('content')
<!-- contact section start -->
<section class="contact" id="contact">
            <div class="container">
                <div class="section-title">
                    <h2>Contact</h2>
                </div>
                <div class="row">
                    <div class="col-12 col-md-5  d-flex flex-column justify-content-center">
                        <div class="single-contact">
                            <div class="icon">
                                <img src="{{asset('img')}}/phone-alt.png" alt="">
                            </div>
                            <div class="details">
                                <p>+8801863-931220</p>
                                <p>+8801567-953483</p>
                            </div>
                        </div>
                        <div class="single-contact">
                            <div class="icon">
                                <img src="{{asset('img')}}/Group 13.png" alt="">
                            </div>
                            <div class="details">
                                <p>mdriead.bd@gmail.com</p>
                            </div>
                        </div>
                        <div class="single-contact">
                            <div class="icon">
                                <img src="{{asset('img')}}/location-arrow.png" alt="">
                            </div>
                            <div class="details">
                                <p>Zirabo, Ashulia, Savar, Dhaka</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7">
                        <form action="" class="contact-form">
                            <div class="input-wrapper">
                                <input type="text" name="fullName" id="fullName" placeholder="Full Name">
                            </div>
                            <div class="input-wrapper">
                                <input type="text" name="email" id="email" placeholder="Email Address">
                            </div>
                            <div class="input-wrapper d-flex">
                                <div class="w-50 pe-2">
                                    <input type="text" name="phone" id="phone" placeholder="Phone Number">
                                </div>
                                <div class="w-50 ps-2">
                                    <input type="text" name="subject" id="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="input-wrapper">
                                <textarea name="message" id="message" cols="" rows="5" placeholder="Your Message"></textarea>
                            </div>
                            <div class="input-wrapper text-center">
                                <input type="submit" name="submit" id="submit" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact section end -->

        @endsection