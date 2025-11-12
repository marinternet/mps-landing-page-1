@extends('layouts.app')

@section('title', 'Landingpage MPS Marine - Services')

@section('content')
    <!--Services-->
   <section id="services" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h1 class="text-uppercase fw-semibold display-5 text-white mb-4">Services</h1>
                        <div class="line"></div>
                        <p class="text-white">We provide a wide range of marine services to meet your needs, from calibration to consultation.</p>
                    </div>
                </div>
            </div>
            <div class="row text-center" id="services-container">
                <!-- Services will be dynamically loaded here -->
            </div>
        </div>
    </section>
@endsection