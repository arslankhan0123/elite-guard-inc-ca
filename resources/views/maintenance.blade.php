@extends('layouts.frontend.main')
@section('title', 'Under Maintenance - Elite Guard Inc.')

@section('content')
<style>
    /* Hide header and footer for maintenance page */
    #header, #footer {
        display: none !important;
    }
    
    body {
        margin: 0;
        padding: 0;
        overflow: hidden !important;
        background-color: #0f172a;
    }

    .maintenance-container {
        position: fixed;
        inset: 0;
        width: 100vw;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        background: url('{{ asset("frontend/images/29.jpg") }}') center/cover no-repeat;
        z-index: 9999;
    }

    .maintenance-container::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(15, 23, 42, 0.95) 0%, rgba(11, 15, 25, 0.98) 100%);
        z-index: 2;
    }

    .maintenance-content {
        position: relative;
        z-index: 3;
        padding: 40px;
        max-width: 800px;
    }

    .logo-container {
        margin-bottom: 40px;
        animation: float 6s ease-in-out infinite;
    }

    .logo-container img {
        height: 100px;
        filter: drop-shadow(0 0 20px rgba(212, 175, 55, 0.4));
        background: white;
        border-radius: 50%;
        padding: 5px;
    }

    .gear-icon {
        color: #d4af37;
        font-size: 60px;
        margin-bottom: 20px;
        animation: spin 8s linear infinite;
        display: inline-block;
    }

    .maintenance-title {
        font-size: 48px;
        font-weight: 800;
        color: #ffffff;
        text-transform: uppercase;
        margin-bottom: 20px;
        letter-spacing: 2px;
        text-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    }

    .maintenance-title span {
        color: #d4af37;
    }

    .maintenance-desc {
        font-size: 18px;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        margin-bottom: 40px;
    }

    .progress-bar-container {
        width: 100%;
        max-width: 400px;
        height: 6px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        margin: 0 auto 30px;
        overflow: hidden;
        position: relative;
    }

    .progress-bar-fill {
        height: 100%;
        background: #d4af37;
        border-radius: 10px;
        width: 0%;
        animation: loadProgress 2.5s ease-out forwards;
        box-shadow: 0 0 15px rgba(212, 175, 55, 0.6);
    }

    .contact-info {
        display: flex;
        justify-content: center;
        gap: 30px;
        margin-top: 20px;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #fff;
        font-size: 15px;
        text-decoration: none;
        transition: color 0.3s;
        background: rgba(255, 255, 255, 0.05);
        padding: 10px 20px;
        border-radius: 30px;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .contact-item i {
        color: #d4af37;
        font-size: 18px;
    }

    .contact-item:hover {
        color: #d4af37;
        background: rgba(255, 255, 255, 0.1);
        border-color: rgba(212, 175, 55, 0.5);
    }

    /* Animations */
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }

    @keyframes spin {
        100% { transform: rotate(360deg); }
    }

    @keyframes loadProgress {
        0% { width: 0%; }
        100% { width: 85%; }
    }

    /* Particles */
    .particles {
        position: absolute;
        inset: 0;
        z-index: 2;
        overflow: hidden;
        pointer-events: none;
    }

    .particle {
        position: absolute;
        background: rgba(212, 175, 55, 0.3);
        border-radius: 50%;
        animation: rise linear infinite;
    }

    @keyframes rise {
        0% { transform: translateY(100vh) scale(0); opacity: 0; }
        50% { opacity: 1; }
        100% { transform: translateY(-10vh) scale(1); opacity: 0; }
    }

    @media (max-width: 768px) {
        .maintenance-title {
            font-size: 32px;
        }
        .contact-info {
            flex-direction: column;
            gap: 15px;
        }
    }
</style>

<div class="maintenance-container">
    <div class="particles" id="particles"></div>
    
    <div class="maintenance-content" data-aos="zoom-in" data-aos-duration="1000">
        <div class="logo-container">
            <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="Elite Guard Inc.">
        </div>
        
        <i class="fa-solid fa-gear gear-icon"></i>
        
        <h1 class="maintenance-title">WE ARE <span>UPGRADING</span></h1>
        
        <p class="maintenance-desc">
            Our website is currently undergoing scheduled maintenance to improve your experience. We are working hard to bring you a better, faster, and more secure platform. We'll be back online shortly!
        </p>
        
        <div class="progress-bar-container">
            <div class="progress-bar-fill"></div>
        </div>
        
        <div class="contact-info">
            <a href="tel:4038307772" class="contact-item">
                <i class="fa-solid fa-phone"></i> 403.830.7772
            </a>
            <a href="mailto:info@eliteguardinc.ca" class="contact-item">
                <i class="fa-solid fa-envelope"></i> info@eliteguardinc.ca
            </a>
        </div>
    </div>
</div>

<script>
    // Create subtle rising particles
    document.addEventListener("DOMContentLoaded", function() {
        const particlesContainer = document.getElementById('particles');
        const particleCount = 40;
        
        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle');
            
            // Random properties
            const size = Math.random() * 8 + 3; // 3px to 11px
            const left = Math.random() * 100; // 0vw to 100vw
            const duration = Math.random() * 10 + 10; // 10s to 20s
            const delay = Math.random() * 10; // 0s to 10s
            
            particle.style.width = `${size}px`;
            particle.style.height = `${size}px`;
            particle.style.left = `${left}vw`;
            particle.style.animationDuration = `${duration}s`;
            particle.style.animationDelay = `${delay}s`;
            
            particlesContainer.appendChild(particle);
        }
    });
</script>
@endsection