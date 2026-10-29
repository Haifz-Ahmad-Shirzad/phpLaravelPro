@extends('layouts.app')

@section('title', 'خدمات | Atlantic Oil & Lubricants')
@section('content')
<section class="site-hero site-hero--image" style="background-image:linear-gradient(110deg,rgba(10,29,50,.92),rgba(16,42,67,.76)),url('{{ asset('images/Atlantic-bg.webp') }}')" dir="rtl">
    <p class="eyebrow">زموږ د کار لاره</p><h1>خدمات</h1><p>د روغنیاتو له انتخاب څخه تر رسونې پورې، موږ ستاسو د کار ملاتړ کوو.</p>
</section>
<section class="page-content" dir="rtl">
    <div class="section-heading"><p class="eyebrow">د خدمتونو لړۍ</p><h2>ستاسو د فعالیت لپاره عملي ملاتړ</h2></div>
    <div class="card-grid">
        <article class="info-card"><i class="fas fa-industry" aria-hidden="true"></i><h3>صنعتي غوړ مواد</h3><p>د صنعتي ماشینونو لپاره لوړ کیفیت لرونکي غوړ مواد.</p></article>
        <article class="info-card"><i class="fas fa-car" aria-hidden="true"></i><h3>موټري روغنیات</h3><p>د موټرو لپاره د اوږد عمر او غوره فعالیت لرونکي روغنیات.</p></article>
        <article class="info-card"><i class="fas fa-screwdriver-wrench" aria-hidden="true"></i><h3>تخنیکي ملاتړ</h3><p>د فابریکو او صنعتي شرکتونو لپاره د محصولاتو د انتخاب لارښوونه.</p></article>
        <article class="info-card"><i class="fas fa-truck" aria-hidden="true"></i><h3>تولید او عرضه</h3><p>د نړیوالو معیارونو مطابق محصولات او پر وخت عرضه.</p></article>
    </div>
    <div class="form-actions" style="justify-content:center;margin-top:2rem"><a class="button" href="{{ route('services.index') }}">د خدماتو لېست وګورئ</a></div>
</section>
@endsection