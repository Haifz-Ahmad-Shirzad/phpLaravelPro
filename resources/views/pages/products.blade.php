@extends('layouts.app')

@section('title', 'محصولات | Atlantic Oil & Lubricants')
@section('content')
<section class="site-hero site-hero--image" style="background-image:linear-gradient(110deg,rgba(10,29,50,.91),rgba(16,42,67,.66)),url('{{ asset('images/products-all.webp') }}')" dir="rtl">
    <p class="eyebrow">د Atlantic محصولات</p><h1>د هرې اړتیا لپاره روغنیات</h1><p>د موټرو، صنعتي ماشینونو او ځانګړو کارونو لپاره زموږ د محصولاتو لړۍ وپېژنئ.</p>
</section>
<section class="page-content" dir="rtl">
    <div class="section-heading"><p class="eyebrow">د محصولاتو کورنۍ</p><h2>باوري ساتنه، دوامداره فعالیت</h2></div>
    <div class="card-grid">
        <article class="content-card product-family"><img src="{{ asset('images/white5.png') }}" alt="د Atlantic موټر تېل" loading="lazy"><div class="product-family__body"><h3>د انجن تېل</h3><p>د موټرو او سوداګریزو وسایطو لپاره د بېلابېلو ویسکوسیتیو انجن تېل.</p></div></article>
        <article class="content-card product-family"><img src="{{ asset('images/x5.png') }}" alt="د Atlantic روغنیات" loading="lazy"><div class="product-family__body"><h3>د موټرسایکل روغنیات</h3><p>د کوچنیو انجنونو د پاک فعالیت او ساتنې لپاره روغنیات.</p></div></article>
        <article class="content-card product-family"><img src="{{ asset('images/grease.webp') }}" alt="د Atlantic ګریس" loading="lazy"><div class="product-family__body"><h3>ګریس او صنعتي روغنیات</h3><p>د صنعتي تجهیزاتو او ماشینونو لپاره د باور وړ غوړ مواد.</p></div></article>
        <article class="content-card product-family"><img src="{{ asset('images/brakeoil250ml.webp') }}" alt="د Atlantic بریک تېل" loading="lazy"><div class="product-family__body"><h3>د بریک تېل</h3><p>د بریک سیسټمونو لپاره د ورځني کارونې مناسب محصولات.</p></div></article>
    </div>
    <div class="form-actions" style="justify-content:center;margin-top:2rem"><a class="button" href="{{ route('products.index') }}">د محصولاتو لېست وګورئ</a></div>
</section>
@endsection