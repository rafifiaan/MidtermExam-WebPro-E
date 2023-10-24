{{-- @dd($reviews) --}}

@extends('layouts.main')
@section('container')

<div class="container col-md-8 pt-5 mb-5">
    <div class="row">
        <h1 class="display-4 fw-semibold">An Introduce</h1>
        <p>
        MyKos adalah sebuah platform inovatif yang didedikasikan untuk memudahkan para mahasiswa dalam mencari kos-kosan yang cocok dengan kebutuhan mereka. 
        Dengan visi untuk mempermudah proses mencari tempat tinggal yang nyaman dan terjangkau, kami telah menggabungkan teknologi canggih dengan pemahaman mendalam tentang kebutuhan mahasiswa. 
        Tim kami yang berpengalaman selalu siap membantu Anda menemukan kos-kosan terbaik yang sesuai dengan preferensi Anda, baik itu lokasi, fasilitas, atau budget. myKos adalah teman setia dalam perjalanan Anda untuk menemukan tempat tinggal yang sempurna selama masa kuliah. 
        </br></br>
        Selamat datang di dunia kos-kosan yang lebih mudah dengan MyKos!
        </p>
    </div>
    
    <div class="row mt-3">
        <h3 class="display-6 fw-semibold">Team Members</h3>
        <section class=" text-center p-2 mb-2">
            <img class="rounded-circle" src="/img/rafi.png" alt="Rafi" width="170" />
            <h2 class="">Rafi Aliefian Putra Ramadhani</h2>
            <p class="lead">5025211234 | Informatics Engineering ITS</p>
        </section>

        <section class=" text-center p-2 mb-3">
            <img class="rounded-circle" src="/img/valen.jpeg" alt="Valen" width="170" />
            <h2 class="">Beauty Valen Fajri</h2>
            <p class="lead">5025211227 | Informatics Engineering ITS</p>
        </section>

        <section class=" text-center p-2 mb-4">
            <img class="rounded-circle" src="/img/kevin.jpeg" alt="Kevin" width="170" />
            <h2 class="">Christian Kevin Emor</h2>
            <p class="lead">5025211153 | Informatics Engineering ITS</p>
        </section>
    </div>
</div>


{{-- <div class="container">
    @foreach ($reviews as $review)
    <h2>{{ $review["name"] }}</h2>
    <h5>{{ $review["job"] }}</h5>
    <p>{{ $review["body"] }}</p>
    @endforeach
</div> --}}
  <!-- Carousel wrapper -->

@endsection