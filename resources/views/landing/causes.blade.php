@extends('landing.layouts.app')

@section('content')
  <!-- Breadcrumb Section Start -->
  <section class="breadcrumb position-relative d-flex align-items-center justify-content-center py-5">
    <div class="overlay"></div>
    <div class="container position-relative z-1 text-center white">
      <h1 class="white mb-3">Our Causes</h1>
      <ul class="list-unstyled d-flex justify-content-center gap-2 mb-0">
        <li><a href="{{ route('home') }}" class="white">Home</a></li>
        <li><span class="white">/</span></li>
        <li class="primary active fw-bold">Causes</li>
      </ul>
    </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- Causes Section Start -->
  <section class="causes-section py-5">
    <div class="container">
      <div class="text-center mb-5">
        <span class="blue playfair fw-bold h4">Program Bantuan Kemanusiaan</span>
        <h2 class="mt-2 mb-3">Dukung Program Prioritas RoyalHeart</h2>
        <p class="text-muted mx-auto" style="max-width: 650px;">Setiap kontribusi yang Anda berikan adalah nafas baru bagi mereka yang membutuhkan. Pilih program amal di bawah ini dan jadilah bagian dari perubahan positif.</p>
      </div>

      <div class="row gy-4">
        <!-- Cause Item 1 -->
        <div class="col-lg-4 col-md-6">
          <div class="cause-box card h-100 border-0 shadow-sm overflow-hidden">
            <div class="cause-img position-relative">
              <img src="{{ asset('landing/images/children-left-alone-after-hostilities-2021-09-24-02-51-49-utc.jpg') }}" class="card-img-top" alt="Cause 1" style="height: 240px; object-fit: cover;">
              <span class="badge bg-warning position-absolute top-0 end-0 m-3 px-3 py-2 text-dark fw-bold">Pendidikan</span>
            </div>
            <div class="card-body p-4 d-flex flex-column">
              <h4 class="card-title mb-3"><a href="{{ route('causes.detail') }}" class="blue">Akses Pendidikan Anak Prasejahtera</a></h4>
              <p class="card-text text-muted flex-grow-1">Memberikan perlengkapan sekolah, buku pelajaran, dan biaya SPP bagi 1.000 anak di pedalaman.</p>
              
              <div class="progress-bar-section my-3">
                <div class="progress" style="height: 10px;">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex justify-content-between mt-2 small">
                  <div><span class="text-muted">Terkumpul:</span> <strong class="primary">$15,000</strong></div>
                  <div><span class="text-muted">Target:</span> <strong>$20,000</strong></div>
                </div>
              </div>

              <div class="d-flex gap-2 mt-2">
                <a href="{{ route('causes.detail') }}" class="btn btn-outline-secondary w-50">Detail</a>
                <a href="{{ route('donate') }}" class="btn btn-primary w-50">Donasi</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Cause Item 2 -->
        <div class="col-lg-4 col-md-6">
          <div class="cause-box card h-100 border-0 shadow-sm overflow-hidden">
            <div class="cause-img position-relative">
              <img src="{{ asset('landing/images/indian-child-2021-09-03-12-46-58-utc.jpg') }}" class="card-img-top" alt="Cause 2" style="height: 240px; object-fit: cover;">
              <span class="badge bg-info position-absolute top-0 end-0 m-3 px-3 py-2 text-white fw-bold">Air Bersih</span>
            </div>
            <div class="card-body p-4 d-flex flex-column">
              <h4 class="card-title mb-3"><a href="{{ route('causes.detail') }}" class="blue">Sumur Air Bersih untuk Desa Kekeringan</a></h4>
              <p class="card-text text-muted flex-grow-1">Pengeboran sumur artesis dan instalasi filter air higienis untuk 500 kepala keluarga terdampak kemarau panjang.</p>
              
              <div class="progress-bar-section my-3">
                <div class="progress" style="height: 10px;">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex justify-content-between mt-2 small">
                  <div><span class="text-muted">Terkumpul:</span> <strong class="primary">$12,000</strong></div>
                  <div><span class="text-muted">Target:</span> <strong>$20,000</strong></div>
                </div>
              </div>

              <div class="d-flex gap-2 mt-2">
                <a href="{{ route('causes.detail') }}" class="btn btn-outline-secondary w-50">Detail</a>
                <a href="{{ route('donate') }}" class="btn btn-primary w-50">Donasi</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Cause Item 3 -->
        <div class="col-lg-4 col-md-6">
          <div class="cause-box card h-100 border-0 shadow-sm overflow-hidden">
            <div class="cause-img position-relative">
              <img src="{{ asset('landing/images/young-volunteers-packing-clothes-2021-09-01-15-27-23-utc.jpg') }}" class="card-img-top" alt="Cause 3" style="height: 240px; object-fit: cover;">
              <span class="badge bg-danger position-absolute top-0 end-0 m-3 px-3 py-2 text-white fw-bold">Kesehatan</span>
            </div>
            <div class="card-body p-4 d-flex flex-column">
              <h4 class="card-title mb-3"><a href="{{ route('causes.detail') }}" class="blue">Penyediaan Obat & Operasi Medis Gratis</a></h4>
              <p class="card-text text-muted flex-grow-1">Bantuan medis cepat tanggap untuk pengobatan katarak, bibir sumbing, dan nutrisi gizi buruk balita.</p>
              
              <div class="progress-bar-section my-3">
                <div class="progress" style="height: 10px;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 88%;" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex justify-content-between mt-2 small">
                  <div><span class="text-muted">Terkumpul:</span> <strong class="primary">$26,400</strong></div>
                  <div><span class="text-muted">Target:</span> <strong>$30,000</strong></div>
                </div>
              </div>

              <div class="d-flex gap-2 mt-2">
                <a href="{{ route('causes.detail') }}" class="btn btn-outline-secondary w-50">Detail</a>
                <a href="{{ route('donate') }}" class="btn btn-primary w-50">Donasi</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Causes Section End -->
@endsection
