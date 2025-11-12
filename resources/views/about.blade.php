@extends('layouts.app')

@section('title', 'Landingpage MPS Marine - About Us')

@section('content')
    <!--About-->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h1 class="text-uppercase fw-semibold display-5 text-white mb-4">About Us</h1>
                        <div class="line"></div>
                        <p class="text-white">PT. Mitra Persada Sejati love to provide marine services to its customers.
                            We are a team of marine professionals who are committed to providing the best marine
                            services to our customers.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/ser5_15_11zon.webp') }}" alt="About Us" class="img">
                </div>
                <div class="col-lg-5">
                    <h1 class="text-uppercase fw-semibold display-5 text-white">About MPS</h1>
               <p class="mt-3 mb-4">MPS Marine has been providing marine services to its customers for over 20 years. We are a
                        team of marine professionals who are committed to providing the best marine services to our
                        customers.</p>
                    <div class="d-flex pt-4 mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-mail-send-line"></i>
                        </div>
                        <div>
                            <h5 class="text-white">We are Awesome</h5>
                            <p class="text-white">We are a team of marine professionals who are committed to providing the best marine
                                services
                                to our customers.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-user-fill"></i>
                        </div>
                        <div>
                            <h5 class="text-white">We are Professional</h5>
                            <p class="text-white">We are a team with over 20 years of experience in the marine industry. We have
                                worked with
                                a number of marine customers, including large and small vessels, and have provided
                                them with
                                the best marine services.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-rocket-2-fill"></i>
                        </div>
                        <div>
                            <h5 class="text-white">We are Reliable</h5>
                            <p class="text-white">With the best marine services, we ensure that your marine equipment is operating at
                                its best.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

    </section>
@endsection