@extends('landing.layouts.app')

@section('content')
  <!-- Breadcrumb Section Start -->
  <section class="breadcrumb position-relative d-flex align-items-center justify-content-center py-5">
    <div class="overlay"></div>
    <div class="container position-relative z-1 text-center white">
      <h1 class="white mb-3">Contact Us</h1>
      <ul class="list-unstyled d-flex justify-content-center gap-2 mb-0">
        <li><a href="{{ route('home') }}" class="white">Home</a></li>
        <li><span class="white">/</span></li>
        <li class="primary active fw-bold">Kontak Kami</li>
      </ul>
    </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- Contact Section Start -->
  <section class="contact-section py-5">
    <div class="container">
      @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-5" role="alert">
          <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <div class="row gy-4 mb-5">
        <div class="col-lg-4 col-md-6">
          <div class="p-4 border border-1 border-light rounded text-center h-100 shadow-sm">
            <div class="mb-3 text-primary">
              <i class="fas fa-map-marked-alt fa-3x primary"></i>
            </div>
            <h4 class="blue mb-2">Alamat Kantor</h4>
            <p class="text-muted mb-0">3435 Railroad Street, Sault Sainte Marie, MI 49783</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="p-4 border border-1 border-light rounded text-center h-100 shadow-sm">
            <div class="mb-3 text-primary">
              <i class="fas fa-phone-volume fa-3x primary"></i>
            </div>
            <h4 class="blue mb-2">Telepon & WhatsApp</h4>
            <p class="text-muted mb-1">+1 (514) 312-5678</p>
            <p class="text-muted mb-0">+62 812-3456-7890</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="p-4 border border-1 border-light rounded text-center h-100 shadow-sm">
            <div class="mb-3 text-primary">
              <i class="far fa-envelope-open fa-3x primary"></i>
            </div>
            <h4 class="blue mb-2">Email Resmi</h4>
            <p class="text-muted mb-1">needhelp@royalheart.com</p>
            <p class="text-muted mb-0">info@royalheart.org</p>
          </div>
        </div>
      </div>

      <div class="row gy-5 align-items-center">
        <!-- Form Section -->
        <div class="col-lg-7">
          <div class="contact-form-wrapper p-4 p-md-5 bg-light rounded shadow-sm">
            <span class="blue playfair fw-bold h5">Hubungi Tim Kami</span>
            <h2 class="mb-3 mt-1">Kirimkan Pesan atau Pertanyaan Anda</h2>
            <p class="text-muted mb-4">Kami siap mendengar masukan, tawaran kolaborasi, atau pertanyaan seputar penyaluran donasi Anda.</p>

            <form action="{{ route('contact.submit') }}" method="POST">
              @csrf
              <div class="row gy-3">
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Nama Lengkap *</label>
                  <input type="text" name="name" class="form-control p-3" placeholder="Masukkan nama Anda" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Alamat Email *</label>
                  <input type="email" name="email" class="form-control p-3" placeholder="contoh@domain.com" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Nomor Telepon</label>
                  <input type="tel" name="phone" class="form-control p-3" placeholder="+62 8xx xxxx xxxx">
                </div>
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Subjek</label>
                  <input type="text" name="subject" class="form-control p-3" placeholder="Pertanyaan / Kolaborasi">
                </div>
                <div class="col-12">
                  <label class="form-label fw-semibold">Pesan Anda *</label>
                  <textarea name="message" rows="5" class="form-control p-3" placeholder="Tuliskan pesan Anda secara detail di sini..." required></textarea>
                </div>
                <div class="col-12 mt-4">
                  <button type="submit" class="btn-primary w-100 border-0 py-3 fw-bold">Kirim Pesan Sekarang</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- FAQ & Support Card -->
        <div class="col-lg-5">
          <div class="p-4 p-md-5 bg-secondary text-white rounded">
            <h3 class="text-white mb-4">Butuh Bantuan Cepat?</h3>
            
            <div class="d-flex gap-3 mb-4">
              <i class="fas fa-question-circle primary fa-2x"></i>
              <div>
                <h5 class="text-white mb-1">Pertanyaan Umum (FAQ)</h5>
                <p class="text-white-50 small mb-0">Pelajari tata cara penyaluran dana, bukti tanda terima resmi, dan verifikasi program.</p>
              </div>
            </div>

            <div class="d-flex gap-3 mb-4">
              <i class="fas fa-hand-holding-usd primary fa-2x"></i>
              <div>
                <h5 class="text-white mb-1">Konfirmasi Donasi Bank</h5>
                <p class="text-white-50 small mb-0">Bagi donatur melalui transfer bank langsung, Anda dapat mengonfirmasi bukti transfer melalui kontak WhatsApp tim kami.</p>
              </div>
            </div>

            <div class="d-flex gap-3 mb-4">
              <i class="fas fa-shield-alt primary fa-2x"></i>
              <div>
                <h5 class="text-white mb-1">Keamanan Data Donatur</h5>
                <p class="text-white-50 small mb-0">Informasi pribadi dan privasi Anda terjamin 100% aman dan terlindungi.</p>
              </div>
            </div>

            <a href="{{ route('donate') }}" class="btn-primary d-inline-block text-center w-100 mt-2 py-3">Berdonasi Sekarang</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section End -->
@endsection
