@extends('landing.layouts.app')

@section('content')
  <!-- Breadcrumb Section Start -->
  <section class="breadcrumb position-relative d-flex align-items-center justify-content-center py-5">
    <div class="overlay"></div>
    <div class="container position-relative z-1 text-center white">
      <h1 class="white mb-3">About Us</h1>
      <ul class="list-unstyled d-flex justify-content-center gap-2 mb-0">
        <li><a href="{{ route('home') }}" class="white">Home</a></li>
        <li><span class="white">/</span></li>
        <li class="primary active fw-bold">About Us</li>
      </ul>
    </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- About Section Start -->
  <section class="about py-5">
    <div class="container">
      <div class="about-inner mb-5">
        <div class="row align-items-center gx-lg-5 gy-5">
          <div class="col-lg-6">
            <div class="about-left position-relative">
              <img src="{{ asset('landing/images/group-of-indian-children-in-a-small-village-near-gwalior-in-the-madhya-pradesh-region-of-india_t20_bzPEbV.jpg') }}" alt="about-image" class="w-100 rounded">
              <div class="exp-box playfair border border-5 border-white bg-secondary white h3 mb-0 fw-bold position-absolute text-center text-md-start p-3">
                <span>20+ Years Of <span class="d-block">Dedication</span></span>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about-right mb-0 ms-lg-2 text-center text-lg-start">
              <span class="blue playfair fw-bold h4">About RoyalHeart</span>
              <h2 class="mb-3 mt-1">Dedicated to Bringing Hope, Health & Education</h2>
              <p class="mb-3 text-muted">RoyalHeart didirikan dengan tekad untuk menjangkau setiap jiwa yang membutuhkan bantuan kemanusiaan. Kami bergerak di bidang penyediaan pangan, air bersih, fasilitas kesehatan, serta akses pendidikan bagi anak-anak di daerah prasejahtera.</p>
              <p class="mb-4 text-muted">Dengan transparansi penuh dan integritas tinggi, setiap rupiah donasi Anda disalurkan secara langsung untuk program pemberdayaan masyarakat dan tanggap darurat bencana.</p>
              <div class="row gy-3 mb-4 text-start">
                <div class="col-sm-6">
                  <div class="d-flex align-items-center gap-2">
                    <i class="fas fa-check-circle primary fa-lg"></i>
                    <span class="fw-semibold">100% Transparan & Akuntabel</span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="d-flex align-items-center gap-2">
                    <i class="fas fa-check-circle primary fa-lg"></i>
                    <span class="fw-semibold">Relawan Terlatih di 20+ Negara</span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="d-flex align-items-center gap-2">
                    <i class="fas fa-check-circle primary fa-lg"></i>
                    <span class="fw-semibold">Fasilitas Medis Cepat Tanggap</span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="d-flex align-items-center gap-2">
                    <i class="fas fa-check-circle primary fa-lg"></i>
                    <span class="fw-semibold">Program Beasiswa Berkelanjutan</span>
                  </div>
                </div>
              </div>
              <a href="{{ route('donate') }}" class="btn-primary mt-2">Mulai Berdonasi</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Feature Grid -->
      <div class="about-features mt-5">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6">
            <div class="feature-box p-4 border border-1 border-light text-center">
              <div class="feature-icon mb-4">
                <img src="{{ asset('landing/images/handshake.png') }}" alt="handshake icon" style="height: 60px;">
              </div>
              <div class="feature-info">
                <h4 class="mb-3"><a href="{{ route('causes.index') }}" class="blue">Help Child</a></h4>
                <p class="mb-0 text-muted">Menjamin kebutuhan nutrisi, perlindungan, dan masa depan anak-anak yatim piatu.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="feature-box p-4 border border-1 border-light text-center">
              <div class="feature-icon mb-4">
                <img src="{{ asset('landing/images/water-drop.png') }}" alt="water-drop icon" style="height: 60px;">
              </div>
              <div class="feature-info">
                <h4 class="mb-3"><a href="{{ route('causes.index') }}" class="blue">Pure Water</a></h4>
                <p class="mb-0 text-muted">Pembangunan sumur air bersih dan sanitasi higienis di pelosok desa.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="feature-box p-4 border border-1 border-light text-center">
              <div class="feature-icon mb-4">
                <img src="{{ asset('landing/images/heart-rate.png') }}" alt="heart-rate icon" style="height: 60px;">
              </div>
              <div class="feature-info">
                <h4 class="mb-3"><a href="{{ route('causes.index') }}" class="blue">Medical Care</a></h4>
                <p class="mb-0 text-muted">Layanan pengobatan gratis dan operasi darurat bagi masyarakat kurang mampu.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="feature-box p-4 border border-1 border-light text-center">
              <div class="feature-icon mb-4">
                <img src="{{ asset('landing/images/education.png') }}" alt="education icon" style="height: 60px;">
              </div>
              <div class="feature-info">
                <h4 class="mb-3"><a href="{{ route('causes.index') }}" class="blue">Education</a></h4>
                <p class="mb-0 text-muted">Penyediaan buku, seragam sekolah, renovasi ruang kelas, serta beasiswa belajar.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section End -->

  <!-- Stats Section Start -->
  <section class="stats position-relative py-5 bg-grey">
    <div class="container">
      <div class="row gy-4 text-center">
        <div class="col-lg-3 col-sm-6">
          <div class="stat-box p-4 bg-white rounded shadow-sm">
            <h2 class="primary fw-bold mb-1">50K+</h2>
            <p class="mb-0 text-muted fw-semibold">Anak Terbantu</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="stat-box p-4 bg-white rounded shadow-sm">
            <h2 class="primary fw-bold mb-1">$2.5M+</h2>
            <p class="mb-0 text-muted fw-semibold">Total Dana Terkumpul</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="stat-box p-4 bg-white rounded shadow-sm">
            <h2 class="primary fw-bold mb-1">1,200+</h2>
            <p class="mb-0 text-muted fw-semibold">Relawan Aktif</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="stat-box p-4 bg-white rounded shadow-sm">
            <h2 class="primary fw-bold mb-1">35+</h2>
            <p class="mb-0 text-muted fw-semibold">Negara Terjangkau</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Stats Section End -->
@endsection
