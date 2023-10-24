@extends('layouts.main')

@section('container')
<!-- Jumbotron -->
<section class="jumbotron">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 row-content">
                {{-- <p class="lead fs-4">Rafi Aliefian Putra Ramadhani | 5025211234</p> --}}
                <h1 class="fw-bold display-1-sm">Cari Kos yang Cocok?<br><span class="first-color">MyKos</span> aja!</h1>
                <p class="fs-4">
                Selamat Datang di MyKos: Temukan Tempat Tinggalmu yang Sempurna!
                </p>
                <a class="btn rounded-pill btn-rounded text-white" style="background-color:#345cb3;"href="@auth {{ route('catalog') }} @endauth @guest {{ route('login') }} @endguest">Yuk cari tahu! ></a>
            </div>
            <div class="col-md-6">
                <img class="mx-auto float-end" src="img/banner.png" alt="" width="75%" style="margin: 150px"/>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
            fill="#fff"
            fill-opacity="1"
            d="M0,128L48,122.7C96,117,192,107,288,85.3C384,64,480,32,576,64C672,96,768,192,864,229.3C960,267,1056,245,1152,213.3C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
    </svg>
</section>
<!-- End of Jumbotron -->
<!-- Carousel wrapper -->
<h1 class="text-center display-3 fw-bolder mb-2">What They Say?</h1>
<div id="testimonials" class="carousel slide text-center carousel-dark mt-4" data-mdb-ride="carousel">
    <div class="carousel-inner">
        @foreach ($reviews as $index => $review)
        <div class="carousel-item @if($index==0) active @endif">
            <img class="rounded-circle shadow-1-strong mb-4"
                src="{{ $review["image"] }}" alt="avatar"
                style="width: 200px;" />
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h5 class="mb-3 display-6">{{ $review["name"] }}</h5>
                    <p class="text-muted fs-3">{{ $review["job"] }}</p>
                    <p class=" fs-4">
                    <i class="fas fa-quote-left pe-2"></i>
                    {{ $review["body"] }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#testimonials" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#testimonials" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection

