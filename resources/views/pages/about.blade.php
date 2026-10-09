<!doctype html>
<html lang="ps">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>زموږ په اړه | About Us</title>

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="about.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <style>
    /* =========================
   ABOUT PAGE
========================= */

    .about-hero {
      background:
        linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
        url("/Atlantic-bg.webp");

      background-size: cover;
      background-position: center;

      min-height: 55vh;

      display: flex;
      justify-content: center;
      align-items: center;

      text-align: center;

      padding: 2rem;
    }

    .about-hero-content {
      max-width: 800px;
      color: white;
    }

    .about-hero-content h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
    }

    .about-hero-content p {
      font-size: 1.2rem;
      line-height: 2;
      color: #ddd;
    }

    /* =========================
   MAIN CONTAINER
========================= */

    .about-container {
      width: 90%;
      max-width: 1200px;

      margin: auto;
      padding: 5rem 0;
    }

    /* =========================
   ABOUT BOX
========================= */

    .about-box {
      background: white;

      padding: 2.5rem;

      border-radius: 12px;

      margin-bottom: 2rem;

      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .about-box h2 {
      font-size: 2rem;

      margin-bottom: 1.2rem;

      color: #0f172a;
    }

    .about-box p {
      line-height: 2.2;
      color: #444;

      margin-bottom: 1rem;

      font-size: 1.05rem;
    }

    /* =========================
   DARK BOX
========================= */

    .about-box.dark {
      background: #0f172a;
      color: white;
    }

    .about-box.dark h2 {
      color: white;
    }

    .about-box.dark p {
      color: #ddd;
    }

    /* =========================
   INFO GRID
========================= */

    .about-grid {
      display: grid;

      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));

      gap: 2rem;

      margin-bottom: 3rem;
    }

    .info-card {
      background: white;

      padding: 2rem;

      text-align: center;

      border-radius: 12px;

      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);

      transition: 0.3s ease;
    }

    .info-card:hover {
      transform: translateY(-8px);
    }

    .info-card i {
      font-size: 3rem;

      color: #f59e0b;

      margin-bottom: 1rem;
    }

    .info-card h3 {
      margin-bottom: 1rem;

      color: #0f172a;
    }

    .info-card p {
      color: #555;
      line-height: 1.9;
    }

    /* =========================
   VALUES
========================= */

    .about-values {
      margin: 4rem 0;
    }

    .about-values h2 {
      text-align: center;

      font-size: 2.3rem;

      margin-bottom: 2.5rem;

      color: #0f172a;
    }

    .values-grid {
      display: grid;

      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));

      gap: 2rem;
    }

    .value-card {
      background: white;

      padding: 2rem;

      border-radius: 12px;

      text-align: center;

      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);

      transition: 0.3s;
    }

    .value-card:hover {
      transform: translateY(-6px);
    }

    .value-card h3 {
      margin-bottom: 1rem;

      color: #f59e0b;
    }

    .value-card p {
      color: #555;

      line-height: 1.8;
    }

    /* =========================
   FOUNDER
========================= */

    .founder {
      border-right: 6px solid #f59e0b;
    }

    /* =========================
   RESPONSIVE
========================= */

    @media (max-width: 768px) {
      .about-hero-content h1 {
        font-size: 2.2rem;
      }

      .about-hero-content p {
        font-size: 1rem;
      }

      .about-box {
        padding: 1.5rem;
      }

      .about-box h2 {
        font-size: 1.5rem;
      }

      .about-values h2 {
        font-size: 1.8rem;
      }
    }


    /* all */

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

    #menu-toggle:checked+.menu-icon span:nth-child(1) {
      transform: rotate(45deg) translate(5px, 5px);
    }

    #menu-toggle:checked+.menu-icon span:nth-child(2) {
      opacity: 0;
    }

    #menu-toggle:checked+.menu-icon span:nth-child(3) {
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

      #menu-toggle:checked~.nav-links {
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

    .faq-item input:checked+label::after {
      content: "-";
    }

    .faq-item p {
      max-height: 0;
      overflow: hidden;
      transition: max-height var(--transition);
      padding: 0 20px;
      color: var(--text);
    }

    .faq-item input:checked+label+p {
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

      #menu-toggle:checked~.nav-links {
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
  </style>
</head>

<body dir="rtl">
  <!-- HEADER -->
  <div id="header"></div>


  <!-- HERO SECTION -->
  <section class="about-hero">
    <div class="about-hero-content">
      <h1>About Us | زموږ په اړه</h1>
      <p>
        Atlantic Grease & Lubricants — په افغانستان کې د لوړ کیفیت لبریکینټ او
        روغنیاتو یو باوري عرضه کوونکی
      </p>
    </div>
  </section>

  <!-- MAIN CONTENT -->
  <section class="about-container">
    <!-- INTRO -->
    <div class="about-box">
      <h2>د شرکت په اړه</h2>
      <p>
        Atlantic Grease & Lubricants شرکت د افغانستان د کندهار ښار، د حضرت جي
        بابا په سیمه کې موقعیت لري. دا شرکت له دوبۍ څخه لوړ کیفیت لرونکي مبلین
        او روغنیات واردوي او د افغانستان بېلابېلو ولایتونو ته یې توزیع کوي.
        زموږ هدف دا دی چې د هېواد د موټرو، صنعتي ماشینونو او ترانسپورتي سکتور
        لپاره باوري او دوامدار لبریکینټ محصولات برابر کړو.
      </p>

      <p>
        موږ د نړیوالو کیفیتي معیارونو سره سم کار کوو او هڅه کوو چې د افغانستان
        په بازار کې د اعتماد وړ او دوامداره حل لارې وړاندې کړو. زموږ محصولات د
        امریکایي او اروپایي معیارونو مطابق تصدیق شوي (OEM Approval).
      </p>
    </div>

    <!-- CORE INFO GRID -->
    <div class="about-grid">
      <div class="info-card">
        <i class="fa-solid fa-industry"></i>
        <h3>Manufacturing | تولید</h3>
        <p>
          له دوبۍ څخه وارد شوي لوړ کیفیت محصولات د افغانستان بازار ته په منظم
          ډول رسول کېږي
        </p>
      </div>

      <div class="info-card">
        <i class="fa-solid fa-flask"></i>
        <h3>Laboratory | لابراتوار</h3>
        <p>
          ټول محصولات د بازار ته وړاندې کېدو مخکې د کیفیت له پلوه په دقیق ډول
          ارزول کېږي
        </p>
      </div>

      <div class="info-card">
        <i class="fa-solid fa-globe"></i>
        <h3>Global Network | نړیوال شبکه</h3>
        <p>
          زموږ محصولات د افغانستان له کندهار څخه تر ټولو ولایتونو پورې رسېږي
        </p>
      </div>
    </div>

    <!-- MISSION -->
    <div class="about-box dark">
      <h2>زموږ ماموریت | Our Mission</h2>
      <p>
        زموږ ماموریت دا دی چې د افغانستان خلکو ته باوري، لوړ کیفیت او دوامدار
        لبریکینټ محصولات وړاندې کړو ترڅو د موټرو او صنعتي ماشینونو فعالیت ښه
        او اوږدمهاله شي.
      </p>
    </div>

    <!-- VISION -->
    <div class="about-box">
      <h2>زموږ لید | Our Vision</h2>
      <p>
        زموږ لید دا دی چې د افغانستان په بازار کې د لبریکینټونو یو مخکښ او تر
        ټولو باوري عرضه کوونکی واوسو او په ملي کچه پراخ خدمتونه وړاندې کړو.
      </p>
    </div>

    <!-- VALUES -->
    <div class="about-values">
      <h2>Our Core Values | زموږ ارزښتونه</h2>

      <div class="values-grid">
        <div class="value-card">
          <h3>Innovation | نوښت</h3>
          <p>تل د پرمختګ او نوو حللارو هڅه</p>
        </div>

        <div class="value-card">
          <h3>Quality | کیفیت</h3>
          <p>د لوړ معیار محصولاتو وړاندې کول</p>
        </div>

        <div class="value-card">
          <h3>Sustainability | دوامدار پرمختګ</h3>
          <p>د چاپېریال ساتنې ته ژمنتیا</p>
        </div>

        <div class="value-card">
          <h3>Customer Focus | د مشتریانو رضایت</h3>
          <p>د اوږدمهاله او باوري اړیکو جوړول</p>
        </div>
      </div>
    </div>

    <!-- FOUNDER -->
    <div class="about-box founder">
      <h2>Founder | بنسټ ایښودونکی</h2>
      <p>
        Sheikh Naseem د Atlantic Grease & Lubricants بنسټ ایښودونکی دی. هغه د
        1940 لسیزې څخه د تیلو په سوداګرۍ کې تجربه ترلاسه کړه او وروسته یې په
        1987 کې د تولید لومړی مرکز جوړ کړ.
      </p>

      <p>
        د هغه لید، نوښت او رهبري Atlantic ته نړیوال اعتبار ورکړ. نن ورځ دا
        شرکت په څو نړیوالو تولیدي او توزیعي مرکزونو کې فعالیت لري.
      </p>
    </div>
  </section>

  <!-- FOOTER -->
  <div id="footer"></div>

  <script type="module" src="script.js"></script>
</body>

</html>