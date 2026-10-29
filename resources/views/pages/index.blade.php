@extends('layouts.app')

@section('title', 'Atlantic Oil & Lubricants | کور پاڼه')
@section('meta-description', 'د موټري او صنعتي ماشینونو لپاره باوري، لوړ کیفیت لرونکي روغنیات.')
@section('body-class', 'home-page')

@section('content')
<section class="hero"><div class="hero__inner" dir="rtl">
    <div class="hero__copy"><p class="eyebrow">Atlantic Oil & Lubricants</p>
        <h1>د هر سفر او هر ماشین لپاره باوري غوړ</h1>
        <p>د موټرو، صنعتي ماشینونو او ترانسپورتي سکتور لپاره د لوړ کیفیت روغنیات او باوري حل لارې.</p>
        <div class="hero__actions"><a class="hero-btn" href="{{ route('products.index') }}">زموږ محصولات وګورئ <i class="fas fa-arrow-left" aria-hidden="true"></i></a><a class="button-secondary" href="{{ route('contact') }}">اړیکه ونیسئ</a></div>
    </div>
    <div class="hero__media"><img src="{{ asset('images/products-all.webp') }}" alt="د Atlantic روغنیاتو او موتور تیلو بېلابېل محصولات"></div>
</div></section>

<section class="section section--white"><div class="container">
    <div class="section-heading" dir="rtl"><p class="eyebrow">زموږ لید</p><h2>د باور وړ خدمتونو لپاره جوړ شوی سیستم</h2><p>موږ د محصولاتو پېژندنه، د مشتریانو ملاتړ او پر وخت رسونه په یوه ځای کې برابروو.</p></div>
    <div class="features-grid" id="systemFeatures" aria-live="polite"></div>
</div></section>

<section class="section section--soft"><div class="container">
    <div class="section-heading" dir="rtl"><p class="eyebrow">ولې Atlantic؟</p><h2>کیفیت چې ماشینونه ساتي</h2><p>زموږ ژمنتیا د دوامدار فعالیت او د مشتریانو د باور پر بنسټ ولاړه ده.</p></div>
    <div class="features-grid" id="featuresContainer" aria-live="polite"></div>
</div></section>

<section class="demo" dir="rtl"><div class="demo-info"><p class="eyebrow">په عمل کې</p><h2>د محصولاتو کارونه وپېژنئ</h2><p>د موټري او صنعتي ماشینونو لپاره زموږ د روغنیاتو د کارونې په اړه لنډه ویډیو وګورئ.</p><a class="button-secondary" href="{{ route('services.index') }}">زموږ خدمات</a></div>
    <div class="video-wrapper"><iframe src="https://www.youtube.com/embed/9xmuqQjRMEg" title="د Atlantic روغنیاتو د کارونې ویډیو" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
</section>

<section class="section section--soft"><div class="container"><div class="section-heading" dir="rtl"><p class="eyebrow">د مشتریانو نظرونه</p><h2>باور د ښه خدمت له لارې جوړېږي</h2></div><div class="testimonials-container" id="testimonialContainer" aria-live="polite"></div></div></section>

<section class="faq" dir="rtl"><h2 class="faq-title">پوښتنې او ځوابونه</h2><div class="container"></div></section>
@endsection