@extends('layouts.app')

@section('title', 'Landingpage MPS Marine - Contact Us')

@section('content')
    <!--Contact-->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h1 class="text-uppercase fw-semibold display-5 text-white mb-4">Contact Us</h1>
                        <div class="line"></div>
                        <p class="text-white">We'd love to hear from you. Reach out to us for any inquiries or to discuss your next project.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="#" class="row g-3 p-4">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" class="form-control" placeholder="Enter subject">
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea name="message" rows="5" class="form-control" placeholder="Enter your message"></textarea>
                        </div>
                        <div class="form-group col-lg-12 d-grid">
                            <button class="btn btn-brand">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection