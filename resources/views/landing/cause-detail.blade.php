@extends('landing.layouts.app')

@section('content')
  <!-- Breadcrumb Section Start -->
  <section class="breadcrumb position-relative d-flex align-items-center justify-content-center py-5">
    <div class="overlay"></div>
    <div class="container position-relative z-1 text-center white">
      <h1 class="white mb-3">Cause Details</h1>
      <ul class="list-unstyled d-flex justify-content-center gap-2 mb-0">
        <li><a href="{{ route('home') }}" class="white">Home</a></li>
        <li><span class="white">/</span></li>
        <li><a href="{{ route('causes.index') }}" class="white">Causes</a></li>
        <li><span class="white">/</span></li>
        <li class="primary active fw-bold">Detail Program</li>
      </ul>
    </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- Cause Detail Section Start -->
  <section class="cause-detail-section py-5">
    <div class="container">
      <div class="row gy-5">
        <!-- Main Content -->
        <div class="col-lg-8">
          <div class="cause-detail-main">
            <img src="{{ asset('landing/images/children-left-alone-after-hostilities-2021-09-24-02-51-49-utc.jpg') }}" alt="Cause Detail Image" class="w-100 rounded mb-4" style="max-height: 450px; object-fit: cover;">

            <div class="progress-bar-section p-4 bg-light rounded mb-4">
              <div class="progress" style="height: 14px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="d-flex justify-content-between mt-3">
                <div><span class="text-muted">Terkumpul:</span> <h4 class="primary mb-0">$15,000</h4></div>
                <div><span class="text-muted">Target Dana:</span> <h4 class="text-dark mb-0">$20,000</h4></div>
                <div><span class="text-muted">Sisa Waktu:</span> <h4 class="text-secondary mb-0">18 Hari</h4></div>
              </div>
            </div>

            <h2 class="mb-3">Akses Pendidikan & Fasilitas Belajar Anak Prasejahtera</h2>
            <p class="text-muted leading-relaxed mb-4">Pendidikan adalah gerbang utama pemutus rantai kemiskinan antargenerasi. Sayangnya, ribuan anak di berbagai belahan dunia masih belum mendapatkan akses ke ruang kelas yang layak, seragam, dan buku paket yang memadai. Program ini ditujukan untuk merestorasi gedung sekolah yang rusak, menyediakan fasilitas perpustakaan mini, serta memberikan beasiswa penuh untuk biaya pendidikan tahunan.</p>

            <h4 class="mb-3">Tujuan & Target Program:</h4>
            <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
              <li class="d-flex align-items-center gap-2"><i class="fas fa-check text-success"></i> <span>Renovasi 5 gedung sekolah dasar di daerah tertinggal.</span></li>
              <li class="d-flex align-items-center gap-2"><i class="fas fa-check text-success"></i> <span>Distribusi 1.000 paket alat tulis dan buku edukasi.</span></li>
              <li class="d-flex align-items-center gap-2"><i class="fas fa-check text-success"></i> <span>Dukungan insentif untuk guru relawan yang mengajar.</span></li>
              <li class="d-flex align-items-center gap-2"><i class="fas fa-check text-success"></i> <span>Penyediaan makanan bergizi gratis setiap jam istirahat.</span></li>
            </ul>

            <div class="donation-cta p-4 bg-secondary text-white rounded d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
              <div>
                <h4 class="text-white mb-1">Siap Membantu Mereka Meraih Cita-Cita?</h4>
                <p class="mb-0 text-white-50">Setiap nominal donasi Anda sangat berarti bagi kelangsungan masa depan anak-anak ini.</p>
              </div>
              <a href="{{ route('donate') }}" class="btn-primary flex-shrink-0" style="padding: 12px 28px;">Donasi Sekarang</a>
            </div>
          </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
          <div class="sidebar p-4 bg-light rounded">
            <h4 class="blue mb-4 pb-2 border-bottom">Program Lainnya</h4>
            
            <div class="d-flex flex-column gap-3">
              <div class="d-flex gap-3 align-items-center">
                <img src="{{ asset('landing/images/indian-child-2021-09-03-12-46-58-utc.jpg') }}" alt="Thumb 1" class="rounded" style="width: 80px; height: 70px; object-fit: cover;">
                <div>
                  <h6 class="mb-1"><a href="{{ route('causes.detail') }}" class="blue">Sumur Air Bersih</a></h6>
                  <span class="small primary fw-bold">$12,000 / $20,000</span>
                </div>
              </div>

              <div class="d-flex gap-3 align-items-center">
                <img src="{{ asset('landing/images/young-volunteers-packing-clothes-2021-09-01-15-27-23-utc.jpg') }}" alt="Thumb 2" class="rounded" style="width: 80px; height: 70px; object-fit: cover;">
                <div>
                  <h6 class="mb-1"><a href="{{ route('causes.detail') }}" class="blue">Operasi Medis Gratis</a></h6>
                  <span class="small primary fw-bold">$26,400 / $30,000</span>
                </div>
              </div>

              <div class="d-flex gap-3 align-items-center">
                <img src="{{ asset('landing/images/volunteer_t20_jLXp2X.jpg') }}" alt="Thumb 3" class="rounded" style="width: 80px; height: 70px; object-fit: cover;">
                <div>
                  <h6 class="mb-1"><a href="{{ route('causes.detail') }}" class="blue">Bantuan Pangan Darurat</a></h6>
                  <span class="small primary fw-bold">$8,500 / $15,000</span>
                </div>
              </div>
            </div>

            <div class="mt-5 p-4 bg-white rounded shadow-sm text-center">
              <i class="fas fa-hand-holding-heart primary fa-3x mb-3"></i>
              <h5>Ingin Menjadi Relawan?</h5>
              <p class="small text-muted mb-3">Bergabunglah dengan ribuan relawan RoyalHeart di berbagai aksi sosial nyata.</p>
              <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-sm">Daftar Relawan</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Cause Detail Section End -->
@endsection
