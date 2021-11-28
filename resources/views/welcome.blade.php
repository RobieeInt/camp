@extends('layouts.app')

@section('content')

<section class="banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12 copywriting">
                        <p class="story">
                            Robby Hernowo
                        </p>
                        <h1 class="header">
                            Jika ada <span class="text-purple">Sumur <br> Diladang </span> Ada !
                        </h1>
                        <p class="support">
                            Jangan Seperti Orang-orang, Karena<br> Orang-orang Belum Tentu Mau Seperti Kita.
                        </p>
                        <p class="cta">
                            <a href="#" class="btn btn-master btn-primary">
                                Kalo Diklik Ga Kemana2
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-6 col-12 text-center">
                        <a href="#">
                            <img src="{{ asset('images/banner1.png') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row brands">
            <div class="col-lg-12 col-12 text-center">
                <img src="{{ asset('images/brands.png') }}" alt="">
            </div>
        </div> --}}
    </div>
</section>


<section class="benefits">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    An Ordinary Young Boy
                </p>
                <h2 class="primary-header">
                    Robby Hernowo
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('/images/ic_globe.png') }}" class="icon" alt="">
                    <h3 class="title">
                        Backend Dev
                    </h3>
                    <p class="support">
                        Sampe Sekarang Masih Belajar <br> Dan akan Terus Belajar
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('/images/ic_globe-1.png') }}" class="icon" alt="">
                    <h3 class="title">
                        Network Engineer
                    </h3>
                    <p class="support">
                        Routing, Config, <br> Manjat, dll Jagonya saya pak.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('/images/ic_globe-2.png') }}" class="icon" alt="">
                    <h3 class="title">
                        1-1 Mentoring
                    </h3>
                    <p class="support">
                        We will ensure that you will get <br> what you really do need
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('/images/ic_globe-3.png') }}" class="icon" alt="">
                    <h3 class="title">
                        Future Job
                    </h3>
                    <p class="support">
                        Get your dream job in your dream <br> company together with us
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="steps">
    <div class="container">
        <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('images/step11.png') }}" class="cover" alt="">
            </div>
            <div class="col-lg-6 col-12 text-left copywriting">
                <p class="story">
                    BETTER CAREER
                </p>
                <h2 class="primary-header">
                    Prepare The Journey
                </h2>
                <p class="support">
                    Learn from anyone around the <br> world and get a new skills
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-secondary me-3">
                        Learn More
                    </a>
                </p>
            </div>
        </div>
        <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-left copywriting pl-150">
                <p class="story">
                    STUDY HARDER
                </p>
                <h2 class="primary-header">
                    Finish The Project
                </h2>
                <p class="support">
                    Each of you will be joining the private group and also <br> working together with team members
                    on project
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-secondary me-3">
                        View Demo
                    </a>
                </p>
            </div>
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('images/step22.png') }}" class="cover" alt="">
            </div>

        </div>
        <div class="row item-step">
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('images/step33.png') }}" class="cover" alt="">
            </div>
            <div class="col-lg-6 col-12 text-left copywriting">
                <p class="story">
                    END GAME
                </p>
                <h2 class="primary-header">
                    Big Demo Day
                </h2>
                <p class="support">
                    Learn how to speaking in public to demonstrate your <br> final project and receive the important
                    feedbacks
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-secondary me-3">
                        Showcase
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="pricing">
    <div class="container">
        <div class="row pb-70">
            <div class="col-lg-5 col-12 header-wrap copywriting">
                <p class="story">
                    Namanya Juga Ngetes
                </p>
                <h2 class="primary-header text-white">
                    Santee Aja Dulu
                </h2>
                <p class="support">
                    Belajar Tiap Hari Ga Berenti-berenti <br> Ngopi Sampe Pagi Dikira Pengangguran Level Tinggi
                </p>
                <p class="mt-5">
                    <a href="{{ route('login') }}" class="btn btn-master btn-thirdty me-3">
                        Login Dong
                    </a>
                </p>
            </div>
            <div class="col-lg-7 col-12">
                <div class="row">
                    @foreach ($camps as $camp )


                    <div class="col-lg-6 col-12">
                        <div class="table-pricing paket-gila">
                            <p class="story text-center">
                                {{ $camp->title }}
                            </p>
                            <h1 class="price text-center">
                                Rp.{{ number_format($camp->price) }}
                            </h1>
                            @foreach ($camp->Campbenefit as $campbenefit )

                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    {{ $campbenefit->name }}
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            @endforeach
                            <p>
                                <a href="{{ route('checkout.create', 'gas-teruss') }}"
                                    class="btn btn-master btn-primary w-100 mt-3">
                                    Saya Tertarique
                                </a>
                            </p>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-6 col-12">

                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row pb-70">
            <div class="col-lg-12 col-12 text-center">
                <img src="{{ asset('images/brands.png') }}" height="30" alt="">
            </div>
        </div> --}}
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    SUCCESS SEORANG PENGANGGURAN TERLIHAT
                </p>
                <h2 class="primary-header">
                    SAAT IA TERTIDUR
                </h2>
            </div>
            <div class="row copyright">
                <div class="col-lg-12 col-12">
                    <p>
                        All Rights Reserved. Copyright Janco Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
