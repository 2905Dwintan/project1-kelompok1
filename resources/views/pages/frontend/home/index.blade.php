@extends('layouts.frontend.app')

@section('title','Home - PT. Digital')

@push('styles')
<style>
/* --- Hero --- */
.hero {
  position: relative;
  background: url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
  height: calc(100vh - 70px);
}
.hero::before { content:""; position:absolute; inset:0; background:rgba(0,0,0,0.55); }
.hero-inner { position:relative; z-index:2; height:100%; display:flex; align-items:center; text-align:left; padding-left:60px; }
.hero h1 { font-size:2.6rem; line-height:1.05; color:white; }
.hero p.lead { color:#e6e6e6; max-width:600px; }
@media(max-width:768px){
  .hero h1 { font-size:1.8rem; }
  .hero-inner { padding-left:20px; }
}

/* --- Partners --- */
.partners-section { text-align:center; padding:60px 20px; background:#fff; }
.partners-logos { display:flex; justify-content:center; align-items:center; gap:50px; flex-wrap:wrap; margin-top:20px; }
.partners-logos img { height:60px; object-fit:contain; filter:grayscale(100%); transition:.3s; }
.partners-logos img:hover { filter:grayscale(0%); transform:scale(1.1); }

/* --- About (baru) --- */
.about-section { padding: 60px 10%; background: #fff; }
.about-container { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; }
.about-left h4 { color: #d32f2f; font-weight: 600; margin-bottom: 10px; }
.about-left h2 { font-size: 2rem; font-weight: 700; margin-bottom: 20px; }
.about-left p { color: #333; margin-bottom: 20px; line-height: 1.6; }
.btn-red { display: inline-block; padding: 10px 20px; background: #d32f2f; color: #fff; border-radius: 6px; text-decoration: none; font-weight: 600; }
.about-right { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
.about-right .card { background: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 6px 18px rgba(0,0,0,0.08); transition: 0.3s; }
.about-right .card:hover { transform: translateY(-5px); box-shadow: 0 12px 24px rgba(0,0,0,0.12); }
.about-right .card .icon { font-size: 28px; color: #d32f2f; margin-bottom: 10px; }
.about-right .card h3 { font-size: 16px; margin-bottom: 8px; }
.about-right .card p { font-size: 14px; color: #555; line-height: 1.5; }
@media(max-width: 900px){ .about-container { grid-template-columns: 1fr; } }

/* --- Services --- */
.services-section { padding:60px 20px; background:white; }
.services-section h2 { text-align:center; margin-bottom:40px; font-weight:bold; }
.services-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:20px; }
.services-grid .card { background:#fff; padding:15px; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.1); text-align:center; transition:.3s; }
.services-grid .card:hover { transform:translateY(-5px); }
.services-grid .img-wrap img { max-width:100%; border-radius:8px; }

/* --- Team --- */
.team-section { padding:60px 20px; background:#f9f9f9; }
.team-section h2 { text-align:center; margin-bottom:40px; font-weight:bold; }
.gallery-cards { display:flex; justify-content:center; gap:28px; flex-wrap:wrap; }
.gallery-cards .card { background:#fff; border-radius:14px; overflow:hidden; box-shadow:0 6px 18px rgba(0,0,0,0.08); display:flex; flex-direction:column; transition:.25s; max-width:280px; width:100%; }
.gallery-cards .card:hover { transform:translateY(-6px); box-shadow:0 12px 24px rgba(0,0,0,0.12); }
.gallery-cards .card img { width:100%; height:200px; object-fit:contain; padding:10px; background:#f9f9f9; border-bottom:1px solid #eee; }
.card-body { padding:16px 18px; display:flex; flex-direction:column; gap:12px; }
.card-body .role { font-size:13px; color:#666; }
.card-body h3 { font-size:15px; font-weight:700; line-height:1.5; color:#222; }
.profile .name { font-weight:600; margin:0; font-size:14px; }
.profile .date { font-size:12px; color:#777; }

/* --- Gallery --- */
.gallery-section { background:#fff; padding:60px 20px; }
.section-title { text-align:center; margin:40px 0 20px; position:relative; }
.section-title h2 {
  font-size:28px;
  font-weight:700;
  margin:0;
  display:inline-block;
  position:relative;
  color:#000;  /* Judul Gallery jadi hitam */
}
.section-title h2::after {
  content:"";
  width:50px;
  height:3px;
  background:#d32f2f;
  display:block;
  margin:8px auto 0;
  border-radius:2px;
}
.filter-menu { text-align:center; margin-bottom:30px; }
.filter-menu button { border:none; outline:none; padding:8px 16px; margin:0 5px; border-radius:20px; cursor:pointer; font-size:14px; background:#eee; color:#111; transition:.3s; }
.filter-menu button.active, .filter-menu button:hover { background:#e53935; color:#fff; }
.gallery { display:grid; grid-template-columns:repeat(3,1fr); gap:20px; width:85%; margin:auto; }
.gallery img { width:100%; height:200px; object-fit:cover; border-radius:6px; box-shadow:0 4px 10px rgba(0,0,0,0.1); transition:.3s; }
.gallery img:hover { transform:scale(1.05); }

/* --- Testimonial --- */
.testimonial-section { display:flex; justify-content:space-between; align-items:center; padding:60px 10%; background:#f5f5f5; }
.testimonial-text { flex:1; font-size:18px; line-height:1.6; color:#333; padding-right:30px; }
.testimonial-text p { font-style:italic; }
.testimonial-card { flex:1; background:#fff; border-radius:10px; padding:20px; box-shadow:0 4px 12px rgba(0,0,0,0.1); max-width:400px; }
.testimonial-header { display:flex; align-items:center; margin-bottom:15px; }
.testimonial-header img { width:60px; height:60px; border-radius:50%; margin-right:15px; object-fit:cover; }
.testimonial-header .info { display:flex; flex-direction:column; }
.testimonial-header .info strong { font-size:16px; color:#222; }
.testimonial-header .info span { font-size:13px; color:#777; }
.stars { color:#ffb400; margin:5px 0; }
.testimonial-card p { font-size:14px; color:#444; font-style:italic; position:relative; }
.testimonial-card p::before { content:"“"; font-size:24px; color:#e53935; position:absolute; left:-10px; top:-10px; }
.testimonial-card p::after { content:"”"; font-size:24px; color:#e53935; position:absolute; right:-10px; bottom:-15px; }
@media(max-width:900px){ .testimonial-section { flex-direction:column; text-align:center; } .testimonial-text { padding-right:0; margin-bottom:30px; } .testimonial-card { max-width:100%; } }

/* --- Info Section --- */
.info-section { background:#f4f4f4; padding:50px 80px; }
.info-container { display:grid; grid-template-columns:1fr 1fr 1fr; gap:40px; align-items:flex-start; }
.info-logo { display:flex; flex-direction:column; gap:15px; }
.info-logo h3 { color:#0056d2; margin:0; }
.info-logo p { line-height:1.6; color:#111; }
.info-social h4 { font-size:18px; margin-bottom:15px; font-weight:bold; color:#111; }
.info-social ul { list-style:none; padding:0; }
.info-social li { margin-bottom:12px; display:flex; align-items:center; gap:10px; color:#111; }
.info-social img { width:22px; height:22px; }
.info-social a { text-decoration:none; color:#000 !important; transition:.3s; }
.info-social a:hover { color:red; }
.info-nav ul { list-style:none; padding:0; }
.info-nav li { margin-bottom:12px; }
.info-nav a { text-decoration:none; color:#111; transition:.3s; }
.info-nav a:hover { color:red; }
@media(max-width:900px){ .info-container { grid-template-columns:1fr; text-align:center; } }
</style>
@endpush


@section('content')

<!-- Hero -->
<section class="hero">
  <div class="hero-inner">
    <div>
      <h1 class="fw-bold">Selamat datang di <span style="color:white">PT. Digital</span></h1>
      <p class="lead mt-3">Pusat layanan digital yang menghadirkan website, aplikasi, dan solusi software sesuai kebutuhan Anda.</p>
    </div>
  </div>
</section>

<!-- Partners -->
<section class="partners-section">
  <h2 class="fw-bold">Our Partners</h2>
  <div class="partners-logos">
    <img src="https://c8.alamy.com/comp/2XX3N5M/microsoft-azure-logo-2XX3N5M.jpg" alt="Azure">
    <img src="https://eduidea.id/wp-content/uploads/2023/09/6-Best-AWS-Training-Course-for-AWS-Certification.jpg" alt="AWS">
    <img src="https://xendit.co/wp-content/uploads/2020/03/Xendit-3.jpg" alt="Xendit">
    <img src="https://miro.medium.com/1*JLYlSLSK8-AZo8gt9UdYqA.jpeg" alt="GitHub">
    <img src="https://www.itechh.ne.jp/blog/assets_c/2021/09/gcp-logo-1200-thumb-1200x900-68.jpg" alt="Google Cloud">
    <img src="https://static.tek.id/2021/04/15/39671/kesepakatan-merger-gojek-dan-tokopedia-bakal-selesai-bulan-ini-0NhWh96vqo.jpg" alt="Gojek">
    <img src="https://media.licdn.com/dms/image/v2/C510BAQHCeGO-u3T76w/company-logo_200_200/company-logo_200_200/0/1630605033711/doku_indonesia_logo?e=2147483647&v=beta&t=cpBv-nbAvxFsEMPvInM0vZxFn6wi-xKUtEP10yIhzKE" alt="Doku">
  </div>
</section>

<!-- About Us -->
<section class="about-section">
  <div class="about-container">
    <div class="about-left">
      <h4>About Us</h4>
      <h2>PT. DIGITAL</h2>
      <p>PT. Digital adalah perusahaan yang bergerak di bidang Public Relations dan Digital Marketing.
        Kami sejak 2015 dan berkomitmen membantu brand meningkatkan reputasi dan visibilitas secara online.</p>
      <a href="#" class="btn-red">Read More →</a>
    </div>
    <div class="about-right">
      <div class="card"><div class="icon">🎯</div><h3>Visi</h3><p>Menjadi agensi PT. Digital terkemuka di Asia Tenggara</p></div>
      <div class="card"><div class="icon">🚀</div><h3>Misi</h3><p>Memberikan solusi komunikasi yang kreatif & efektif.</p></div>
      <div class="card"><div class="icon">💼</div><h3>Layanan</h3><p>PT. Campaign, Digital Marketing, Brand Management.</p></div>
      <div class="card"><div class="icon">⭐</div><h3>Keunggulan</h3><p>Tim profesional & strategi berbasis data.</p></div>
    </div>
  </div>
</section>

<!-- Services -->
<section class="services-section">
  <h2>Our Services</h2>
  <div class="services-grid">
    <div class="card"><div class="img-wrap"><img src="https://mousmedia.com/wp-content/uploads/2020/10/Development-Testing.jpg" alt="Web Development"></div><h3>Web Development</h3><p>Kami membangun website modern, cepat, dan responsif.</p></div>
    <div class="card"><div class="img-wrap"><img src="https://www.techosquare.com/images/blog/web-app-development-process-model-home.jpg" alt="Mobile App Development"></div><h3>Mobile App Development</h3><p>Solusi aplikasi Android & iOS dengan performa tinggi.</p></div>
    <div class="card"><div class="img-wrap"><img src="https://kledo.com/blog/wp-content/uploads/2022/08/customer-development-01.jpg" alt="Custom Software"></div><h3>Custom Software</h3><p>Pembuatan aplikasi sesuai kebutuhan bisnis Anda.</p></div>
  </div>
</section>

<!-- Tenaga Kerja -->
<section class="team-section">
  <h2>Tenaga Kerja</h2>
  <div class="gallery-cards">
    <div class="card"><img src="https://img.lovepik.com/photo/20211124/medium/lovepik-business-women-work-office-picture_500975739.jpg" alt="CEO"><div class="card-body"><span class="role">CEO</span><h3>Memimpin strategi perusahaan.</h3><p class="name">Dwi Intan</p><span class="date">Mei 28 2025</span></div></div>
    <div class="card"><img src="https://img.lovepik.com/photo/50071/4773.jpg_wh860.jpg" alt="CTO"><div class="card-body"><span class="role">CTO</span><h3>Bertanggung jawab atas pengembangan teknologi.</h3><p class="name">Decha</p><span class="date">Agustus 01 2025</span></div></div>
    <div class="card"><img src="https://img.lovepik.com/photo/20211122/medium/lovepik-ms-commerce-works-in-the-office-picture_500704658.jpg" alt="PM"><div class="card-body"><span class="role">Project Manager</span><h3>Mengatur jalannya proyek agar tepat waktu.</h3><p class="name">Biancha</p><span class="date">Juni 20 2025</span></div></div>
  </div>
</section>

<!-- Gallery -->
<section class="gallery-section">
  <div class="section-title"><h2>Gallery</h2></div>
  <div class="filter-menu">
    <button class="active">All</button><button>App</button><button>Web</button>
  </div>
  <div class="gallery">
    <img src="https://img.freepik.com/free-photo/operation-process-performance-development-icon_53876-16541.jpg" alt="">
    <img src="https://bsi.uii.ac.id/wp-content/uploads/2023/11/SDLC-1030x1027.png" alt="">
    <img src="https://www.sphinx-solution.com/blog/wp-content/uploads/2022/07/Software-Development-Process-1024x765.png" alt="">
    <img src="https://astizardiaz.wordpress.com/wp-content/uploads/2016/12/sdlc.jpg" alt="">
    <img src="https://reframepositive.com/wp-content/uploads/2022/07/20943611-scaled.jpg" alt="">
    <img src="https://www.creativefabrica.com/wp-content/uploads/2022/10/11/Development-icon-Graphics-41176066-1.jpg" alt="">
  </div>
</section>

<!-- Testimonial -->
<section class="testimonial-section">
  <div class="testimonial-text">
    <p>“Kami di <b>PT.DIGITAL</b> berkomitmen memberikan solusi digital inovatif yang membantu bisnis berkembang lebih cepat.”</p>
  </div>
  <div class="testimonial-card">
    <div class="testimonial-header">
      <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client">
      <div class="info"><strong>NABILA</strong><span>Business Owner</span></div>
    </div>
    <div class="stars">★★★★★</div>
    <p>Layanan PT Digital cepat, profesional, dan hasilnya memuaskan.</p>
  </div>
</section>

<!-- Info Section -->
<section class="info-section">
  <div class="info-container">
    <!-- Logo dan Deskripsi -->
    <div class="info-logo">
      <h3>PT. DIGITAL</h3>
      <p>
        Perusahaan layanan teknologi dan digital marketing terpercaya sejak 2015.
        Kami hadir untuk membantu bisnis Anda tumbuh dan berkembang di era digital.
      </p>
    </div>

    <!-- Media Sosial -->
      <div class="info-social">
        <h4>Media Sosial</h4>
        <ul>
          <li>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/1022px-WhatsApp.svg.png" alt="WhatsApp">
            <a href="#">08778282111</a>
          </li>
          <li>
            <img src="https://img.freepik.com/premium-psd/facebook-logo-icon_705838-12833.jpg?semt=ais_hybrid&w=740&q=80" alt="Facebook">
            <a href="#">PT_Digitalbanjar</a>
          </li>
          <li>
            <img src="https://img.freepik.com/premium-vector/twitter-vector-logo-logotype-vector-sociale-media_901408-401.jpg?semt=ais_hybrid&w=740&q=80" alt="Twitter">
            <a href="#">PT.Digital_Banjar</a>
          </li>
          <li>
            <img src="https://cdn.antaranews.com/cache/1200x800/2016/05/20160512logo_baru_instagram.jpg" alt="Instagram">
            <a href="#">PT.DIGITAL_Banjar</a>
          </li>
        </ul>
      </div>

     <!-- Navigasi -->
      <div class="info-nav">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Sejarah</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
@endsection
