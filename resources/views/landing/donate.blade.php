@extends('landing.layouts.app')

@section('content')
  <!-- Breadcrumb Section Start -->
  <section class="breadcrumb position-relative d-flex align-items-center justify-content-center py-5">
    <div class="overlay"></div>
    <div class="container position-relative z-1 text-center white">
      <h1 class="white mb-3">Donate Now</h1>
      <ul class="list-unstyled d-flex justify-content-center gap-2 mb-0">
        <li><a href="{{ route('home') }}" class="white">Home</a></li>
        <li><span class="white">/</span></li>
        <li class="primary active fw-bold">Donasi</li>
      </ul>
    </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- Donation Page Start -->
  <section class="donation-page py-5">
    <div class="container">
      <div class="text-center mb-5">
        <span class="blue playfair fw-bold h4">Bantu Mereka yang Membutuhkan</span>
        <h2 class="mt-2 mb-3">Formulir Donasi Kemanusiaan RoyalHeart</h2>
        <p class="text-muted mx-auto" style="max-width: 650px;">Berapapun jumlah yang Anda berikan akan sangat bermakna untuk menyelamatkan nyawa, memberikan makanan, dan membuka masa depan anak-anak.</p>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card border-0 shadow-sm p-4 p-md-5 bg-white rounded">
            <form action="{{ route('contact.submit') }}" method="POST">
              @csrf
              <!-- Program Selection -->
              <div class="mb-4">
                <label class="form-label fw-bold">Pilih Program Donasi</label>
                <select class="form-select p-3" required>
                  <option value="">-- Pilih Program Donasi --</option>
                  <option value="education">Akses Pendidikan Anak Prasejahtera</option>
                  <option value="water">Pembangunan Sumur Air Bersih</option>
                  <option value="medical">Bantuan Pengobatan & Operasi Gratis</option>
                  <option value="food">Paket Pangan Sembako Darurat Bencana</option>
                  <option value="general">Donasi Operasional Kemanusiaan Umum</option>
                </select>
              </div>

              <!-- Amount Selection -->
              <div class="mb-4">
                <label class="form-label fw-bold">Pilih Nominal Donasi (USD / IDR Equivalent)</label>
                <div class="row g-2 mb-3">
                  <div class="col-6 col-sm-3">
                    <input type="radio" class="btn-check" name="amount" id="amt1" value="10" checked>
                    <label class="btn btn-outline-warning w-100 py-3 fw-bold" for="amt1">$10</label>
                  </div>
                  <div class="col-6 col-sm-3">
                    <input type="radio" class="btn-check" name="amount" id="amt2" value="25">
                    <label class="btn btn-outline-warning w-100 py-3 fw-bold" for="amt2">$25</label>
                  </div>
                  <div class="col-6 col-sm-3">
                    <input type="radio" class="btn-check" name="amount" id="amt3" value="50">
                    <label class="btn btn-outline-warning w-100 py-3 fw-bold" for="amt3">$50</label>
                  </div>
                  <div class="col-6 col-sm-3">
                    <input type="radio" class="btn-check" name="amount" id="amt4" value="100">
                    <label class="btn btn-outline-warning w-100 py-3 fw-bold" for="amt4">$100</label>
                  </div>
                </div>

                <div class="input-group">
                  <span class="input-group-text">$</span>
                  <input type="number" class="form-control p-3" name="custom_amount" placeholder="Atau ketik nominal lainnya (Custom Amount)">
                </div>
              </div>

              <!-- Payment Method -->
              <div class="mb-4">
                <label class="form-label fw-bold">Metode Pembayaran</label>
                <div class="d-flex flex-wrap gap-3">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_method" id="pay_transfer" value="transfer" checked>
                    <label class="form-check-label fw-semibold" for="pay_transfer">
                      <i class="fas fa-university me-1 primary"></i> Transfer Bank / Virtual Account
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_method" id="pay_qris" value="qris">
                    <label class="form-check-label fw-semibold" for="pay_qris">
                      <i class="fas fa-qrcode me-1 primary"></i> QRIS / E-Wallet (GoPay, OVO, Dana)
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_method" id="pay_card" value="card">
                    <label class="form-check-label fw-semibold" for="pay_card">
                      <i class="far fa-credit-card me-1 primary"></i> Kartu Kredit / Debit
                    </label>
                  </div>
                </div>
              </div>

              <!-- Donor Information -->
              <div class="mb-4">
                <h5 class="blue mb-3 pb-2 border-bottom">Informasi Donatur</h5>
                <div class="row gy-3">
                  <div class="col-md-6">
                    <label class="form-label small fw-semibold">Nama Lengkap *</label>
                    <input type="text" name="name" class="form-control p-3" placeholder="Nama Anda" required>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label small fw-semibold">Alamat Email *</label>
                    <input type="email" name="email" class="form-control p-3" placeholder="email@contoh.com" required>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label small fw-semibold">Nomor Telepon / WhatsApp</label>
                    <input type="tel" name="phone" class="form-control p-3" placeholder="+62 8xxxxxxxxxx">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label small fw-semibold">Opsi Tampilan Nama</label>
                    <div class="form-check mt-2">
                      <input class="form-check-input" type="checkbox" id="is_anonymous" name="is_anonymous">
                      <label class="form-check-label small" for="is_anonymous">
                        Sembunyikan nama saya (Donatur Anonim / Hamba Allah)
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <label class="form-label small fw-semibold">Pesan / Doa Kebaikan (Opsional)</label>
                    <textarea name="notes" rows="3" class="form-control p-3" placeholder="Tuliskan doa atau pesan penyemangat bagi penerima manfaat..."></textarea>
                  </div>
                </div>
              </div>

              <button type="submit" class="btn-primary w-100 border-0 py-3 fw-bold text-center">Lanjutkan Pembayaran Donasi</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Donation Page End -->
@endsection
