@extends('layouts.app', ['headerTransparent' => true])

@section('title', 'Home')

@section('hero')
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            @foreach ($slides as $index => $slide)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="carousel-container">
                        <h2 class="animate__animated animate__fadeInDown">{{ $slide['title'] }}</h2>
                        <p class="animate__animated animate__fadeInUp">{{ $slide['description'] }}</p>
                        <a href="{{ $slide['link'] }}" class="btn-get-started animate__animated animate__fadeInUp">Read
                            More</a>
                    </div>
                </div>
            @endforeach

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section>
@endsection

@section('content')

    <!-- ======= Services Section ======= -->
    <section class="services">
        <div class="container">

            <div class="row">
                @foreach ($serviceItems as $item)
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-{{ $item['color'] }}">
                            <div class="icon"><i class="bx {{ $item['icon'] }}"></i></div>
                            <h4 class="title"><a href="">{{ $item['title'] }}</a></h4>
                            <p class="description">{{ $item['description'] }}</p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 video-box">
                    <img src="{{ asset('assets/img/hero-bg.jpg') }}" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=qJZx2KWhQYc&pp=ygUHY29tb3Jlcw%3D%3D"
                        class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="">Comoros - A Tapestry of Islands</a></h4>
                        <p class="description">Comoros, often referred to as the "Perfumed Isles," is a captivating
                            archipelago nestled in the Indian Ocean. Comprising three major islands - Grande Comore, Mohéli,
                            and Anjouan.</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-gift"></i></div>
                        <h4 class="title"><a href="">Discovering the Wonders of Comoros</a></h4>
                        <p class="description">Comoros, with its tropical climate and lush landscapes, is not only renowned
                            for its aromatic cloves and ylang-ylang but also for its rich cultural heritage.</p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
        <div class="container">

            <div class="section-title">
                <h2>Features</h2>
                <p>

                </p>
            </div>

            @foreach ($transcomFeatures as $index => $feature)
                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 {{ $index % 2 == 0 ? '' : 'order-1 order-md-2' }}">
                        @if (isset($feature['image']))
                            <img src="{{ $feature['image'] }}" class="img-fluid" alt="">
                        @endif
                    </div>
                    <div class="col-md-7 pt-5 {{ $index % 2 == 0 ? '' : 'order-2 order-md-1' }}">
                        <h3>{{ $feature['title'] }}</h3>
                        <p class="fst-italic">
                            {{ $feature['description'] }}
                        </p>
                        @if (isset($feature['points']))
                            <ul>
                                @foreach ($feature['points'] as $point)
                                    <li><i class="bi bi-check"></i> {{ $point }}</li>
                                @endforeach
                            </ul>
                        @endif

                    </div>
                </div>
            @endforeach

        </div>
    </section><!-- End Features Section -->
@endsection
