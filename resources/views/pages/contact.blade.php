<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact us</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <style>
        /* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
html {
  scroll-behavior: smooth;
}
section {
  scroll-margin-top: 80px;
}
:root {
  /* Root Colors */
  --primary-color: #0f172a;
  --secondary-color: #f97316;
  --tertiary-color: blue;
  /* Supporting Colors */
  --text-color: #ffffff;
  --light-gray: #f1f1f1;
  --dark-gray: #1f2937;
  --bg-color: #111827;
  --text: #e5e7eb;

  /* Optional */
  --border-radius: 10px;
  --transition: 0.3s ease;
  --shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  --box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
  --animation: fadeIn 0.5s ease;
  --transform: translateY(-5px);
  --hover: opacity(0.9);
}

body.dark {
  background: var(--primary-color);
  color: var(--text-color);
}

/* Header Styles */
.header {
  padding: 10px;
  width: 100%;
  min-height: 70px;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-evenly;
  background-color: var(--primary-color);
  color: var(--text-color);
}

/* Logo */
#logo img {
  width: 12em;
}

.header ul {
  display: flex;
}

.header ul li {
  margin: 5px;
  list-style-type: none;
}

.header ul li a {
  text-decoration: none;
  color: var(--secondary-color);
  font-size: 1.1rem;
  font-weight: 500;
  border-radius: 6px;
  padding: 2px 5px;
  transition: var(--transition);
}

.header ul li a:hover {
  color: gold;
}

.header-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.8em;
}

.header-btn a {
  text-decoration: none;
  font-weight: 600;
}

/* Buttons */
#login,
#signup {
  background: gold;
  color: #0b1220;
  font-weight: 700;
  padding: 4px 10px;
  border-radius: 8px;
  transition: var(--transition);
}

#login:hover {
  color: blue;
}

#signup:hover {
  color: darkblue;
}

.btn i {
  font-size: 20px;
  color: #333;
}

/* Hamburger Menu */
#menu-toggle {
  display: none;
  font-size: 24px;
  cursor: pointer;
  color: var(--text-color);
}

.menu-icon {
  display: none;
  cursor: pointer;
}

.menu-icon span {
  display: block;
  width: 25px;
  height: 3px;
  background: var(--text-color);
  margin: 5px 0;
  transition: var(--transition);
}

#menu-toggle:checked + .menu-icon span:nth-child(1) {
  transform: rotate(45deg) translate(5px, 5px);
}

#menu-toggle:checked + .menu-icon span:nth-child(2) {
  opacity: 0;
}

#menu-toggle:checked + .menu-icon span:nth-child(3) {
  transform: rotate(-45deg) translate(6px, -6px);
}

/* Responsive Styles */
@media (max-width: 768px) {
  .header {
    justify-content: space-between;
    gap: 10px;
  }

  #logo img {
    width: 8em;
  }

  .menu-icon {
    display: block;
  }

  .nav-links {
    position: absolute;
    top: 70px;
    right: 0;
    width: 100%;
    background: var(--primary-color);
    display: flex;
    flex-direction: column;
    text-align: center;
    max-height: 0;
    overflow: hidden;
    transition: max-height var(--transition);
    margin-bottom: 10px;
  }

  .nav-links a {
    transition: var(--transition);
  }

  .nav-links a:hover {
    transform: var(--transform);
  }

  .nav-links a.active {
    color: gold;
    border-bottom: 2px solid gold;
  }

  #menu-toggle:checked ~ .nav-links {
    max-height: 1200px;
  }

  .mobile-auth {
    display: flex;
    flex-direction: column;
    gap: 10px;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
  }
  .mobile-auth #login,
  #signup {
    width: 40%;
    background: gold;
    color: #0b1220;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 8px;
    transition: var(--transition);
  }
}

