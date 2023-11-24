@extends('layouts.app')
@section('content')
<!-- about section start -->
<section class="about" id="about">
            <div class="container">
                <div class="section-title">
                    <h2>About <span>Me</span></h2>
                </div>
                <div class="row">
                    <div class="col-12 col-md-5">
                        <div class="img w-75"><img src="{{asset('img')}}/about.png" alt=""></div>
                    </div>
                    <div class="col-12 col-md-7">
                        <h3>Frontend & Backend Web Developer</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At reiciendis, quas voluptatum facere quam iusto itaque sapiente dolor provident aspernatur unde, suscipit illum, velit similique animi iste corporis repellendus veritatis minus voluptas. Sunt, eligendi. Praesentium explicabo facere quo ad earum.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At reiciendis, quas voluptatum facere quam iusto itaque sapiente dolor provident.</p>
                        <a href="#" class="cta-btn">Read More...</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- about section end -->
        @endsection
