@extends('layouts.app')
@section('title', 'Sign Up | Atlantic Oil')
@section('html-direction', 'ltr')
@section('content-direction', 'ltr')
@section('body-class', 'auth-page-wrap')
@section('content')
<section class="auth-page" aria-labelledby="sign-up-title">
    <div class="auth-card">
        <span class="auth-card__mark"><i class="fas fa-user-plus" aria-hidden="true"></i></span>
        <p class="eyebrow" style="color:var(--blue-700)">ATLANTIC OIL</p>
        <h1 id="sign-up-title">Sign up</h1>
        <p>Create an account to access Atlantic Oil services.</p>

        <div class="auth-form" role="group" aria-label="Sign up fields unavailable" aria-describedby="auth-notice">
            <div class="form-field">
                <label for="signup-name">Name</label>
                <input id="signup-name" type="text" autocomplete="name" placeholder="Your name" disabled aria-describedby="auth-notice">
            </div>
            <div class="form-field">
                <label for="signup-email">Email address</label>
                <input id="signup-email" type="email" autocomplete="email" placeholder="you@example.com" disabled aria-describedby="auth-notice">
            </div>
            <div class="form-field">
                <label for="signup-password">Password</label>
                <input id="signup-password" type="password" autocomplete="new-password" placeholder="Create a password" disabled aria-describedby="auth-notice">
            </div>
            <button class="button" type="button" disabled aria-disabled="true">Sign up</button>
        </div>

        <p class="auth-placeholder" id="auth-notice" role="note">Account access will be available in a later project phase.</p>
        <nav class="auth-links" aria-label="Account navigation">
            <a class="button-secondary" href="{{ route('home') }}">Back to home</a>
            <a class="button-secondary" href="{{ route('login') }}">Sign in</a>
        </nav>
    </div>
</section>
@endsection