/* Hero Section */
.hero {
  background: linear-gradient(135deg, var(--primary-color), var(--dark-gray));
  padding: 50px 10px;
  color: var(--text-color);
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.hero-container {
  max-width: 1200px;
  width: 100%;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  gap: 30px;
}

.hero-text {
  flex: 1;
  min-width: 300px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
}

.hero-text h1 {
  font-size: 2.3 rem;
  margin-bottom: 15px;
  color: var(--secondary-color);
}

.hero-text p {
  font-size: 1.2rem;
  margin-bottom: 20px;
  color: var(--text);
}

.hero-btn {
  display: inline-block;
  background: var(--secondary-color);
  color: white;
  padding: 12px 30px;
  border-radius: 8px;
  text-decoration: none;
  font-weight: 600;
  transition: var(--transition);
}

.hero-btn:hover {
  transform: translateY(-2px);
  box-shadow: var(--shadow);
}

.hero-image {
  flex: 1;
  min-width: 300px;
  text-align: center;
}

.hero-image img {
  max-width: 100%;
  height: auto;
  border-radius: 12px;
  box-shadow: var(--box-shadow);
}

/* Section Title */
.section-title {
  text-align: center;
  font-size: 2rem;
  margin-bottom: 40px;
  color: var(--secondary-color);
}

/* Features Grid */
.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 25px;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

/* Feature Card */
.feature-card {
  background: var(--dark-gray);
  border-radius: var(--border-radius);
  padding: 30px;
  text-align: center;
  transition: var(--transition);
  box-shadow: var(--shadow);
}

.feature-card:hover {
  transform: translateY(-5px);
  box-shadow: var(--box-shadow);
}

.feature-card i {
  font-size: 3rem;
  color: var(--secondary-color);
  margin-bottom: 15px;
}

.feature-card h3 {
  font-size: 1.3rem;
  margin-bottom: 10px;
  color: var(--text-color);
}

.feature-card p {
  color: var(--text);
  line-height: 1.6;
}

/* Demo Section */
.demo {
  padding: 60px 20px;
  background: var(--primary-color);
}

.demo-info {
  max-width: 800px;
  margin: 0 auto 30px;
  text-align: center;
}

.demo-info h3 {
  font-size: 2rem;
  margin-bottom: 15px;
  color: var(--secondary-color);
}

.demo-info p {
  color: var(--text);
  line-height: 1.6;
}

.video-wrapper {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
  max-width: 800px;
  margin: 0 auto;
  border-radius: var(--border-radius);
  box-shadow: var(--box-shadow);
}

.video-wrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

/* Testimonials */
.testimonials {
  padding: 60px 20px;
  background: var(--primary-color);
}

.testimonials-container {
  padding: 60px 20px;

  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 25px;
  max-width: 1200px;
  margin: 0 auto;
}

.testimonial-card {
  background: var(--dark-gray);
  border-radius: var(--border-radius);
  padding: 25px;
  box-shadow: var(--shadow);
  transition: var(--transition);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.testimonial-card:hover {
  transform: translateY(-5px);
}

.avatar {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  overflow: hidden;
  margin-bottom: 15px;
}

.avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.testimonial-card p {
  color: var(--text);
  line-height: 1.6;
  margin-bottom: 15px;
}

.testimonial-card h4 {
  color: var(--text-color);
  margin-bottom: 5px;
}

.feedback-span {
  color: var(--text);
  font-size: 0.9rem;
  display: block;
  margin-bottom: 10px;
}

.feedback {
  color: #facc15;
}

/* FAQ Section */
.faq {
  padding: 60px 20px;
  background: var(--primary-color);
}

.faq .container {
  max-width: 800px;
  margin: 0 auto;
}

.faq-title {
  text-align: center;
  font-size: 2rem;
  margin-bottom: 40px;
  color: var(--secondary-color);
}

.faq-item {
  background: var(--dark-gray);
  border-radius: var(--border-radius);
  margin-bottom: 15px;
  overflow: hidden;
}

.faq-item input {
  display: none;
}

.faq-item label {
  display: block;
  padding: 20px;
  cursor: pointer;
  font-weight: 600;
  color: var(--text-color);
  position: relative;
}

.faq-item label::after {
  content: "+";
  position: absolute;
  left: 20px;
  font-size: 1.5rem;
  transition: var(--transition);
}

.faq-item input:checked + label::after {
  content: "-";
}

.faq-item p {
  max-height: 0;
  overflow: hidden;
  transition: max-height var(--transition);
  padding: 0 20px;
  color: var(--text);
}

.faq-item input:checked + label + p {
  max-height: 200px;
  padding: 0 20px 20px;
}

/* Footer */
.footer {
  background: var(--primary-color);
  color: var(--text-color);
  padding: 50px 20px 0;
}

.footer-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 30px;
  max-width: 1200px;
  margin: 0 auto;
}

.footer-section h3 {
  color: var(--secondary-color);
  margin-bottom: 20px;
  font-size: 1.2rem;
}

.footer-section ul {
  list-style: none;
}

.footer-section ul li {
  margin-bottom: 10px;
}

.footer-section ul li a {
  color: var(--text);
  text-decoration: none;
  transition: var(--transition);
}

.footer-section ul li a:hover {
  color: var(--secondary-color);
}

.contact p {
  margin-bottom: 10px;
  color: var(--text);
}

.social-icons {
  display: flex;
  gap: 15px;
  align-items: center;
  justify-content: center;
}

.social-icons a {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  background: var(--dark-gray);
  border-radius: 50%;
  color: var(--text-color);
  text-decoration: none;
  transition: var(--transition);
}

.social-icons a:hover {
  background: var(--secondary-color);
  transform: translateY(-3px);
}

.footer-bottom {
  text-align: center;
  padding: 20px;
  margin-top: 30px;
  border-top: 1px solid var(--dark-gray);
  color: var(--text);
}

/* Auth Pages */
.auth-container {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 80vh;
  padding: 20px;
}

.auth-box {
  background: var(--dark-gray);
  border-radius: var(--border-radius);
  padding: 40px;
  width: 100%;
  max-width: 400px;
  box-shadow: var(--box-shadow);
}

.auth-box h2 {
  text-align: center;
  margin-bottom: 30px;
  color: var(--secondary-color);
}

.auth-form {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
  color: var(--text-color);
}

.form-group input {
  width: 100%;
  padding: 12px;
  border-radius: 6px;
  border: none;
  background: var(--bg-color);
  color: var(--text-color);
}

.form-options {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 0.9rem;
}

.form-options a {
  color: var(--secondary-color);
  text-decoration: none;
}

.auth-btn {
  background: var(--secondary-color);
  color: white;
  padding: 12px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-weight: 600;
  transition: var(--transition);
}

.auth-btn:hover {
  opacity: 0.9;
}

.switch-auth {
  text-align: center;
  margin-top: 15px;
}

.switch-auth a {
  color: var(--secondary-color);
  text-decoration: none;
}

/* Tablet Responsive */
@media (max-width: 1024px) {
  .hero-text h1 {
    font-size: 2rem;
  }

  .section-title {
    font-size: 1.8rem;
  }
}

/* Mobile Responsive */
@media (max-width: 768px) {
  .header {
    justify-content: space-between;
    gap: 10px;
  }

  #logo img {
    width: 8em;
  }

  .menu-icon {
    display: block;
  }

  .nav-links {
    position: absolute;
    top: 70px;
    right: 0;
    width: 100%;
    background: var(--primary-color);
    display: flex;
    flex-direction: column;
    text-align: center;
    max-height: 0;
    overflow: hidden;
    transition: max-height var(--transition);
  }

  #menu-toggle:checked ~ .nav-links {
    max-height: 600px;
  }

  .hero-text h1 {
    font-size: 1.5rem;
  }

  .hero-text p {
    font-size: 1rem;
  }
}

