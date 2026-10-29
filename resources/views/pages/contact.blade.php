@extends('layouts.app')

@section('title', 'اړیکه | Atlantic Oil & Lubricants')
@section('meta-description', 'د Atlantic Oil & Lubricants له ټیم سره اړیکه ونیسئ.')
@section('content')
<section class="site-hero site-hero--image" style="background-image:linear-gradient(110deg,rgba(10,29,50,.92),rgba(16,42,67,.74)),url('{{ asset('images/Contact-bgwebp.webp') }}')" dir="rtl">
    <p class="eyebrow">موږ ستاسو ترڅنګ یو</p><h1>اړیکه ونیسئ</h1><p>د محصولاتو او خدماتو په اړه د پوښتنو لپاره له موږ سره اړیکه ونیسئ.</p>
</section>
<div class="page-content" dir="rtl">
    <div class="contact-grid">
        <section class="contact-card"><i class="fas fa-phone" aria-hidden="true"></i><h2>ټیلیفون</h2><p dir="ltr"><a href="tel:+93706429910">+93 706 429 910</a></p><p>د محصولاتو او رسونې په اړه خبرې وکړئ.</p></section>
        <section class="contact-card"><i class="fas fa-envelope" aria-hidden="true"></i><h2>برېښنالیک</h2><p dir="ltr"><a href="mailto:hafizahmadshirzad@gmail.com">hafizahmadshirzad@gmail.com</a></p><p>خپله پوښتنه د برېښنالیک له لارې راولېږئ.</p></section>
        <section class="contact-card"><i class="fas fa-location-dot" aria-hidden="true"></i><h2>پته</h2><p>کندهار، افغانستان</p><p>د حضرت جي بابا سیمه، کندهار تجارت مرکز.</p></section>
        <section class="contact-card"><i class="fas fa-clock" aria-hidden="true"></i><h2>د اړیکې وخت</h2><p>د کاري ورځو پر مهال زموږ له ټیم سره اړیکه ونیسئ.</p><p><a href="{{ route('products.index') }}">محصولات وګورئ</a></p></section>
    </div>
    <div class="map-frame"><iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d398.8064275639389!2d65.71479235975278!3d31.62031586990101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3ed6710060ae27dd%3A0x65f5a812a8ab5ed3!2z2K3Yttix2Kog2KzZiiDYqNin2KjYpyDahtmI2qkgSGF6cmF0IGdpIGJhYmEgU3F1YXJlLCAxc3QgRmxvb3IgSmFtYSBPbWFyIEthbmRhaGFyIFRyYWRlIENlbnRlciwgQ2VudHJhbCwgU2hvcCBOby4gMzIx4oCTMzIyLCBBZmdoYW5pc3Rhbg!3m2!1d31.6206531!2d65.7157891!5e1!3m2!1sen!2s!4v1776058710556!5m2!1sen!2s" title="د Atlantic Oil د کندهار پته" loading="lazy" allowfullscreen></iframe></div>
</div>
@endsection