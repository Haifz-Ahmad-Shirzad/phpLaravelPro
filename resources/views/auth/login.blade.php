@extends('layouts.app')
@section('title', 'Sign In | Atlantic Oil')
@section('html-direction', 'ltr')
@section('content-direction', 'ltr')
@section('body-class', 'auth-page-wrap')
@section('content')
<section class="auth-page" aria-labelledby="sign-in-title">
    <div class="auth-card">
        <span class="auth-card__mark"><i class="fas fa-lock" aria-hidden="true"></i></span>
        <p class="eyebrow" style="color:var(--blue-700)">ATLANTIC OIL</p>
        <h1 id="sign-in-title">Sign in</h1>
        <p>Welcome back. Account access is not available yet.</p>

        <div class="auth-form" role="group" aria-label="Sign in fields unavailable" aria-describedby="auth-notice">
            <div class="form-field">
                <label for="login-email">Email address</label>
                <input id="login-email" type="email" autocomplete="email" placeholder="you@example.com" disabled aria-describedby="auth-notice">
            </div>
            <div class="form-field">
                <label for="login-password">Password</label>
                <input id="login-password" type="password" autocomplete="current-password" placeholder="Your password" disabled aria-describedby="auth-notice">
            </div>
            <button class="button" type="button" disabled aria-disabled="true">Sign in</button>
        </div>

        <p class="auth-placeholder" id="auth-notice" role="note">Account access will be available in a later project phase.</p>
        <nav class="auth-links" aria-label="Account navigation">
            <a class="button-secondary" href="{{ route('home') }}">Back to home</a>
            <a class="button-secondary" href="{{ route('signup') }}">Sign up</a>
        </nav>
    </div>
</section>
@endsection