/* Small Mobile */
@media (max-width: 480px) {
  .hero {
    padding: 40px 10px;
  }

  .section-title {
    font-size: 1.5rem;
  }

  .feature-card,
  .testimonial-card {
    padding: 20px;
  }
}

/* =========================
   GLOBAL RESET
========================= */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

/* =========================
   BODY
========================= */
body {
  background: #0b1220;
  color: white;
}

/* =========================
   HEADER (if injected)
========================= */
header {
  background: #111827;
  padding: 20px;
}

/* =========================
   PAGE TITLE
========================= */
.page-title {
  text-align: center;
  padding: 40px 20px;
}

.page-title h1 {
  font-size: 30px;
  margin-bottom: 10px;
  color: #facc15;
}

.page-title p {
  color: #aaa;
}

/* =========================
   SEARCH INPUT
========================= */
input[type="text"] {
  display: block;
  margin: 20px auto;
  padding: 10px 15px;
  width: 60%;
  border-radius: 8px;
  border: none;
  outline: none;
  font-size: 16px;
}

/* =========================
   FILTER BAR
========================= */
.filter-bar {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 10px;
  margin: 20px 0;
}

.filter-bar button {
  background: #111827;
  color: white;
  border: 1px solid #333;
  padding: 10px 15px;
  border-radius: 8px;
  cursor: pointer;
  transition: 0.3s;
}

