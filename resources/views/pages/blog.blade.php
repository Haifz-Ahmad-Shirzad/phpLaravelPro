@extends('layouts.app')

@section('title', 'بلاګ | Atlantic Oil & Lubricants')
@section('content')
<section class="site-hero site-hero--image" style="background-image:linear-gradient(110deg,rgba(10,29,50,.92),rgba(16,42,67,.72)),url('{{ asset('images/Blog-bg.webp') }}')" dir="rtl">
    <p class="eyebrow">لارښوونې او معلومات</p><h1>بلاګ</h1><p>د روغنیاتو، د ماشینونو د ساتنې او د محصولاتو د سم انتخاب په اړه ولولئ.</p>
</section>
<section class="page-content" dir="rtl">
    <div class="section-heading"><p class="eyebrow">له موږ سره زده کړئ</p><h2>وروستۍ مقالې</h2></div>
    <div class="card-grid">
        <article class="content-card article-card"><img src="{{ asset('images/blog1.webp') }}" alt="د ماشینونو لپاره د روغن انتخاب" loading="lazy"><div class="content-card__body"><h3>د ماشینونو لپاره غوره روغن انتخاب</h3><p>د کار شرایط او د جوړونکي سپارښتنې په پام کې ونیسئ، څو مناسب روغن وټاکئ.</p><a href="{{ route('blog.index') }}">نور معلومات <i class="fas fa-arrow-left" aria-hidden="true"></i></a></div></article>
        <article class="content-card article-card"><img src="{{ asset('images/blog2.webp') }}" alt="د صنعتي ماشینونو ساتنه" loading="lazy"><div class="content-card__body"><h3>صنعتي ماشینونه څنګه ساتل کېږي؟</h3><p>منظمه کتنه او د روغن پر وخت بدلول د تجهیزاتو عمر اوږدوي.</p><a href="{{ route('blog.index') }}">نور معلومات <i class="fas fa-arrow-left" aria-hidden="true"></i></a></div></article>
        <article class="content-card article-card"><img src="{{ asset('images/blog3.webp') }}" alt="د انجن ساتنه" loading="lazy"><div class="content-card__body"><h3>د انجن ساتنې مهم ټکي</h3><p>د انجن د باوري فعالیت لپاره د محصول سپارښتنې او د ساتنې مهالویش تعقیب کړئ.</p><a href="{{ route('blog.index') }}">نور معلومات <i class="fas fa-arrow-left" aria-hidden="true"></i></a></div></article>
    </div>
</section>
@endsection