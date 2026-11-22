@extends('landing.layouts.app')

@section('content')
  <!-- Breadcrumb Section Start -->
  <section class="breadcrumb position-relative d-flex align-items-center justify-content-center py-5">
    <div class="overlay"></div>
    <div class="container position-relative z-1 text-center white">
      <h1 class="white mb-3">Our Events</h1>
      <ul class="list-unstyled d-flex justify-content-center gap-2 mb-0">
        <li><a href="{{ route('home') }}" class="white">Home</a></li>
        <li><span class="white">/</span></li>
        <li class="primary active fw-bold">Events</li>
      </ul>
    </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- Events Section Start -->
  <section class="events-section py-5">
    <div class="container">
      <div class="text-center mb-5">
        <span class="blue playfair fw-bold h4">Agenda & Kegiatan Amal</span>
        <h2 class="mt-2 mb-3">Ikuti Kegiatan Sosial RoyalHeart Mendatang</h2>
        <p class="text-muted mx-auto" style="max-width: 650px;">Hadiri dan berpartisipasilah secara langsung dalam berbagai program kemanusiaan, seminar amal, dan bakti sosial yang kami selenggarakan.</p>
      </div>

      <div class="row gy-4">
        <!-- Event 1 -->
        <div class="col-lg-4 col-md-6">
          <div class="event-card card border-0 shadow-sm h-100 overflow-hidden">
            <div class="position-relative">
              <img src="{{ asset('landing/images/volunteers-with-garbage-outdoors-2021-08-28-11-56-56-utc.jpg') }}" class="card-img-top" alt="Event 1" style="height: 220px; object-fit: cover;">
              <div class="position-absolute bottom-0 start-0 bg-primary text-white p-2 px-3 fw-bold small">
                <i class="far fa-calendar-alt me-1"></i> 15 Des 2026
              </div>
            </div>
            <div class="card-body p-4 d-flex flex-column">
              <div class="d-flex gap-3 text-muted small mb-2">
                <span><i class="fas fa-map-marker-alt primary me-1"></i> Jakarta Pusat</span>
                <span><i class="far fa-clock primary me-1"></i> 08:00 - 14:00</span>
              </div>
              <h4 class="card-title mb-2"><a href="{{ route('events.detail') }}" class="blue">Bakti Sosial Bersih Lingkungan & Edukasi Sampah</a></h4>
              <p class="card-text text-muted flex-grow-1 small">Aksi gotong royong pembersihan aliran sungai dan workshop pemilahan sampah plastik bersama komunitas lokal.</p>
              <div class="mt-3">
                <a href="{{ route('events.detail') }}" class="btn btn-outline-primary w-100">Ikuti Kegiatan</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Event 2 -->
        <div class="col-lg-4 col-md-6">
          <div class="event-card card border-0 shadow-sm h-100 overflow-hidden">
            <div class="position-relative">
              <img src="{{ asset('landing/images/young-volunteers-packing-clothes-2021-09-01-15-27-23-utc.jpg') }}" class="card-img-top" alt="Event 2" style="height: 220px; object-fit: cover;">
              <div class="position-absolute bottom-0 start-0 bg-primary text-white p-2 px-3 fw-bold small">
                <i class="far fa-calendar-alt me-1"></i> 22 Des 2026
              </div>
            </div>
            <div class="card-body p-4 d-flex flex-column">
              <div class="d-flex gap-3 text-muted small mb-2">
                <span><i class="fas fa-map-marker-alt primary me-1"></i> Bandung</span>
                <span><i class="far fa-clock primary me-1"></i> 09:00 - 16:00</span>
              </div>
              <h4 class="card-title mb-2"><a href="{{ route('events.detail') }}" class="blue">Packing & Distribusi Bantuan Pakaian Musim Dingin</a></h4>
              <p class="card-text text-muted flex-grow-1 small">Mempersiapkan ribuan selimut, baju hangat, dan paket sembako untuk disalurkan ke korban bencana alam.</p>
              <div class="mt-3">
                <a href="{{ route('events.detail') }}" class="btn btn-outline-primary w-100">Ikuti Kegiatan</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Event 3 -->
        <div class="col-lg-4 col-md-6">
          <div class="event-card card border-0 shadow-sm h-100 overflow-hidden">
            <div class="position-relative">
              <img src="{{ asset('landing/images/male-volunteer-holding-cardboard-box-2021-09-01-15-27-23-utc.jpg') }}" class="card-img-top" alt="Event 3" style="height: 220px; object-fit: cover;">
              <div class="position-absolute bottom-0 start-0 bg-primary text-white p-2 px-3 fw-bold small">
                <i class="far fa-calendar-alt me-1"></i> 05 Jan 2027
              </div>
            </div>
            <div class="card-body p-4 d-flex flex-column">
              <div class="d-flex gap-3 text-muted small mb-2">
                <span><i class="fas fa-map-marker-alt primary me-1"></i> Surabaya</span>
                <span><i class="far fa-clock primary me-1"></i> 10:00 - 15:00</span>
              </div>
              <h4 class="card-title mb-2"><a href="{{ route('events.detail') }}" class="blue">Konser Amal & Penggalangan Dana Peduli Anak</a></h4>
              <p class="card-text text-muted flex-grow-1 small">Malam pertunjukan seni dan pelelangan karya seni amal demi mengumpulkan dana operasional rumah singgah.</p>
              <div class="mt-3">
                <a href="{{ route('events.detail') }}" class="btn btn-outline-primary w-100">Ikuti Kegiatan</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Events Section End -->
@endsection