.filter-bar button:hover {
  background: #facc15;
  color: black;
}

/* =========================
   PRODUCT GRID
========================= */
.grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  padding: 20px;
}

/* =========================
   PRODUCT CARD
========================= */
.card {
  background: #111827;
  border-radius: 12px;
  padding: 15px;
  text-align: center;
  transition: 0.3s;
  border: 1px solid #1f2937;
}

.card:hover {
  transform: translateY(-5px);
  border-color: #facc15;
}

.card img {
  width: 100%;
  height: 160px;
  object-fit: contain;
  margin-bottom: 10px;
}

.card h3 {
  color: #facc15;
  margin: 10px 0;
}

.card p {
  color: #aaa;
  font-size: 14px;
}

.price {
  display: inline-block;
  margin-top: 10px;
  color: #22c55e;
  font-weight: bold;
}

/* =========================
   FOOTER
========================= */
footer {
  background: #111827;
  text-align: center;
  padding: 20px;
  margin-top: 40px;
}

/* =========================
   RESPONSIVE DESIGN
========================= */
@media (max-width: 992px) {
  .grid {
    grid-template-columns: repeat(2, 1fr);
  }

  input[type="text"] {
    width: 80%;
  }
}

@media (max-width: 600px) {
  .grid {
    grid-template-columns: 1fr;
  }

  input[type="text"] {
    width: 90%;
  }

  .filter-bar {
    flex-direction: column;
    align-items: center;
  }
}
.loader {
  width: 50px;
  height: 50px;
  border: 5px solid #333;
  border-top: 5px solid #facc15;
  border-radius: 50%;
  animation: spin 1s linear infinite;
  margin: 50px auto;
}

