@extends('layouts.frontend.app')

@section('title', 'Contact Us - PT. Digital')

@section('content')
<style>
/* Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Arial', sans-serif;
}

body {
  background: #f7f7f7;
  color: #333;
}

/* Navbar */
.navbar {
  background: #111;
  color: white;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 50px;
}

.logo {
  display: flex;
  align-items: center;
  font-weight: bold;
}

.logo img {
  width: 30px;
  margin-right: 10px;
}

.navbar ul {
  list-style: none;
  display: flex;
  gap: 20px;
}

.navbar a {
  color: white;
  text-decoration: none;
  font-weight: 500;
}

.btn {
  background: red;
  color: white;
  padding: 8px 15px;
  border-radius: 5px;
  text-decoration: none;
  transition: 0.3s;
}

.btn:hover {
  background: darkred;
}

/* Contact Section */
.contact-section {
  padding: 50px 80px;
  text-align: center;
}

.contact-section h2 {
  font-size: 32px;
  margin-bottom: 30px;
  position: relative;
}

.contact-container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
  align-items: flex-start;
}

/* Contact Info */
.contact-info {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.box {
  background: #f1f1f1;
  padding: 20px;
  border-radius: 10px;
  text-align: left;
}

.box h3 {
  margin: 10px 0;
}

.box .icon {
  font-size: 24px;
  color: red;
}

/* Contact Form */
.contact-form {
  background: #f9f9f9;
  padding: 20px;
  border-radius: 10px;
}

.form-group {
  display: flex;
  gap: 15px;
  margin-bottom: 15px;
}

.contact-form input,
.contact-form textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.btn-submit {
  background: red;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: 0.3s;
}

.btn-submit:hover {
  background: darkred;
}

/* Info Section */
.info-section {
  background: #f4f4f4;
  padding: 50px 80px;
  margin-top: 50px;
}

.info-container {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  gap: 40px;
  align-items: flex-start;
}

/* Logo + Deskripsi */
.info-logo {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.info-logo h3 {
  color: #0056d2;
  margin: 0;
}

.info-logo p {
  line-height: 1.6;
}

/* Media Sosial */
.info-social h4 {
  font-size: 18px;
  margin-bottom: 15px;
  font-weight: bold;
}

.info-social ul {
  list-style: none;
  padding: 0;
}

.info-social li {
  margin-bottom: 12px;
  display: flex;
  align-items: center;
  gap: 10px;
}

.info-social img {
  width: 22px;
  height: 22px;
}

.info-social a {
  text-decoration: none;
  color: #111;
  transition: 0.3s;
}

.info-social a:hover {
  color: red;
}

/* Navigasi */
.info-nav ul {
  list-style: none;
  padding: 0;
}

.info-nav li {
  margin-bottom: 12px;
}

.info-nav a {
  text-decoration: none;
  color: #111;
  transition: 0.3s;
}

.info-nav a:hover {
  color: red;
}

/* Footer */
.footer {
  background: #111;
  color: #eee;
  text-align: center;
  padding: 30px 15px;
  margin-top: 50px;
}

.footer p {
  margin: 5px 0;
  font-size: 14px;
}

.footer a {
  color: red;
  text-decoration: none;
}

.footer a:hover {
  text-decoration: underline;
}

/* Responsive */
@media (max-width: 900px) {
  .contact-container {
    grid-template-columns: 1fr;
  }
  .contact-info {
    grid-template-columns: 1fr;
  }
  .info-container {
    grid-template-columns: 1fr;
    text-align: center;
  }
}
</style>

  <!-- Contact Section -->
  <section id="contact" class="contact-section">
    <h2>Contact</h2>
    <div class="contact-container">

      <!-- Contact Info -->
      <div class="contact-info">
        <div class="box">
          <i class="icon">📍</i>
          <h3>Address</h3>
          <p>LANGENSARI<br>KOTA BANJAR</p>
        </div>

        <div class="box">
          <i class="icon">📞</i>
          <h3>Call Us</h3>
          <p>088665078549<br>081939589398</p>
        </div>

        <div class="box">
          <i class="icon">📧</i>
          <h3>Email Us</h3>
          <p><a href="mailto:PT.Digital@gmail.com">PT.Digital@gmail.com</a><br>
             <a href="mailto:ptdigitalbanjar@gmail.com">ptdigitalbanjar@gmail.com</a></p>
        </div>

        <div class="box">
          <i class="icon">⏰</i>
          <h3>Open Hours</h3>
          <p>Monday - Friday<br>9:00AM - 20:00PM</p>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="contact-form">
        <form action="#">
          <div class="form-group">
            <input type="text" placeholder="NAMA" required>
            <input type="email" placeholder="EMAIL" required>
          </div>
          <input type="text" placeholder="Subject" required>
          <textarea placeholder="Description" rows="5" required></textarea>
          <button type="submit" class="btn-submit">Send Message</button>
        </form>
      </div>

    </div>
  </section>

  <!-- Info Section -->
  <section class="info-section">
    <div class="info-container">

      <!-- Logo + Deskripsi -->
      <div class="info-logo">
        <h3>PT. DIGITAL</h3>
        <p>
          “PT Digital hadir untuk menciptakan solusi teknologi yang inovatif, efisien,
          dan berdampak nyata bagi perkembangan bisnis di era digital.”
        </p>
      </div>

      <!-- Media Sosial -->
      <div class="info-social">
        <h4>Media Sosial</h4>
        <ul>
          <li>
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
            <a href="#">08778282111</a>
          </li>
          <li>
            <img src="https://img.icons8.com/color/48/facebook.png" alt="Facebook">
            <a href="#">PT_Digitalbanjar</a>
          </li>
          <li>
            <img src="https://img.icons8.com/color/48/twitter--v1.png" alt="Twitter">
            <a href="#">PT.Digital_Banjar</a>
          </li>
          <li>
            <img src="https://img.icons8.com/color/48/instagram-new.png" alt="Instagram">
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

    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2025 PT. Digital. All Rights Reserved.</p>
    <p>Made with ❤️ in Banjar | <a href="#">Privacy Policy</a></p>
  </footer>
@endsection
