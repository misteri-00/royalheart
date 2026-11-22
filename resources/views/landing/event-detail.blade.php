@extends('landing.layouts.app')

@section('content')
  <!-- Breadcrumb Section Start -->
  <section class="breadcrumb position-relative d-flex align-items-center justify-content-center py-5">
    <div class="overlay"></div>
    <div class="container position-relative z-1 text-center white">
      <h1 class="white mb-3">Event Details</h1>
      <ul class="list-unstyled d-flex justify-content-center gap-2 mb-0">
        <li><a href="{{ route('home') }}" class="white">Home</a></li>
        <li><span class="white">/</span></li>
        <li><a href="{{ route('events.index') }}" class="white">Events</a></li>
        <li><span class="white">/</span></li>
        <li class="primary active fw-bold">Detail Kegiatan</li>
      </ul>
    </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- Event Detail Section Start -->
  <section class="event-detail-section py-5">
    <div class="container">
      <div class="row gy-5">
        <div class="col-lg-8">
          <img src="{{ asset('landing/images/volunteers-with-garbage-outdoors-2021-08-28-11-56-56-utc.jpg') }}" alt="Event Detail" class="w-100 rounded mb-4" style="max-height: 440px; object-fit: cover;">
          
          <div class="d-flex flex-wrap gap-4 p-3 bg-light rounded mb-4 text-muted small">
            <div><i class="far fa-calendar-alt primary me-1"></i> Tanggal: <strong>15 Desember 2026</strong></div>
            <div><i class="far fa-clock primary me-1"></i> Waktu: <strong>08:00 - 14:00 WIB</strong></div>
            <div><i class="fas fa-map-marker-alt primary me-1"></i> Lokasi: <strong>Taman Suropati, Jakarta Pusat</strong></div>
            <div><i class="fas fa-users primary me-1"></i> Kuota: <strong>150 Peserta</strong></div>
          </div>

          <h2 class="mb-3">Bakti Sosial Bersih Lingkungan & Edukasi Sampah</h2>
          <p class="text-muted leading-relaxed mb-4">Kegiatan ini merupakan kolaborasi terbuka antara tim relawan RoyalHeart, komunitas pencinta alam, serta warga setempat untuk memulihkan kebersihan kawasan aliran sungai dan ruang publik. Selain aksi bersih-bersih, peserta juga akan mendapatkan edukasi mengenai pemilahan sampah organik dan anorganik serta cara daur ulang sederhana bernilai ekonomis.</p>

          <h4 class="mb-3">Jadwal Susunan Acara (Rundown):</h4>
          <div class="table-responsive mb-4">
            <table class="table table-bordered">
              <thead class="table-light">
                <tr>
                  <th style="width: 160px;">Waktu</th>
                  <th>Agenda Kegiatan</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>08:00 - 08:30</td>
                  <td>Registrasi & Pengambilan Perlengkapan</td>
                  <td>Kaos, sarung tangan, trash bag disediakan panitia</td>
                </tr>
                <tr>
                  <td>08:30 - 09:00</td>
                  <td>Briefing & Pembagian Kelompok Aksi</td>
                  <td>Dipandu oleh koordinator lapangan</td>
                </tr>
                <tr>
                  <td>09:00 - 12:00</td>
                  <td>Aksi Bersih Lingkungan & Pemilahan Sampah</td>
                  <td>Penyisiran di 4 zona target pembersihan</td>
                </tr>
                <tr>
                  <td>12:00 - 13:00</td>
                  <td>Makan Siang & Istirahat</td>
                  <td>Disediakan konsumsi ramah lingkungan</td>
                </tr>
                <tr>
                  <td>13:00 - 14:00</td>
                  <td>Workshop Edukasi Daur Ulang & Penutupan</td>
                  <td>Sesi interaktif dan pembagian sertifikat relawan</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Sidebar Registration -->
        <div class="col-lg-4">
          <div class="card border-0 shadow-sm p-4 bg-light">
            <h4 class="blue mb-3 pb-2 border-bottom">Daftar Sebagai Peserta</h4>
            <p class="small text-muted mb-4">Pendaftaran terbuka untuk umum dan tidak dipungut biaya apapun (Gratis). Silakan isi data diri Anda di bawah ini:</p>
            
            <form action="{{ route('contact.submit') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label small fw-bold">Nama Lengkap</label>
                <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
              </div>
              <div class="mb-3">
                <label class="form-label small fw-bold">Email</label>
                <input type="email" name="email" class="form-control" placeholder="alamat@email.com" required>
              </div>
              <div class="mb-3">
                <label class="form-label small fw-bold">Nomor WhatsApp</label>
                <input type="tel" name="phone" class="form-control" placeholder="08xxxxxxxxxx" required>
              </div>
              <div class="mb-3">
                <label class="form-label small fw-bold">Catatan / Kebutuhan Khusus</label>
                <textarea name="message" class="form-control" rows="3" placeholder="Opsional..."></textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Konfirmasi Kehadiran</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Event Detail Section End -->
@endsection