@keyframes spin {
  100% {
    transform: rotate(360deg);
  }
}
.skeleton {
  background: linear-gradient(90deg, #1f2937 25%, #374151 50%, #1f2937 75%);
  background-size: 200% 100%;
  animation: shimmer 1.5s infinite;
  height: 200px;
  border-radius: 10px;
}

@keyframes shimmer {
  100% {
    background-position: -200% 0;
  }
}

/* .sidebar {
  position: fixed;
  top: 100px;
  left: 0;
  width: 180px;
  background: #111827;
  height: 100%;
  height: 100vh;
  padding: 20px;
} */
.sidebar {
  position: fixed;
  top: 70px;
  left: 0;
  width: 180px;
  height: 100vh;
  background: #111827;
  padding: 20px;
  overflow-y: auto;
  z-index: 1000;
}

.sidebar button {
  display: block;
  width: 100%;
  margin-bottom: 10px;
  padding: 10px;
  background: #1f2937;
  color: white;
  border: none;
  cursor: pointer;
  transition: 0.2s;
}

.sidebar button:hover {
  background: #facc15;
  color: black;
  transition: all 0.2s ease;
}
.sidebar button.active {
  background: #facc15;
  color: black;
}

@media (max-width: 768px) {
  .sidebar {
    position: relative;
    width: 100%;
    height: auto;
    top: 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
}

/* =========================
   PRODUCT PAGE LAYOUT
========================= */
.product-layout {
  display: flex;
  gap: 20px;
  padding: 20px;
}

/* SIDEBAR */
.sidebar {
  width: 220px;
  background: #111827;
  padding: 15px;
  border-radius: 10px;
  height: fit-content;
}

.sidebar h3 {
  margin-bottom: 10px;
  color: #facc15;
}

.sidebar button {
  display: block;
  width: 100%;
  margin-bottom: 10px;
  padding: 10px;
  background: #1f2937;
  color: white;
  border: none;
  cursor: pointer;
  border-radius: 6px;
}

.sidebar button:hover {
  background: #facc15;
  color: black;
}

/* MAIN AREA */
.product-main {
  flex: 1;
}

/* RESPONSIVE */
@media (max-width: 900px) {
  .product-layout {
    flex-direction: column;
  }

  .sidebar {
    width: 100%;
  }
}

iframe {
  width: 100%;
  height: 100%;
}

      /* CONTACT HERO */
      .contact-hero {
        text-align: center;
        padding: 50px 20px;
        background:
          linear-gradient(to left, #0f172a, #1f2937),
          url("./assets/images/Contact-bgwebp.webp");
        background-size: cover;
        background-position: center;
        color: white;
      }

      /* CONTAINER */
      .contact-container {
        display: flex;
        gap: 30px;
        padding: 40px 8%;
        flex-wrap: wrap;
      }

      /* FORM */
      .contact-form {
        flex: 1;
        background: #111827;
        padding: 25px;
        border-radius: 12px;
        color: white;
      }

      .contact-form form {
        display: flex;
        flex-direction: column;
        gap: 10px;
      }

      .contact-form input,
      .contact-form textarea {
        padding: 10px;
        border-radius: 6px;
        border: none;
        width: 100%;
      }

      .contact-form button {
        background: var(--secondary-color);
        color: white;
        padding: 10px;
        border: none;
        cursor: pointer;
      }

      /* INFO */
      .contact-info {
        flex: 1;
        background: #1f2937;
        padding: 25px;
        border-radius: 12px;
        color: white;
      }

      .contact-info p {
        margin: 10px 0;
      }

      .contact-info i {
        margin-left: 8px;
        color: var(--secondary-color);
      }

      /* MAP */
      .map {
        margin-top: 30px;
        height: 600px;
      }

      /* MOBILE */
      @media (max-width: 768px) {
        .contact-container {
          flex-direction: column;
        }
      }

      h1,
      h2 {
        margin-bottom: 20px;
      }

      #btn-submit {
        border-radius: 10px;
      }
    </style>
  </head>
  <body dir="rtl">
    <div id="header"></div>
    <section class="contact-hero">
      <h1>زموږ سره اړیکه ونیسئ</h1>
      <p>موږ ستاسو د خدمت لپاره تل چمتو یو</p>
    </section>

    <section class="contact-container">
      <!-- LEFT: FORM -->
      <div class="contact-form">
        <h2>پیغام راولېږئ</h2>

        <form>
          <input type="text" placeholder="ستاسو نوم" required />
          <input type="email" placeholder="ایمیل" required />
          <input type="text" placeholder="موضوع" />
          <textarea placeholder="ستاسو پیغام"></textarea>
          <button type="submit" id="btn-submit">ولېږه</button>
        </form>
      </div>

      <!-- RIGHT: INFO -->
      <div class="contact-info">
        <h2>اړیکه</h2>

        <p><i class="fas fa-phone"></i> 93706429910+</p>
        <p><i class="fas fa-envelope"></i> hafizahmadshirzad@gmail.com</p>
        <p><i class="fas fa-map-marker-alt"></i> کندهار، افغانستان</p>

        <div class="social-icons">
          <i class="fab fa-facebook"></i>
          <i class="fab fa-whatsapp"></i>
          <i class="fab fa-instagram"></i>
        </div>
      </div>
    </section>

    <!-- GOOGLE MAP -->
    <section class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d398.8064275639389!2d65.71479235975278!3d31.62031586990101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3ed6710060ae27dd%3A0x65f5a812a8ab5ed3!2z2K3Yttix2Kog2KzZiiDYqNin2KjYpyDahtmI2qkgSGF6cmF0IGdpIGJhYmEgU3F1YXJlLCAxc3QgRmxvb3IgSmFtYSBPbWFyIEthbmRhaGFyIFRyYWRlIENlbnRlciwgQ2VudHJhbCwgU2hvcCBOby4gMzIx4oCTMzIyLCBBZmdoYW5pc3Rhbg!3m2!1d31.6206531!2d65.7157891!5e1!3m2!1sen!2s!4v1776058710556!5m2!1sen!2s"
        width="100%"
        height="400"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
      >
      </iframe>
    </section>

    <!-- <section class="map">
      <iframe
        src="https://www.google.com/maps?q=Hazrat+Ji+Baba+Square+Kandahar&output=embed"
        width="100%"
        height="400"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
      >
      </iframe>
    </section> -->

    <div id="footer"></div>

    <script type="module" src="script.js"></script>
  </body>
</html>
