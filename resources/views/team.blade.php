@extends('layouts.app')

@section('title', 'Landingpage MPS Marine - Our Team')

@section('content')
    <!--Team-->
    <section id="team" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h1 class="text-uppercase fw-semibold display-5 text-white mb-4">Our Team</h1>
                        <div class="line"></div>
                        <p class="text-white">Meet the dedicated professionals who make our success possible.</p>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member">
                        <div class="team-member-img">
                            <img src="{{ asset('assets/images/user-4_19_11zon.webp') }}" alt="">
                        </div>
                        <div class="team-member-info p-4">
                            <h5 class="text-white">Sarah WIlson</h5>
                            <p class="text-white">Lead Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member">
                        <div class="team-member-img">
                            <img src="{{ asset('assets/images/user-5_20_11zon.webp') }}" alt="">
                        </div>
                        <div class="team-member-info p-4">
                            <h5 class="text-white">Tonny Hawk</h5>
                            <p class="text-white">System Specialist</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member">
                        <div class="team-member-img">
                            <img src="{{ asset('assets/images/user6_21_11zon.webp') }}" alt="">
                        </div>
                        <div class="team-member-info p-4">
                            <h5 class="text-white">Davina Karamoy</h5>
                            <p class="text-white">Project Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member">
                        <div class="team-member-img">
                            <img src="{{ asset('assets/images/user-1_16_11zon.webp') }}" alt="">
                        </div>
                        <div class="team-member-info p-4">
                            <h5 class="text-white">Emily Harris</h5>
                            <p class="text-white">Client Relations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection