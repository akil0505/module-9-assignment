@extends('layouts.app')

@section('content')
<!-- hero section start -->
<section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                        <span>Hi, It's me</span>
                        <h2>Al Akil</h2>
                        <h4>And I'm a <span>Freelance Web Developer</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos
                            dolorum ullam molestias autem deleniti iure earum!</p>
                        <a href="#" class="download-cv cta-btn">    Download CV</a>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="img">
                            <img src="{{asset('img')}}/banner.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero section end -->
        <style> 
            .footer {
                background: #170550;
            }
        </style>
        @endsection