@extends('layouts.app')

@section('title', 'Landingpage MPS Marine')

@section('content')
    <!--Hero-->
    <section id="hero" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <h1 class="text-uppercase fw-semibold display-1">MPS Marine</h1>
                  <h5 class="text-white mt-3 mb-4">MPS Marine is a marine company that provides marine services to its
                        customers. We are a team of
                        marine professionals who are committed to providing the best marine services to our customers.
                    </h5>
                    <div class="d-flex flex-wrap justify-content-center">
                        <a href="#" class="btn btn-brand m-2">Get Started</a>
                        <a href="#portofolio" class="btn btn-light m-2">Our Portofolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Portofolio-->
    <section id="portofolio" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h1 class="text-uppercase fw-semibold display-5 text-white mb-4">Portfolio</h1>
                        <div class="line"></div>
                        <p class="text-white">A collection of our finest work, showcasing our commitment to quality and excellence in the marine industry.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="portfolio-item">
                        <img src="{{ asset('assets/images/Gal1_2_11zon.webp') }}" alt="Portfolio 1">
                        <div class="portfolio-overlay">
                            <h5 class="text-white">Project Title</h5>
                            <p class="text-white">Marine Engineering</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="portfolio-item">
                        <img src="{{ asset('assets/images/Gal2_3_11zon.webp') }}" alt="Portfolio 2">
                        <div class="portfolio-overlay">
                            <h5 class="text-white">Project Title</h5>
                            <p class="text-white">Vessel Maintenance</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="portfolio-item">
                        <img src="{{ asset('assets/images/Gal3_4_11zon.webp') }}" alt="Portfolio 3">
                        <div class="portfolio-overlay">
                            <h5 class="text-white">Project Title</h5>
                            <p class="text-white">Navigation Systems</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="portfolio-item">
                        <img src="{{ asset('assets/images/Gal4_5_11zon.webp') }}" alt="Portfolio 4">
                        <div class="portfolio-overlay">
                            <h5 class="text-white">Project Title</h5>
                            <p class="text-white">Engine Repair</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="portfolio-item">
                        <img src="{{ asset('assets/images/Gal5_6_11zon.webp') }}" alt="Portfolio 5">
                        <div class="portfolio-overlay">
                            <h5 class="text-white">Project Title</h5>
                            <p class="text-white">Consultation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="portfolio-item">
                        <img src="{{ asset('assets/images/Gal6_7_11zon.webp') }}" alt="Portfolio 6">
                        <div class="portfolio-overlay">
                            <h5 class="text-white">Project Title</h5>
                            <p class="text-white">System Installation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
      <!--Reviews-->
    <section id="reviews" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h1 class="text-uppercase fw-semibold display-5 text-white mb-4">Reviews</h1>
                        <div class="line"></div>
                        <p class="text-white">See what our clients are saying about us. Their satisfaction is our greatest achievement.</p>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-4 col-sm-6">
                    <div class="review-item p-4">
                        <div class="review-head d-flex align-items-center">
                            <img src="{{ asset('assets/images/user7_22_11zon.webp') }}" alt="">
                            <div class="ms-3">
                                <h5 class="text-white">John Doe</h5>
                                <p class="text-white">Marine Engineer</p>
                            </div>
                        </div>
                        <div class="review-body mt-4">
                            <p class="text-white">"MPS Marine provided exceptional service. Their team is professional, and the quality of their work is second to none."</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="review-item p-4">
                        <div class="review-head d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-2_17_11zon.webp') }}" alt="">
                            <div class="ms-3">
                                <h5 class="text-white">Erwin Smith</h5>
                                <p class="text-white">Vessel Captain</p>
                            </div>
                        </div>
                        <div class="review-body mt-4">
                            <p class="text-white">"I highly recommend MPS Marine. They are reliable, efficient, and their attention to detail is impressive."</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="review-item p-4">
                        <div class="review-head d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-3_18_11zon.webp') }}" alt="">
                            <div class="ms-3">
                                <h5 class="text-white">Peter Jones</h5>
                                <p class="text-white">Fleet Manager</p>
                            </div>
                        </div>
                        <div class="review-body mt-4">
                            <p class="text-white">"Working with MPS Marine has been a pleasure. Their expertise in marine systems is unmatched."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--Blog-->
    <section id="blog" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h1 class="text-uppercase fw-semibold display-5 text-white mb-4">Blog</h1>
                        <div class="line"></div>
                        <p class="text-white">Stay updated with our latest news, articles, and insights from the marine industry.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-post">
                        <img src="{{ asset('assets/images/H1_8_11zon.webp') }}" alt="">
                        <div class="blog-content p-4">
                            <h5 class="text-white">The Future of Marine Technology</h5>
                            <p class="text-white">Explore the innovations shaping the future of the marine industry.</p>
                            <a href="#" class="btn btn-brand">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-post">
                        <img src="{{ asset('assets/images/Gal3_4_11zon.webp') }}" alt="">
                        <div class="blog-content p-4">
                            <h5 class="text-white">Navigating with Precision</h5>
                            <p class="text-white">A deep dive into modern navigation systems and their impact on safety.</p>
                            <a href="#" class="btn btn-brand">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-post">
                        <img src="{{ asset('assets/images/A1_1_11zon.webp') }}" alt="">
                        <div class="blog-content p-4">
                            <h5 class="text-white">Sustainable Shipping</h5>
                            <p class="text-white">How the industry is moving towards a greener, more sustainable future.</p>
                            <a href="#" class="btn btn-brand">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection