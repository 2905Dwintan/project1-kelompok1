@extends('layouts.frontend.app')

@section('title', 'Sejarah - PT.DIGITAL')

@section('content')
<style>
  body {
    font-family: Arial, sans-serif;
    background: #180202;
    margin: 0;
    padding: 0;
  }

  .history-section {
    padding: 60px 10%;
    text-align: center;
    background: #fff; /* ✅ ubah jadi putih */
  }

  .history-section h2 {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #000; /* ✅ warna hitam */
  }

  .history-section .underline {
    width: 80px;
    height: 3px;
    background: #e53935;
    margin: 0 auto 40px auto;
  }

  .history-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* selalu 3 kolom di desktop */
    gap: 25px;
  }

  .history-card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    text-align: left;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .history-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.15);
  }

  .history-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
  }

  .history-card p {
    padding: 15px;
    font-size: 15px;
    color: #444;
    line-height: 1.6;
  }

  @media (max-width: 992px) {
    .history-grid {
      grid-template-columns: repeat(2, 1fr); /* 2 kartu per baris tablet */
    }
  }

  @media (max-width: 768px) {
    .history-section {
      padding: 40px 20px;
    }
    .history-grid {
      grid-template-columns: 1fr; /* 1 kartu per baris mobile */
    }
  }
</style>

<section class="history-section">
  <h2>Sejarah</h2>
  <div class="underline"></div>

  <div class="history-grid">
    <!-- Card 1 -->
    <div class="history-card">
      <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1671333079/attached_image/5-tips-menjaga-produktivitas-kerja-di-kantor.jpg" alt="Sejarah 1">
      <p>Perusahaan PT.DIGITAL resmi berdiri dengan tim kecil beranggotakan 5 orang.</p>
    </div>

    <!-- Card 2 -->
    <div class="history-card">
      <img src="https://img.freepik.com/foto-gratis/proses-kolaboratif-para-pebisnis-multikultural-menggunakan-presentasi-laptop-dan-pertemuan-komunikasi-bertukar-pikiran-tentang-rekan-kerja-proyek-yang-bekerja-merencanakan-strategi-kesuksesan-di-kantor-modern_7861-2510.jpg?semt=ais_hybrid&w=740&q=80" alt="Sejarah 2">
      <p>Membuka cabang baru dan memperluas layanan digital marketing berbasis AI.</p>
    </div>

    <!-- Card 3 -->
    <div class="history-card">
      <img src="https://cdn.sejutacita.id/dealls-blog-cms/kerja_kantoran_e44a246b78.jpg" alt="Sejarah 3">
      <p>Menjadi salah satu agensi PT.DIGITAL terkemuka di Asia Tenggara.</p>
    </div>

    <!-- Card 4 -->
    <div class="history-card">
      <img src="https://ayosehat.kemkes.go.id/imagex/content/384d2ec3f656c7dd000c634df24d43c4.jpg" alt="Sejarah 4">
      <p>PT.DIGITAL berdiri, fokus pada pembuatan website untuk UMKM.</p>
    </div>

    <!-- Card 5 -->
    <div class="history-card">
      <img src="https://jurnalkawasan.com/storage/app/uploads/public/645/22b/748/64522b748cebb576823269.jpeg" alt="Sejarah 5">
      <p>Sekarang – Menjadi mitra transformasi digital bagi berbagai bisnis di Indonesia.</p>
    </div>

    <!-- Card 6 -->
    <div class="history-card">
      <img src="https://media.suara.com/pictures/653x366/2022/09/05/74443-ilustrasi-bekerjafreepikcomtirachardz.jpg" alt="Sejarah 6">
      <p>Layanan berkembang ke aplikasi mobile & software custom.</p>
    </div>
  </div>
</section>
@endsection
