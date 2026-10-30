<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Silva Aulia Nursamsiah — Portfolio</title>

    <meta
        name="description"
        content="Portfolio Silva Aulia Nursamsiah — UI/UX Designer, Visual Designer, dan Informatics Engineering Student."
    >

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,500;0,600;1,500;1,600&display=swap"
        rel="stylesheet"
    >

    <style>

        /* =========================================================
           ROOT - CYBER THEME
        ========================================================= */

        :root {
            --bg: #050508;
            --bg-soft: #0a0a12;
            --surface: #0f0f1a;
            --surface-light: #141428;

            --primary: #00ff88;
            --primary-glow: rgba(0, 255, 136, 0.4);
            --secondary: #00d4ff;
            --secondary-glow: rgba(0, 212, 255, 0.4);
            --accent: #ff006e;
            --accent-glow: rgba(255, 0, 110, 0.4);
            --purple: #8b5cf6;
            --purple-glow: rgba(139, 92, 246, 0.4);

            --white: #ffffff;
            --text: #e0e0e0;
            --muted: #8888a0;
            --muted-2: #555566;

            --border: rgba(255, 255, 255, 0.06);

            --container: 1250px;

            --ease: cubic-bezier(.2, .8, .2, 1);
        }


        /* =========================================================
           RESET
        ========================================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;

            background:
                linear-gradient(135deg, var(--bg) 0%, var(--bg-soft) 50%, var(--bg) 100%);

            color: var(--white);

            font-family: "DM Sans", sans-serif;

            overflow-x: hidden;

            opacity: 0;

            animation: pageEnter .8s ease forwards;
        }

        /* Grid Background */
        .cyber-grid {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                linear-gradient(rgba(0, 255, 136, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 255, 136, 0.03) 1px, transparent 1px);
            background-size: 60px 60px;
            pointer-events: none;
            z-index: 0;
            animation: gridMove 20s linear infinite;
        }

        @keyframes gridMove {
            0% { transform: perspective(500px) rotateX(60deg) translateY(0); }
            100% { transform: perspective(500px) rotateX(60deg) translateY(60px); }
        }

        /* Floating Shapes */
        .floating-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
            overflow: hidden;
        }

        .shape {
            position: absolute;
            border: 2px solid;
            opacity: 0.3;
            animation: float 15s ease-in-out infinite;
        }

        .shape-1 {
            width: 100px;
            height: 100px;
            border-color: var(--primary);
            top: 20%;
            left: 10%;
            animation-delay: 0s;
            animation-duration: 18s;
        }

        .shape-2 {
            width: 60px;
            height: 60px;
            border-color: var(--secondary);
            top: 60%;
            right: 15%;
            animation-delay: -3s;
            animation-duration: 22s;
            border-radius: 50%;
        }

        .shape-3 {
            width: 80px;
            height: 80px;
            border-color: var(--accent);
            bottom: 30%;
            left: 20%;
            animation-delay: -6s;
            animation-duration: 20s;
            transform: rotate(45deg);
        }

        .shape-4 {
            width: 40px;
            height: 40px;
            border-color: var(--purple);
            top: 40%;
            right: 30%;
            animation-delay: -9s;
            animation-duration: 25s;
            border-radius: 50%;
        }

        .shape-5 {
            width: 120px;
            height: 120px;
            border-color: var(--primary);
            bottom: 10%;
            right: 10%;
            animation-delay: -12s;
            animation-duration: 16s;
            opacity: 0.15;
        }

        .shape-6 {
            width: 50px;
            height: 50px;
            border-color: var(--secondary);
            top: 15%;
            right: 25%;
            animation-delay: -5s;
            animation-duration: 24s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
                opacity: 0.3;
            }
            25% {
                transform: translateY(-30px) rotate(90deg);
                opacity: 0.5;
            }
            50% {
                transform: translateY(-60px) rotate(180deg);
                opacity: 0.3;
            }
            75% {
                transform: translateY(-30px) rotate(270deg);
                opacity: 0.5;
            }
        }

        /* Cursor Glow */
        .cursor-glow {
            position: fixed;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(circle, var(--primary-glow), transparent 70%);
            pointer-events: none;
            z-index: 9999;
            transform: translate(-50%, -50%);
            opacity: 0.5;
            transition: opacity 0.3s ease;
        }

        body:hover .cursor-glow {
            opacity: 0.7;
        }

        /* Particle Canvas */
        #particleCanvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        /* Glowing Orbs */
        .glow-orb {
            position: fixed;
            border-radius: 50%;
            filter: blur(100px);
            pointer-events: none;
            z-index: 1;
            animation: orbFloat 10s ease-in-out infinite;
        }

        .orb-1 {
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, var(--primary-glow), transparent 70%);
            top: -100px;
            right: -100px;
            animation-delay: 0s;
        }

        .orb-2 {
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, var(--secondary-glow), transparent 70%);
            bottom: -50px;
            left: -50px;
            animation-delay: -5s;
        }

        .orb-3 {
            width: 250px;
            height: 250px;
            background: radial-gradient(circle, var(--purple-glow), transparent 70%);
            top: 50%;
            left: 50%;
            animation-delay: -2.5s;
        }

        @keyframes orbFloat {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }
            33% {
                transform: translate(30px, -30px) scale(1.1);
            }
            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
        }

        /* Scanlines */
        .scanlines {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: repeating-linear-gradient(
                0deg,
                transparent,
                transparent 2px,
                rgba(0, 0, 0, 0.1) 2px,
                rgba(0, 0, 0, 0.1) 4px
            );
            pointer-events: none;
            z-index: 1000;
            opacity: 0.15;
            animation: scanMove 8s linear infinite;
        }

        @keyframes scanMove {
            0% { transform: translateY(0); }
            100% { transform: translateY(4px); }
        }

        @keyframes pageEnter {
            to {
                opacity: 1;
            }
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button {
            font-family: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        ::selection {
            background: var(--blue);
            color: white;
        }


        /* =========================================================
           BACKGROUND EFFECT
        ========================================================= */

        .ambient {
            position: fixed;

            width: 500px;
            height: 500px;

            border-radius: 50%;

            pointer-events: none;

            filter: blur(100px);

            z-index: -5;

            opacity: .5;
        }

        .ambient-one {
            left: -250px;
            top: 20%;

            background: rgba(23, 105, 255, .12);

            animation: ambientOne 12s ease-in-out infinite;
        }

        .ambient-two {
            right: -250px;
            bottom: 10%;

            background: rgba(0, 216, 197, .06);

            animation: ambientTwo 15s ease-in-out infinite;
        }

        @keyframes ambientOne {
            0%, 100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(100px, -70px);
            }
        }

        @keyframes ambientTwo {
            0%, 100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-80px, 60px);
            }
        }


        /* =========================================================
           CONTAINER
        ========================================================= */

        .container {
            width: min(var(--container), calc(100% - 80px));

            margin: 0 auto;
        }


        /* =========================================================
           NAVBAR
        ========================================================= */

        .navbar {
            position: fixed;

            top: 0;
            left: 0;

            width: 100%;

            z-index: 1000;

            border-bottom: 1px solid transparent;

            background: rgba(7, 10, 16, .55);

            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);

            transition:
                background .4s ease,
                border-color .4s ease,
                box-shadow .4s ease;

            animation: navEnter .8s ease .1s both;
        }

        .navbar.scrolled {
            background: rgba(7, 10, 16, .90);

            border-bottom-color: var(--border);

            box-shadow:
                0 10px 40px rgba(0,0,0,.15);
        }

        @keyframes navEnter {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .nav-inner {
            min-height: 82px;

            display: flex;

            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-family: "Manrope", sans-serif;

            font-size: 25px;

            font-weight: 800;

            letter-spacing: -1.5px;
        }

        .logo span {
            color: var(--blue);
        }

        .nav-menu {
            display: flex;

            align-items: center;

            gap: 34px;
        }

        .nav-menu a {
            position: relative;

            color: var(--muted);

            font-size: 12px;

            transition: color .3s ease;
        }

        .nav-menu a::after {
            content: "";

            position: absolute;

            left: 0;
            bottom: -8px;

            width: 0;
            height: 1px;

            background: var(--blue);

            transition: width .3s ease;
        }

        .nav-menu a:hover {
            color: white;
        }

        .nav-menu a:hover::after {
            width: 100%;
        }

        .nav-contact {
            display: inline-flex;

            align-items: center;

            gap: 8px;

            padding: 11px 17px;

            border: 1px solid var(--border);

            border-radius: 50px;

            color: var(--text);

            font-size: 11px;

            transition:
                background .3s ease,
                color .3s ease,
                transform .3s ease;
        }

        .nav-contact:hover {
            background: white;

            color: var(--bg);

            transform: translateY(-2px);
        }

        .nav-download {
            display: inline-flex;

            align-items: center;

            gap: 8px;

            padding: 11px 17px;

            background: rgba(168,255,0,.15);

            border: 1px solid rgba(168,255,0,.4);

            border-radius: 50px;

            color: #a8ff00;

            font-size: 11px;

            transition:
                background .3s ease,
                color .3s ease,
                transform .3s ease;
        }

        .nav-download:hover {
            background: #a8ff00;

            color: var(--bg);

            transform: translateY(-2px);
        }


        /* =========================================================
           HERO - CYBER STYLE
        ========================================================= */

        .hero {
            position: relative;

            min-height: 100vh;

            display: flex;

            flex-direction: column;

            align-items: center;

            justify-content: center;

            padding: 150px 0 90px;

            text-align: center;

            overflow: hidden;

            z-index: 2;
        }

        .hero-badge {
            display: inline-flex;

            align-items: center;

            gap: 10px;

            padding: 10px 20px;

            margin-bottom: 40px;

            border: 1px solid var(--primary);
            border-radius: 50px;

            background: rgba(0, 255, 136, 0.1);

            backdrop-filter: blur(10px);

            animation: badgePulse 2s ease-in-out infinite;
        }

        .badge-dot {
            width: 8px;
            height: 8px;

            border-radius: 50%;

            background: var(--primary);

            box-shadow: 0 0 15px var(--primary-glow);

            animation: dotBlink 1.5s ease-in-out infinite;
        }

        .badge-text {
            font-size: 11px;
            font-weight: 600;

            color: var(--primary);

            letter-spacing: 2px;
            text-transform: uppercase;
        }

        @keyframes badgePulse {
            0%, 100% { box-shadow: 0 0 20px var(--primary-glow); }
            50% { box-shadow: 0 0 40px var(--primary-glow), 0 0 60px var(--primary-glow); }
        }

        @keyframes dotBlink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.3; }
        }

        .hero-title {
            font-family: "Manrope", sans-serif;

            font-size: clamp(60px, 12vw, 160px);

            line-height: 0.85;

            letter-spacing: -8px;

            font-weight: 800;

            margin-bottom: 30px;
        }

        .hero-title .line-one {
            display: block;

            color: var(--white);
        }

        .hero-title .line-two {
            display: block;

            color: var(--primary);
            font-style: italic;

            text-shadow: 0 0 60px var(--primary-glow);
        }

        .hero-title .line-three {
            display: block;

            font-size: 0.6em;

            color: var(--muted);

            letter-spacing: 5px;
        }

        .hero-title .line-four {
            display: block;

            color: var(--secondary);

            text-shadow: 0 0 60px var(--secondary-glow);
        }

        .text-reveal {
            display: inline-block;

            animation: textReveal 1s var(--ease) both;
        }

        @keyframes textReveal {
            0% {
                opacity: 0;
                transform: translateY(80px) scale(0.9);
                filter: blur(20px);
            }
            50% {
                filter: blur(5px);
            }
            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
                filter: blur(0);
            }
        }

        .hero-subtitle {
            font-size: 14px;

            color: var(--muted);

            letter-spacing: 3px;

            animation: fadeUp 1s var(--ease) 1.2s both;
        }

        .typing-text::after {
            content: "|";

            animation: blink 0.8s infinite;
            color: var(--primary);
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }

            animation: statusPulse 2s ease-in-out infinite;
        }

        @keyframes statusPulse {
            0%, 100% {
                opacity: .6;
                transform: scale(1);
            }

            50% {
                opacity: 1;
                transform: scale(1.2);
            }
        }

        .hero-location {
            letter-spacing: 1px;
        }

        .hero-content {
            position: relative;

            z-index: 4;

            width: 100%;
        }

        .hero-kicker {
            text-align: center;

            margin-bottom: 16px;

            color: var(--muted);

            font-size: 10px;

            letter-spacing: 4px;

            animation:
                fadeUp .9s ease .2s both;
        }

        .hero-title {
            text-align: center;

            font-family: "Manrope", sans-serif;

            font-size: clamp(70px, 10vw, 145px);

            line-height: .84;

            letter-spacing: -9px;

            font-weight: 700;
        }

        .hero-title .line-one {
            display: block;

            animation:
                titleReveal 1s var(--ease) .15s both;
        }

        .hero-title .line-two {
            display: block;

            color: var(--blue-light);

            font-family: "Playfair Display", serif;

            font-style: italic;

            font-weight: 500;

            letter-spacing: -6px;

            animation:
                titleReveal 1s var(--ease) .30s both;
        }

        .hero-subtitle {
            display: flex;

            justify-content: center;
            align-items: center;

            gap: 12px;

            margin-top: 25px;

            color: var(--muted);

            font-size: 11px;

            animation:
                fadeUp .9s ease .5s both;
        }

        .hero-subtitle i {
            color: var(--blue);

            font-style: normal;
        }


        /* =========================================================
           HERO PHOTO
        ========================================================= */

        .hero-photo {
            position: relative;

            width: 390px;
            height: 410px;

            margin: 12px auto 0;

            z-index: 5;

            animation:
                photoEnter 1.1s var(--ease) .35s both,
                photoFloat 6s ease-in-out 1.7s infinite;
        }

        .hero-photo::before {

            z-index: 5;

            animation:
                photoEnter 1.1s var(--ease) .35s both,
                photoFloat 6s ease-in-out 1.7s infinite;
        }

        .hero-photo::before {
            content: "";

            position: absolute;

            left: 50%;
            bottom: 50px;

            width: 300px;
            height: 300px;

            transform: translateX(-50%);

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(23,105,255,.45),
                    rgba(23,105,255,.05) 60%,
                    transparent 72%
                );

            filter: blur(25px);

            z-index: -1;

            animation:
                glowPulse 3s ease-in-out 1.5s infinite;
        }

        .hero-photo::after {
            content: "";

            position: absolute;

            left: 50%;
            bottom: 12px;

            width: 230px;
            height: 18px;

            transform: translateX(-50%);

            border-radius: 50%;

            background: rgba(0,0,0,.6);

            filter: blur(16px);

            z-index: -1;
        }

        .hero-photo img {
            width: 100%;
            height: 100%;

            object-fit: contain;

            object-position: center bottom;

            filter:
                drop-shadow(
                    0 30px 35px rgba(0,0,0,.55)
                );
        }

        .sparkle {
            position: absolute;

            color: rgba(168,255,0,.9);

            font-size: 14px;

            z-index: 10;

            animation:
                sparkle 2s ease-in-out infinite;
        }

        .sparkle-1 {
            top: 15%;
            left: 5%;

            animation-delay: 0s;
        }

        .sparkle-2 {
            top: 25%;
            right: 8%;

            animation-delay: 0.5s;
        }

        .sparkle-3 {
            bottom: 30%;
            left: 3%;

            animation-delay: 1s;
        }

        .sparkle-4 {
            bottom: 20%;
            right: 5%;

            animation-delay: 1.5s;
        }

        @keyframes photoEnter {
            0% {
                opacity: 0;
                transform:
                    translateY(120px)
                    scale(.7)
                    rotateX(45deg);
            }

            40% {
                opacity: 1;
                transform:
                    translateY(-20px)
                    scale(1.05)
                    rotateX(0deg);
            }

            60% {
                transform:
                    translateY(10px)
                    scale(.98);
            }

            80% {
                transform:
                    translateY(-5px)
                    scale(1.01);
            }

            100% {
                opacity: 1;
                transform:
                    translateY(0)
                    scale(1);
            }
        }

        @keyframes photoFloat {
            0%, 100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-9px);
            }
        }

        @keyframes glowPulse {
            0%, 100% {
                opacity: 0.5;
                transform: translateX(-50%) scale(1);
            }

            50% {
                opacity: 0.9;
                transform: translateX(-50%) scale(1.15);
            }
        }

        @keyframes sparkle {
            0%, 100% {
                opacity: 0;
                transform: scale(0) rotate(0deg);
            }

            50% {
                opacity: 1;
                transform: scale(1) rotate(180deg);
            }
        }

        .hero-description {
            max-width: 430px;

            margin: 0 auto;

            text-align: center;

            color: var(--muted);

            font-size: 13px;

            line-height: 1.8;

            animation:
                fadeUp .9s ease .65s both;
        }

        .hero-actions {
            display: flex;
            justify-content: center;
            gap: 12px;

            margin-top: 25px;

            animation:
                fadeUp .9s ease .75s both;
        }

        @keyframes fadeUp {
            0% {
                opacity: 0;
                transform:
                    translateY(40px)
                    scale(0.95);
            }

            60% {
                opacity: 1;
                transform:
                    translateY(-5px)
                    scale(1);
            }

            100% {
                opacity: 1;
                transform:
                    translateY(0)
                    scale(1);
            }
        }


        /* =========================================================
           BUTTONS
        ========================================================= */

        .button {
            position: relative;

            display: inline-flex;

            align-items: center;
            justify-content: center;

            gap: 8px;

            min-height: 45px;

            padding: 0 21px;

            border-radius: 50px;

            font-size: 11px;

            overflow: hidden;

            transition:
                transform .3s ease,
                box-shadow .3s ease,
                background .3s ease;
        }

        .button-primary {
            background: var(--blue);

            box-shadow:
                0 12px 35px rgba(23,105,255,.20);
        }

        .button-primary:hover {
            transform: translateY(-3px);

            box-shadow:
                0 18px 45px rgba(23,105,255,.35);
        }

        .button-outline {
            border: 1px solid var(--border);

            color: var(--text);
        }

        .button-outline:hover {
            transform: translateY(-3px);

            border-color:
                rgba(91,149,255,.45);

            background:
                rgba(255,255,255,.03);
        }


        /* =========================================================
           MARQUEE
        ========================================================= */

        .marquee {
            position: relative;

            width: 100%;

            padding: 18px 0;

            overflow: hidden;

            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);

            background: rgba(255,255,255,.008);
        }

        .marquee-track {
            display: flex;

            align-items: center;

            width: max-content;

            gap: 28px;

            animation:
                marquee 25s linear infinite;
        }

        .marquee:hover .marquee-track {
            animation-play-state: paused;
        }

        .marquee span {
            color: var(--muted-2);

            font-family: "Manrope", sans-serif;

            font-size: 10px;

            letter-spacing: 2px;

            white-space: nowrap;
        }

        .marquee i {
            color: var(--blue);

            font-size: 9px;

            font-style: normal;
        }

        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }


        /* =========================================================
           SECTIONS
        ========================================================= */

        .section {
            padding: 130px 0;
        }

        .section-label {
            display: flex;

            align-items: center;

            gap: 12px;

            margin-bottom: 60px;

            color: var(--muted-2);

            font-size: 9px;

            letter-spacing: 2px;
        }

        .section-label span {
            color: var(--blue);

            font-family: "Manrope", sans-serif;
        }

        .eyebrow {
            color: var(--blue-light);

            font-size: 9px;

            letter-spacing: 3px;

            text-transform: uppercase;
        }


        /* =========================================================
           ABOUT
        ========================================================= */

        .about-grid {
            display: grid;

            grid-template-columns:
                .9fr 1.1fr;

            gap: 110px;
        }

        .about-heading h2,
        .process-heading h2,
        .skills-heading h2 {
            margin-top: 18px;

            font-family: "Manrope", sans-serif;

            font-size: clamp(45px, 5.5vw, 76px);

            line-height: .95;

            letter-spacing: -5px;
        }

        .about-heading h2 em,
        .process-heading h2 em,
        .skills-heading h2 em {
            color: var(--blue-light);

            font-family: "Playfair Display", serif;

            font-style: italic;

            font-weight: 500;
        }

        .about-content {
            color: var(--muted);

            font-size: 13px;

            line-height: 1.85;
        }

        .about-content .large-text {
            margin-bottom: 22px;

            color: var(--text);

            font-size: 19px;

            line-height: 1.55;
        }

        .about-content p + p {
            margin-top: 18px;
        }

        .about-info {
            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 30px;

            margin-top: 45px;

            padding-top: 25px;

            border-top: 1px solid var(--border);
        }

        .info-item span,
        .info-item small {
            display: block;

            color: var(--muted-2);

            font-size: 8px;

            letter-spacing: 1.5px;
        }

        .info-item strong {
            display: block;

            margin: 8px 0 4px;

            color: var(--white);

            font-size: 12px;

            font-weight: 600;
        }


        /* =========================================================
           WORKS HEADER
        ========================================================= */

        .works-header {
            display: flex;

            justify-content: space-between;
            align-items: flex-end;

            gap: 60px;

            margin-bottom: 70px;
        }

        .works-header h2 {
            margin-top: 18px;

            font-family: "Manrope", sans-serif;

            font-size: clamp(48px, 6vw, 82px);

            line-height: .9;

            letter-spacing: -6px;
        }

        .works-header h2 em {
            color: var(--blue-light);

            font-family: "Playfair Display", serif;

            font-style: italic;

            font-weight: 500;
        }

        .works-header > p {
            max-width: 350px;

            color: var(--muted);

            font-size: 12px;

            line-height: 1.8;
        }


        /* =========================================================
           PROJECT
        ========================================================= */

        .project {
            display: grid;

            grid-template-columns:
                1.08fr .92fr;

            margin-bottom: 55px;

            overflow: hidden;

            border: 1px solid var(--border);

            border-radius: 26px;

            background: var(--surface);

            transition:
                transform .5s var(--ease),
                border-color .4s ease,
                box-shadow .5s ease;
        }

        .project:hover {
            transform: translateY(-8px);

            border-color:
                rgba(91,149,255,.25);

            box-shadow:
                0 35px 80px rgba(0,0,0,.22);
        }

        .project.reverse {
            grid-template-columns:
                .92fr 1.08fr;
        }

        .project.reverse .project-image {
            order: 2;
        }

        .project.reverse .project-content {
            order: 1;
        }

        .project-image {
            position: relative;

            min-height: 500px;

            display: flex;

            align-items: center;
            justify-content: center;

            overflow: hidden;

            transition: transform .6s var(--ease);
        }

        .project-image img {
            width: 100%;
            height: auto;
            max-height: 500px;
            object-fit: contain;
            object-position: center;
        }

        .project-image.project-dark img,
        .project-image.project-orange img {
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,.4);
        }

        .project:hover .project-image {
            transform: scale(1.015);
        }

        .project-blue {
            background:
                radial-gradient(
                    circle at center,
                    rgba(23,105,255,.28),
                    transparent 60%
                ),
                #09111f;
        }

        .project-purple {
            background:
                radial-gradient(
                    circle at center,
                    rgba(110,70,255,.25),
                    transparent 60%
                ),
                #100d1c;
        }

        .project-green {
            background:
                radial-gradient(
                    circle at center,
                    rgba(0,216,197,.20),
                    transparent 60%
                ),
                #061715;
        }

        .project-orange {
            background: #0d0d0d;
        }

        .project-dark {
            background:
                radial-gradient(
                    circle at center,
                    rgba(23,105,255,.16),
                    transparent 60%
                ),
                #070b12;
        }

        .project-content {
            display: flex;

            flex-direction: column;

            justify-content: center;

            padding: 60px;
        }

        .project-number {
            margin-bottom: 28px;

            color: var(--muted-2);

            font-size: 9px;
        }

        .project-category {
            color: var(--blue-light);

            font-size: 8px;

            letter-spacing: 2px;
        }

        .project-content h3 {
            margin: 17px 0;

            font-family: "Manrope", sans-serif;

            font-size: clamp(32px, 4vw, 52px);

            line-height: .98;

            letter-spacing: -3px;
        }

        .project-content > p {
            max-width: 470px;

            color: var(--muted);

            font-size: 12px;

            line-height: 1.85;
        }

        .project-details {
            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 20px;

            margin-top: 32px;

            padding-top: 22px;

            border-top: 1px solid var(--border);
        }

        .project-details span {
            display: block;

            margin-bottom: 7px;

            color: var(--muted-2);

            font-size: 8px;

            letter-spacing: 1px;
        }

        .project-details strong {
            color: var(--text);

            font-size: 10px;

            font-weight: 500;

            line-height: 1.5;
        }

        .project-link {
            display: inline-flex;

            align-items: center;

            gap: 8px;

            width: fit-content;

            margin-top: 30px;

            padding-bottom: 5px;

            border-bottom: 1px solid var(--blue);

            color: var(--text);

            font-size: 10px;

            transition:
                gap .3s ease,
                color .3s ease;
        }

        .project-link:hover {
            gap: 15px;

            color: var(--blue-light);
        }


        /* =========================================================
           BROWSER MOCKUP
        ========================================================= */

        .browser {
            width: 75%;

            overflow: hidden;

            border: 1px solid rgba(255,255,255,.08);

            border-radius: 15px;

            background: #101722;

            box-shadow:
                0 35px 80px rgba(0,0,0,.55);

            transform:
                perspective(1000px)
                rotateY(-5deg)
                rotateX(2deg);

            transition:
                transform .7s var(--ease);
        }

        .project:hover .browser {
            transform:
                perspective(1000px)
                rotateY(0)
                rotateX(0)
                translateY(-8px)
                scale(1.02);
        }

        .browser-bar {
            height: 28px;

            display: flex;

            align-items: center;

            gap: 5px;

            padding: 0 12px;

            border-bottom: 1px solid rgba(255,255,255,.05);
        }

        .browser-bar i {
            width: 6px;
            height: 6px;

            border-radius: 50%;

            background: #3d4858;
        }

        .dashboard {
            display: flex;

            height: 300px;
        }

        .dashboard-side {
            width: 18%;

            background: #090f18;
        }

        .dashboard-main {
            flex: 1;

            padding: 25px;
        }

        .mock-title {
            width: 42%;
            height: 9px;

            border-radius: 5px;

            background: #344154;
        }

        .mock-cards {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 8px;

            margin-top: 20px;
        }

        .mock-cards div {
            height: 55px;

            border-radius: 7px;

            background: #182334;
        }

        .mock-chart {
            height: 130px;

            margin-top: 15px;

            border-radius: 8px;

            background:
                linear-gradient(
                    140deg,
                    #101a29,
                    #182e51
                );
        }


        /* =========================================================
           PHONE MOCKUP
        ========================================================= */

        .phone {
            width: 210px;

            padding: 8px;

            border-radius: 29px;

            background: #151a24;

            box-shadow:
                0 35px 80px rgba(0,0,0,.55);

            transform: rotate(4deg);

            transition:
                transform .7s var(--ease);
        }

        .project:hover .phone {
            transform:
                rotate(0deg)
                translateY(-10px)
                scale(1.025);
        }

        .phone-screen {
            min-height: 390px;

            padding: 22px 14px;

            border-radius: 22px;

            background: #080d15;
        }

        .phone-title {
            margin-bottom: 20px;

            font-family: "Manrope", sans-serif;

            font-size: 17px;

            font-weight: 700;
        }

        .phone-search {
            padding: 10px;

            border-radius: 8px;

            background: #131c29;

            color: var(--muted-2);

            font-size: 8px;
        }

        .job-card {
            margin-top: 9px;

            padding: 13px;

            border: 1px solid rgba(255,255,255,.04);

            border-radius: 10px;

            background: #101925;
        }

        .job-card strong {
            display: block;

            font-size: 9px;
        }

        .job-card small {
            display: block;

            margin-top: 5px;

            color: var(--muted-2);

            font-size: 7px;
        }


        /* =========================================================
           NATURE MOCKUP
        ========================================================= */

        .nature-card {
            position: relative;

            width: 70%;
            height: 65%;

            display: flex;

            flex-direction: column;

            align-items: center;
            justify-content: center;

            overflow: hidden;

            border: 1px solid rgba(0,216,197,.20);

            border-radius: 30px;

            background:
                rgba(5, 30, 28, .65);

            box-shadow:
                0 30px 70px rgba(0,0,0,.35);

            transition:
                transform .7s var(--ease);
        }

        .project:hover .nature-card {
            transform:
                translateY(-10px)
                scale(1.025);
        }

        .nature-ring {
            position: absolute;

            width: 230px;
            height: 230px;

            border: 1px solid rgba(0,216,197,.18);

            border-radius: 50%;

            animation:
                ringRotate 20s linear infinite;
        }

        .nature-ring::after {
            content: "";

            position: absolute;

            inset: 25px;

            border: 1px dashed rgba(0,216,197,.12);

            border-radius: 50%;
        }

        @keyframes ringRotate {
            to {
                transform: rotate(360deg);
            }
        }

        .nature-card strong {
            position: relative;

            z-index: 2;

            font-family: "Playfair Display", serif;

            font-size: 38px;
        }

        .nature-card span {
            position: relative;

            z-index: 2;

            margin-top: 8px;

            color: var(--muted);

            font-size: 9px;
        }


        /* =========================================================
           FITNESS MOCKUP
        ========================================================= */

        .fitness {
            width: 72%;

            padding: 30px;

            border: 1px solid rgba(255,145,30,.15);

            border-radius: 25px;

            background: #14100c;

            box-shadow:
                0 30px 80px rgba(0,0,0,.5);

            transition:
                transform .7s var(--ease);
        }

        .project:hover .fitness {
            transform:
                translateY(-10px)
                scale(1.025);
        }

        .fitness-top {
            color: #a98b62;

            font-size: 10px;
        }

        .fitness-score {
            display: flex;

            justify-content: space-between;
            align-items: center;

            margin-top: 50px;
        }

        .fitness-score span {
            color: #777;

            font-size: 9px;
        }

        .fitness-score strong {
            color: #ff9a2f;

            font-size: 25px;
        }

        .fitness-bars {
            height: 100px;

            display: flex;

            align-items: flex-end;

            gap: 9px;

            margin-top: 30px;
        }

        .fitness-bars span {
            flex: 1;

            border-radius: 4px 4px 0 0;

            background: #4a3217;
        }

        .fitness-bars span:nth-child(1) {
            height: 35%;
        }

        .fitness-bars span:nth-child(2) {
            height: 55%;
        }

        .fitness-bars span:nth-child(3) {
            height: 75%;
        }

        .fitness-bars span:nth-child(4) {
            height: 100%;
        }


        /* =========================================================
           PORTFOLIO MOCKUP
        ========================================================= */

        .portfolio-card {
            width: 75%;

            padding: 35px;

            border: 1px solid var(--border);

            border-radius: 24px;

            background:
                linear-gradient(
                    145deg,
                    #101a2b,
                    #0a0f17
                );

            box-shadow:
                0 35px 80px rgba(0,0,0,.5);

            transform: rotate(-2deg);

            transition:
                transform .7s var(--ease);
        }

        .project:hover .portfolio-card {
            transform:
                rotate(0)
                translateY(-8px)
                scale(1.02);
        }

        .portfolio-card-title {
            font-family: "Manrope", sans-serif;

            font-size: 30px;

            font-weight: 800;

            letter-spacing: -2px;
        }

        .portfolio-line {
            width: 100%;
            height: 1px;

            margin: 25px 0;

            background: rgba(255,255,255,.08);
        }

        .portfolio-blocks {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 8px;
        }

        .portfolio-blocks div {
            height: 80px;

            border-radius: 10px;

            background:
                linear-gradient(
                    145deg,
                    #17243a,
                    #0d1522
                );
        }


        /* =========================================================
           PROCESS
        ========================================================= */

        .process-heading h2 {
            max-width: 800px;
        }

        .process-grid {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 12px;

            margin-top: 65px;
        }

        .process-card {
            min-height: 330px;

            padding: 28px;

            border: 1px solid var(--border);

            border-radius: 20px;

            background: var(--surface);

            transition:
                transform .45s var(--ease),
                border-color .4s ease,
                background .4s ease;
        }

        .process-card:hover {
            transform: translateY(-9px);

            border-color:
                rgba(23,105,255,.35);

            background:
                linear-gradient(
                    145deg,
                    #101827,
                    #0c121b
                );
        }

        .process-number {
            color: var(--muted-2);

            font-size: 9px;
        }

        .process-icon {
            width: 44px;
            height: 44px;

            display: flex;

            align-items: center;
            justify-content: center;

            margin: 55px 0 25px;

            border-radius: 12px;

            background:
                rgba(23,105,255,.10);

            color: var(--blue-light);

            font-size: 18px;

            transition:
                transform .5s ease,
                background .4s ease;
        }

        .process-card:hover .process-icon {
            transform:
                rotate(8deg)
                scale(1.08);

            background:
                rgba(23,105,255,.18);
        }

        .process-card h3 {
            margin-bottom: 12px;

            font-size: 18px;
        }

        .process-card p {
            color: var(--muted);

            font-size: 11px;

            line-height: 1.8;
        }


        /* =========================================================
           SKILLS
        ========================================================= */

        .skills-layout {
            display: grid;

            grid-template-columns:
                .8fr 1.2fr;

            gap: 100px;
        }

        .skills-heading > p:last-child {
            max-width: 410px;

            margin-top: 28px;

            color: var(--muted);

            font-size: 12px;

            line-height: 1.85;
        }

        .skills-list {
            border-top: 1px solid var(--border);
        }

        .skill-row {
            display: grid;

            grid-template-columns:
                45px 1fr 1fr;

            align-items: center;

            min-height: 75px;

            border-bottom: 1px solid var(--border);

            transition:
                padding-left .3s ease,
                background .3s ease;
        }

        .skill-row:hover {
            padding-left: 10px;

            background:
                rgba(255,255,255,.012);
        }

        .skill-number {
            color: var(--muted-2);

            font-size: 9px;
        }

        .skill-row strong {
            font-size: 14px;

            font-weight: 500;

            transition: color .3s ease;
        }

        .skill-row:hover strong {
            color: var(--blue-light);
        }

        .skill-row small {
            color: var(--muted-2);

            font-size: 9px;
        }

        .tools {
            display: flex;

            flex-wrap: wrap;

            gap: 8px;

            margin-top: 55px;
        }

        .tools span {
            padding: 10px 15px;

            border: 1px solid var(--border);

            border-radius: 50px;

            color: var(--muted);

            font-size: 9px;

            transition:
                transform .3s ease,
                color .3s ease,
                border-color .3s ease;
        }

        .tools span:hover {
            transform: translateY(-4px);

            color: white;

            border-color:
                rgba(91,149,255,.4);
        }


        /* =========================================================
           EDUCATION
        ========================================================= */

        .education-card {
            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 80px;

            padding: 60px;

            border: 1px solid var(--border);

            border-radius: 25px;

            background: var(--surface);
        }

        .education-year {
            color: var(--blue-light);

            font-size: 9px;

            letter-spacing: 2px;
        }

        .education-card h2 {
            margin-top: 15px;

            font-family: "Manrope", sans-serif;

            font-size: clamp(32px, 4vw, 52px);

            line-height: 1;

            letter-spacing: -3px;
        }

        .education-major {
            margin-top: 10px;

            color: var(--muted);

            font-size: 12px;
        }

        .education-description {
            display: flex;

            align-items: flex-end;
        }

        .education-description p {
            color: var(--muted);

            font-size: 12px;

            line-height: 1.85;
        }

        .edu-badge {

            display: inline-flex;

            align-items: center;

            gap: 10px;

            margin-top: 22px;

            padding: 10px 18px;

            border: 1px solid rgba(0, 255, 136, .25);

            border-radius: 50px;

            background: rgba(0, 255, 136, .05);

            color: var(--primary);

            font-size: 9px;

            letter-spacing: 1.5px;
        }

        .edu-badge span {
            color: var(--muted);
        }


        /* =========================================================
           HERO META — CONTACT STRIP
        ========================================================= */

        .hero-meta {

            display: flex;

            flex-wrap: wrap;

            justify-content: center;

            gap: 12px 28px;

            margin-top: 32px;
        }

        .hero-meta a,
        .hero-meta span {

            display: inline-flex;

            align-items: center;

            gap: 9px;

            color: var(--muted);

            font-size: 10px;

            letter-spacing: .4px;

            transition: color .3s ease;
        }

        .hero-meta a:hover {
            color: var(--primary);
        }

        .hero-meta .m-icon {
            color: var(--secondary);

            font-size: 11px;
        }


        /* =========================================================
           TIMELINE — EXPERIENCE & ORGANIZATION
        ========================================================= */

        .timeline {

            position: relative;

            display: flex;

            flex-direction: column;

            gap: 28px;

            margin-top: 18px;
        }

        .timeline::before {

            content: "";

            position: absolute;

            top: 10px;

            bottom: 10px;

            left: 7px;

            width: 1px;

            background: linear-gradient(
                180deg,
                var(--primary),
                var(--secondary),
                transparent
            );

            opacity: .4;
        }

        .tl-item {

            position: relative;

            padding-left: 46px;
        }

        .tl-dot {

            position: absolute;

            top: 5px;

            left: 0;

            width: 15px;

            height: 15px;

            border: 1px solid var(--primary);

            border-radius: 50%;

            background: var(--bg);

            box-shadow: 0 0 12px var(--primary-glow);
        }

        .tl-item:nth-child(2) .tl-dot {
            border-color: var(--secondary);
            box-shadow: 0 0 12px var(--secondary-glow);
        }

        .tl-item:nth-child(3) .tl-dot {
            border-color: var(--purple);
            box-shadow: 0 0 12px var(--purple-glow);
        }

        .tl-date {

            color: var(--primary);

            font-size: 9px;

            letter-spacing: 2px;
        }

        .tl-item h3 {

            margin: 12px 0 5px;

            font-family: "Manrope", sans-serif;

            font-size: clamp(19px, 2.4vw, 24px);

            letter-spacing: -1px;
        }

        .tl-role {

            color: var(--muted);

            font-size: 11px;
        }

        .tl-role em {

            color: var(--secondary);

            font-style: normal;
        }

        .tl-points {

            margin-top: 16px;

            padding-left: 18px;

            list-style: none;
        }

        .tl-points li {

            position: relative;

            margin-bottom: 11px;

            color: var(--muted);

            font-size: 11.5px;

            line-height: 1.8;
        }

        .tl-points li::before {

            content: "▸";

            position: absolute;

            left: -18px;

            color: var(--primary);

            font-size: 10px;
        }


        /* =========================================================
           SKILL GROUPS
        ========================================================= */

        .skill-groups {

            display: grid;

            grid-template-columns: repeat(2, minmax(0, 1fr));

            gap: 18px;

            margin-top: 45px;
        }

        .skills-layout .skill-groups {
            margin-top: 0;
        }

        .skill-group {

            padding: 28px;

            border: 1px solid var(--border);

            border-radius: 18px;

            background: var(--surface);

            transition:
                transform .3s ease,
                border-color .3s ease;
        }

        .skill-group:hover {

            transform: translateY(-4px);

            border-color: rgba(0, 255, 136, .28);
        }

        .skill-group-head {

            display: flex;

            align-items: center;

            gap: 12px;

            margin-bottom: 20px;
        }

        .skill-group-head .g-icon {

            display: grid;

            place-items: center;

            width: 32px;

            height: 32px;

            flex-shrink: 0;

            border: 1px solid var(--border);

            border-radius: 10px;

            background: rgba(0, 255, 136, .06);

            color: var(--primary);

            font-size: 12px;
        }

        .skill-group-head strong {

            font-size: 12px;

            font-weight: 500;

            letter-spacing: .3px;
        }

        .skill-tags {

            display: flex;

            flex-wrap: wrap;

            gap: 7px;
        }

        .skill-tag {

            padding: 7px 12px;

            border: 1px solid var(--border);

            border-radius: 50px;

            color: var(--muted);

            font-size: 9px;

            transition:
                color .3s ease,
                border-color .3s ease;
        }

        .skill-tag:hover {

            color: var(--white);

            border-color: rgba(0, 212, 255, .4);
        }


        /* =========================================================
           CONTACT LINKS
        ========================================================= */

        .contact-links {

            display: flex;

            flex-wrap: wrap;

            justify-content: center;

            gap: 14px;

            margin-top: 44px;
        }

        .contact-links a {

            display: inline-flex;

            align-items: center;

            gap: 10px;

            padding: 14px 24px;

            border: 1px solid var(--border);

            border-radius: 50px;

            color: var(--muted);

            font-size: 10px;

            letter-spacing: .5px;

            transition:
                color .3s ease,
                border-color .3s ease,
                transform .3s ease;
        }

        .contact-links a:hover {

            transform: translateY(-3px);

            color: var(--white);

            border-color: rgba(0, 255, 136, .4);
        }

        .contact-links .c-icon {

            color: var(--primary);

            font-size: 11px;
        }


        /* =========================================================
           CONTACT
        ========================================================= */

        .contact {
            position: relative;

            min-height: 650px;

            display: flex;

            flex-direction: column;

            align-items: center;
            justify-content: center;

            padding: 100px 0;

            text-align: center;

            overflow: hidden;

            border-top: 1px solid var(--border);
        }

        .contact::before {
            content: "";

            position: absolute;

            width: 650px;
            height: 400px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(23,105,255,.18),
                    transparent 65%
                );

            filter: blur(40px);

            animation:
                contactGlow 8s ease-in-out infinite;
        }

        @keyframes contactGlow {
            0%, 100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.12);
            }
        }

        .contact > * {
            position: relative;

            z-index: 2;
        }

        .contact h2 {
            max-width: 900px;

            margin-top: 20px;

            font-family: "Manrope", sans-serif;

            font-size: clamp(55px, 8vw, 110px);

            line-height: .9;

            letter-spacing: -7px;
        }

        .contact h2 em {
            color: var(--blue-light);

            font-family: "Playfair Display", serif;

            font-style: italic;

            font-weight: 500;
        }

        .contact-description {
            max-width: 440px;

            margin-top: 28px;

            color: var(--muted);

            font-size: 12px;

            line-height: 1.8;
        }

        .contact-button {
            display: inline-flex;

            align-items: center;

            gap: 8px;

            margin-top: 30px;

            padding: 14px 23px;

            border-radius: 50px;

            background: white;

            color: var(--bg);

            font-size: 10px;

            transition:
                transform .3s ease,
                box-shadow .3s ease;
        }

        .contact-button:hover {
            transform: translateY(-4px);

            box-shadow:
                0 18px 45px rgba(255,255,255,.12);
        }


        /* =========================================================
           FOOTER
        ========================================================= */

        footer {
            padding: 45px 0 30px;
        }

        .footer-top {
            display: flex;

            align-items: flex-end;
            justify-content: space-between;

            padding-bottom: 30px;

            border-bottom: 1px solid var(--border);
        }

        .footer-logo {
            font-family: "Manrope", sans-serif;

            font-size: 32px;

            font-weight: 800;

            letter-spacing: -2px;
        }

        .footer-logo span {
            color: var(--blue);
        }

        .footer-top p {
            color: var(--muted-2);

            font-size: 9px;
        }

        .footer-meta {

            display: flex;

            flex-direction: column;

            align-items: flex-end;

            gap: 12px;

            text-align: right;
        }

        .footer-social {

            display: flex;

            flex-wrap: wrap;

            justify-content: flex-end;

            gap: 8px 20px;
        }

        .footer-social a {

            color: var(--muted);

            font-size: 9px;

            transition: color .3s ease;
        }

        .footer-social a:hover {
            color: var(--primary);
        }

        .footer-bottom {
            display: flex;

            justify-content: space-between;

            padding-top: 20px;

            color: var(--muted-2);

            font-size: 9px;
        }

        .footer-links {
            display: flex;

            gap: 22px;
        }

        .footer-links a {
            transition: color .3s ease;
        }

        .footer-links a:hover {
            color: white;
        }


        /* =========================================================
           SCROLL REVEAL
        ========================================================= */

        .reveal {
            opacity: 0;

            transform:
                translateY(45px);

            transition:
                opacity .9s ease,
                transform .9s var(--ease);
        }

        .reveal.active {
            opacity: 1;

            transform:
                translateY(0);
        }


        /* =========================================================
           CURSOR GLOW
        ========================================================= */

        .cursor-glow {
            position: fixed;

            width: 170px;
            height: 170px;

            border-radius: 50%;

            pointer-events: none;

            z-index: 9999;

            transform:
                translate(-50%, -50%);

            background:
                radial-gradient(
                    circle,
                    rgba(23,105,255,.09),
                    transparent 70%
                );

            opacity: 0;

            transition: opacity .3s ease;
        }


        /* =========================================================
           MOBILE MENU BUTTON
        ========================================================= */

        .mobile-toggle {
            display: none;

            width: 40px;
            height: 40px;

            border: 1px solid var(--border);

            border-radius: 50%;

            background: transparent;

            color: white;

            cursor: pointer;
        }


        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media (max-width: 1000px) {

            .container {
                width:
                    min(100% - 50px, var(--container));
            }

            .hero-top {
                width:
                    calc(100% - 50px);
            }

            .about-grid,
            .skills-layout {
                grid-template-columns: 1fr;

                gap: 60px;
            }

            .project,
            .project.reverse {
                grid-template-columns: 1fr;
            }

            .project.reverse .project-image,
            .project.reverse .project-content {
                order: initial;
            }

            .project-image {
                min-height: 450px;
            }

            .process-grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }

            .education-card {
                grid-template-columns: 1fr;

                gap: 40px;
            }

        }


        /* Desktop: Show only hamburger */
        @media (min-width: 701px) {
            .nav-menu {
                display: none !important;
            }
            .mobile-toggle {
                display: flex !important;
            }
        }


        @media (max-width: 700px) {

            .container {
                width:
                    calc(100% - 40px);
            }

            .nav-menu,
            .nav-contact,
            .nav-download {
                display: none;
            }

            .mobile-toggle {
                display: flex;

                align-items: center;
                justify-content: center;
            }

            .nav-inner {
                min-height: 72px;
            }

            .hero {
                padding:
                    130px 20px 70px;
            }

            .hero-top {
                top: 95px;

                width:
                    calc(100% - 40px);
            }

            .hero-location {
                display: none;
            }

            .hero-title {
                font-size: 64px;

                letter-spacing: -5px;
            }

            .hero-title .line-two {
                letter-spacing: -4px;
            }

            .hero-subtitle {
                flex-wrap: wrap;

                gap: 8px;
            }

            .hero-photo {
                width: 300px;
                height: 370px;
            }

            .hero-description {
                max-width: 330px;
            }

            .hero-actions {
                flex-direction: column;

                width: 100%;
                max-width: 280px;
            }

            .button {
                width: 100%;
            }

            .section {
                padding:
                    90px 0;
            }

            .section-label {
                margin-bottom: 45px;
            }

            .about-heading h2,
            .process-heading h2,
            .skills-heading h2 {
                font-size: 48px;

                letter-spacing: -4px;
            }

            .about-info {
                grid-template-columns: 1fr;
            }

            .works-header {
                flex-direction: column;

                align-items: flex-start;

                gap: 25px;
            }

            .works-header h2 {
                font-size: 55px;

                letter-spacing: -4px;
            }

            .project {
                margin-bottom: 30px;

                border-radius: 20px;
            }

            .project-image {
                min-height: 340px;
            }

            .project-content {
                padding: 38px 25px;
            }

            .project-content h3 {
                font-size: 36px;

                letter-spacing: -2px;
            }

            .project-details {
                grid-template-columns: 1fr;

                gap: 15px;
            }

            .browser {
                width: 82%;
            }

            .phone {
                width: 190px;
            }

            .nature-card {
                width: 78%;
            }

            .fitness {
                width: 82%;
            }

            .portfolio-card {
                width: 82%;
            }

            .process-grid {
                grid-template-columns: 1fr;
            }

            .process-card {
                min-height: 280px;
            }

            .skill-row {
                grid-template-columns:
                    35px 1fr;

                min-height: 85px;
            }

            .skill-row small {
                grid-column: 2;
            }

            .education-card {
                padding: 35px 25px;
            }

            .contact {
                min-height: 560px;
            }

            .contact h2 {
                font-size: 56px;

                letter-spacing: -4px;
            }

            .footer-top,
            .footer-bottom {
                flex-direction: column;

                align-items: flex-start;

                gap: 20px;
            }

            .footer-meta {

                align-items: flex-start;

                text-align: left;
            }

            .footer-social {
                justify-content: flex-start;
            }

            .footer-links {
                flex-wrap: wrap;
            }

        }


        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;

                animation-iteration-count: 1 !important;

                scroll-behavior: auto !important;

                transition-duration: .01ms !important;
            }

        }

        /* Calm, light portfolio theme */
        :root {
            --bg: #fbfaf8;
            --bg-soft: #fbfaf8;
            --surface: #ffffff;
            --surface-light: #f4f1ed;
            --primary: #9a8066;
            --primary-glow: rgba(154, 128, 102, .12);
            --secondary: #9a8066;
            --secondary-glow: rgba(154, 128, 102, .12);
            --accent: #9a8066;
            --accent-glow: rgba(154, 128, 102, .12);
            --purple: #9a8066;
            --purple-glow: rgba(154, 128, 102, .12);
            --blue: #8b735b;
            --blue-light: #9a8066;
            --white: #292722;
            --text: #45413b;
            --muted: #77716a;
            --muted-2: #918a82;
            --border: #e9e5df;
            --container: 1120px;
        }

        html {
            scroll-padding-top: 88px;
        }

        body {
            background: var(--bg);
            color: var(--white);
            font-family: "DM Sans", sans-serif;
            opacity: 1;
            animation: none;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .cyber-grid,
        .floating-shapes,
        .glow-orb,
        .scanlines,
        .cursor-glow,
        #particleCanvas,
        .sparkle {
            display: none !important;
        }

        .container {
            width: min(var(--container), calc(100% - 64px));
        }

        .navbar,
        .navbar.scrolled {
            background: rgba(251, 250, 248, .94);
            border-bottom: 1px solid rgba(41, 39, 34, .08);
            box-shadow: none;
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            animation: none;
        }

        .nav-inner {
            min-height: 76px;
        }

        .logo,
        .footer-logo {
            color: #292722;
            font-size: 21px;
            font-weight: 700;
            letter-spacing: -1px;
        }

        .logo span,
        .footer-logo span {
            color: var(--blue);
        }

        .nav-menu {
            gap: 27px;
        }

        .nav-menu a {
            color: #625d56;
            font-size: 13px;
        }

        .nav-menu a:hover {
            color: #292722;
        }

        .nav-menu a::after {
            background: var(--blue);
        }

        .nav-menu a:last-child {
            padding: 11px 16px;
            border: 1px solid var(--border);
            border-radius: 999px;
            color: #45413b;
        }

        .nav-menu a:last-child::after {
            display: none;
        }

        .hero {
            min-height: auto;
            padding: 150px 24px 88px;
            overflow: visible;
            background: transparent;
        }

        .hero-content {
            width: min(100%, 900px);
            display: grid;
            grid-template-columns: minmax(0, 1.1fr) minmax(280px, .8fr);
            align-items: center;
            column-gap: clamp(32px, 6vw, 78px);
            text-align: left;
        }

        .hero-badge {
            grid-column: 1;
            justify-self: start;
        }

        .hero-title {
            grid-column: 1;
            text-align: left;
            font-size: clamp(58px, 7.5vw, 94px);
        }

        .hero-badge {
            margin-bottom: 25px;
            padding: 8px 13px;
            border: 1px solid #e8e2d9;
            background: #f5f1eb;
            animation: none;
        }

        .badge-dot {
            width: 7px;
            height: 7px;
            background: #8d987d;
            box-shadow: none;
            animation: none;
        }

        .badge-text {
            color: #6d725f;
            font-size: 10px;
            letter-spacing: 1px;
        }

        .hero-title {
            margin-bottom: 0;
            color: #292722;
            font-family: "Manrope", sans-serif;
            font-size: clamp(58px, 9.5vw, 112px);
            font-weight: 600;
            line-height: .96;
            letter-spacing: -.075em;
        }

        .hero-title .line-one,
        .hero-title .line-two {
            display: block;
            color: #292722;
            text-shadow: none;
            animation: none;
        }

        .hero-title .line-two {
            color: var(--blue);
            font-family: "Playfair Display", serif;
            font-style: italic;
            font-weight: 500;
            letter-spacing: -.055em;
        }

        .hero-title .line-three,
        .hero-title .line-four {
            display: inline;
            color: #77716a;
            font-size: .54em;
            font-weight: 400;
            letter-spacing: -.04em;
            text-shadow: none;
        }

        .text-reveal {
            animation: none;
        }

        .hero-subtitle {
            grid-column: 1;
            justify-content: flex-start;
            flex-wrap: wrap;
            gap: 9px;
            margin-top: 19px;
            color: #77716a;
            font-size: 13px;
            letter-spacing: .01em;
            animation: none;
        }

        .hero-subtitle i {
            color: #b7a58f;
        }

        .hero-photo {
            grid-column: 2;
            grid-row: 1 / span 4;
            width: 100%;
            height: min(450px, 44vw);
            margin: 0;
            animation: none;
        }

        .hero-photo::before,
        .hero-photo::after {
            display: none;
        }

        .hero-photo img {
            filter: drop-shadow(0 18px 24px rgba(58, 48, 37, .1));
        }

        .hero-actions {
            grid-column: 1;
            justify-content: flex-start;
            gap: 12px;
            margin-top: 24px;
            animation: none;
        }

        .button,
        .contact-button {
            min-height: 46px;
            padding: 0 20px;
            border: 1px solid transparent;
            border-radius: 999px;
            font-size: 13px;
            transition: background .25s ease, color .25s ease, transform .25s ease;
        }

        .button-primary {
            background: #8b735b;
            box-shadow: none;
            color: #fff;
        }

        .button-primary:hover,
        .contact-button:hover {
            background: #715c48;
            box-shadow: none;
            transform: translateY(-2px);
        }

        .button-outline {
            border-color: var(--border);
            background: #fff;
            color: #45413b;
        }

        .button-outline:hover {
            border-color: #cbbba8;
            background: #f7f4ef;
            transform: translateY(-2px);
        }

        .marquee {
            display: none;
        }

        .section {
            padding: 92px 0;
        }

        .section-label {
            gap: 12px;
            margin-bottom: 34px;
            color: #77716a;
            font-size: 10px;
            letter-spacing: 1.8px;
        }

        .section-label span {
            color: #a28c73;
        }

        .eyebrow {
            color: #9a8066;
            font-size: 10px;
            letter-spacing: 2px;
        }

        .about-grid,
        .skills-layout {
            grid-template-columns: minmax(0, .9fr) minmax(0, 1.1fr);
            gap: 70px;
        }

        .about-heading h2,
        .works-header h2,
        .process-heading h2,
        .skills-heading h2 {
            color: #292722;
            font-family: "Manrope", sans-serif;
            font-size: clamp(34px, 4vw, 52px);
            font-weight: 500;
            line-height: 1.12;
            letter-spacing: -.055em;
        }

        .about-heading h2 em,
        .works-header h2 em,
        .process-heading h2 em,
        .skills-heading h2 em,
        .contact h2 em {
            color: var(--blue);
            font-family: "Playfair Display", serif;
            font-weight: 500;
        }

        .about-content .large-text {
            color: #45413b;
            font-size: 19px;
            line-height: 1.7;
        }

        .about-content p,
        .skills-heading > p:last-child,
        .works-header > p {
            color: #77716a;
            font-size: 14px;
            line-height: 1.85;
        }

        .about-info {
            gap: 14px;
            margin-top: 27px;
        }

        .info-item {
            padding: 14px 16px;
            border: 1px solid var(--border);
            border-radius: 12px;
            background: #fff;
        }

        .info-item small {
            color: #918a82;
        }

        .info-item strong {
            color: #45413b;
        }

        .works-header {
            align-items: end;
            gap: 35px;
            margin-bottom: 42px;
        }

        .project,
        .project.reverse {
            grid-template-columns: minmax(0, 1.05fr) minmax(0, .95fr);
            gap: clamp(28px, 5vw, 72px);
            align-items: center;
            margin-bottom: 62px;
            padding: 0;
            border: 0;
            background: transparent;
            box-shadow: none;
            transform: none !important;
        }

        .project.reverse .project-image {
            order: 0;
        }

        .project.reverse .project-content {
            order: 0;
        }

        .project-image {
            min-height: 0;
            height: clamp(260px, 34vw, 410px);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border: 1px solid rgba(41, 39, 34, .06);
            border-radius: 18px;
            background: #f2eee8;
            box-shadow: 0 12px 35px rgba(58, 48, 37, .06);
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
            border-radius: 0 !important;
            box-shadow: none !important;
        }

        .project-content {
            padding: 0;
        }

        .project-number,
        .project-category {
            color: #9a8066;
            font-size: 10px;
            letter-spacing: 1.3px;
        }

        .project-content h3 {
            margin-top: 12px;
            color: #292722;
            font-family: "Manrope", sans-serif;
            font-size: clamp(24px, 3vw, 34px);
            font-weight: 500;
            line-height: 1.2;
            letter-spacing: -.04em;
        }

        .project-content > p {
            margin-top: 14px;
            color: #77716a;
            font-size: 14px;
            line-height: 1.8;
        }

        .project-details {
            gap: 14px;
            margin-top: 22px;
        }

        .project-details span {
            color: #918a82;
            font-size: 9px;
        }

        .project-details strong {
            color: #45413b;
            font-size: 12px;
        }

        .project-link {
            display: inline-flex;
            gap: 8px;
            margin-top: 24px;
            color: #8b735b;
            font-size: 13px;
        }

        .process-heading {
            margin-bottom: 32px;
        }

        .process-grid {
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 14px;
        }

        .process-card {
            padding: 24px 20px;
            border: 1px solid var(--border);
            border-radius: 14px;
            background: #fff;
            box-shadow: none;
            transition: transform .25s ease, border-color .25s ease;
        }

        .process-card:hover {
            border-color: #d7c8b7;
            transform: translateY(-3px);
        }

        .process-number,
        .process-icon {
            color: #a28c73;
        }

        .process-icon {
            margin: 22px 0 15px;
        }

        .process-card h3 {
            color: #292722;
            font-size: 17px;
        }

        .process-card p {
            color: #77716a;
            font-size: 12px;
            line-height: 1.75;
        }

        .skill-row {
            border-bottom-color: var(--border);
        }

        .skill-number,
        .skill-row small {
            color: #918a82;
        }

        .skill-row strong {
            color: #45413b;
        }

        .tools {
            gap: 8px;
            margin-top: 24px;
        }

        .tools span {
            padding: 8px 12px;
            border: 1px solid var(--border);
            border-radius: 999px;
            background: #fff;
            color: #6b655e;
            font-size: 11px;
        }

        .education-card {
            gap: 40px;
            padding: 40px;
            border: 1px solid var(--border);
            border-radius: 16px;
            background: #fff;
            box-shadow: none;
        }

        .education-year {
            color: #9a8066;
        }

        .education-card h2 {
            color: #292722;
            font-weight: 500;
            letter-spacing: -.05em;
        }

        .education-major,
        .education-description p {
            color: #77716a;
        }

        .contact {
            min-height: 0;
            padding: 100px 24px;
            border-top: 1px solid var(--border);
            background: #f5f2ed;
        }

        .contact::before {
            display: none;
        }

        .contact h2 {
            max-width: 760px;
            color: #292722;
            font-size: clamp(42px, 7vw, 76px);
            font-weight: 500;
            line-height: 1.05;
            letter-spacing: -.06em;
        }

        .contact-description {
            color: #77716a;
            font-size: 14px;
        }

        .contact-button {
            min-height: 46px;
            background: #8b735b;
            color: #fff;
        }

        footer {
            padding: 38px 0 28px;
            background: #fbfaf8;
        }

        .footer-top {
            border-bottom-color: var(--border);
        }

        .footer-top p,
        .footer-bottom {
            color: #918a82;
            font-size: 11px;
        }

        .footer-links a:hover {
            color: #292722;
        }

        .reveal {
            opacity: 0;
            transform: translateY(18px);
            transition: opacity .65s ease, transform .65s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .mobile-toggle {
            display: none;
            width: 40px;
            height: 40px;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--border);
            border-radius: 50%;
            background: #fff;
            color: #45413b;
            font-size: 18px;
        }

        @media (min-width: 701px) {
            .nav-menu {
                display: flex !important;
            }

            .mobile-toggle {
                display: none !important;
            }
        }

        @media (max-width: 900px) {
            .hero-content {
                display: flex;
                flex-direction: column;
                text-align: center;
            }

            .hero-badge {
                align-self: center;
            }

            .hero-title {
                text-align: center;
            }

            .hero-subtitle {
                justify-content: center;
            }

            .hero-photo {
                width: min(330px, 78vw);
                height: 330px;
                margin: 20px auto 0;
            }

            .hero-actions {
                justify-content: center;
            }

            .process-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .about-grid,
            .skills-layout {
                gap: 38px;
            }
        }

        @media (max-width: 700px) {
            .container {
                width: calc(100% - 40px);
            }

            .nav-inner {
                min-height: 68px;
            }

            .mobile-toggle {
                display: inline-flex !important;
            }

            .nav-menu {
                position: absolute;
                top: calc(100% + 8px);
                left: 20px;
                right: 20px;
                display: none !important;
                align-items: stretch;
                gap: 0;
                padding: 10px;
                border: 1px solid var(--border);
                border-radius: 14px;
                background: #fff;
                box-shadow: 0 14px 35px rgba(58, 48, 37, .09);
            }

            .nav-menu.mobile-open {
                display: flex !important;
                flex-direction: column;
            }

            .nav-menu a,
            .nav-menu a:last-child {
                padding: 12px;
                border: 0;
                border-radius: 8px;
            }

            .nav-menu a:hover {
                background: #f7f4ef;
            }

            .hero {
                padding: 126px 20px 70px;
            }

            .hero-title {
                font-size: clamp(52px, 13vw, 82px);
                letter-spacing: -.07em;
            }

            .hero-subtitle {
                font-size: 11px;
            }

            .hero-photo {
                width: min(285px, 78vw);
                height: 290px;
            }

            .section {
                padding: 70px 0;
            }

            .about-grid,
            .skills-layout,
            .project,
            .project.reverse {
                grid-template-columns: 1fr;
                gap: 28px;
            }

            .works-header {
                display: block;
            }

            .works-header > p {
                margin-top: 18px;
            }

            .project {
                margin-bottom: 46px;
            }

            .project-image {
                height: min(78vw, 340px);
            }

            .process-grid {
                grid-template-columns: 1fr;
            }

            .education-card {
                grid-template-columns: 1fr;
                gap: 22px;
                padding: 26px 22px;
            }

            .skill-groups {
                grid-template-columns: 1fr;
            }

            .skill-group {
                padding: 24px 20px;
            }

            .timeline {
                gap: 24px;
            }

            .tl-item {
                padding-left: 36px;
            }

            .hero-meta {
                gap: 10px 18px;
            }

            .contact {
                padding: 76px 20px;
            }

            .contact h2 {
                font-size: clamp(40px, 11vw, 60px);
                letter-spacing: -.055em;
            }
        }

        @media (max-width: 480px) {
            .hero-actions {
                flex-direction: column;
                align-items: center;
            }

            .button {
                width: min(100%, 220px);
            }

            .about-info {
                grid-template-columns: 1fr;
            }

            .skill-row {
                grid-template-columns: 30px 1fr;
                gap: 8px;
                padding: 15px 0;
            }

            .skill-row small {
                grid-column: 2;
            }

            .footer-top,
            .footer-bottom {
                align-items: flex-start;
                flex-direction: column;
                gap: 16px;
            }

            .footer-links {
                flex-wrap: wrap;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .reveal,
            .reveal.active {
                opacity: 1;
                transform: none;
                transition: none;
            }
        }

    </style>
</head>


<body>

    <!-- =========================================================
         BACKGROUND EFFECTS
    ========================================================== -->

    <div class="cyber-grid"></div>

    <div class="glow-orb orb-1"></div>
    <div class="glow-orb orb-2"></div>
    <div class="glow-orb orb-3"></div>

    <div class="floating-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>
        <div class="shape shape-5"></div>
        <div class="shape shape-6"></div>
    </div>

    <div class="scanlines"></div>

    <div class="cursor-glow" id="cursorGlow"></div>

    <!-- Particle Canvas -->
    <canvas id="particleCanvas"></canvas>


    <!-- =========================================================
         NAVBAR
    ========================================================== -->

    <header class="navbar" id="navbar">

        <div class="container nav-inner">

            <a href="#home" class="logo">
                Portofolio<span>.</span>
            </a>


            <nav class="nav-menu" id="navMenu">

                <a href="#about">
                    About
                </a>

                <a href="#works">
                    Works
                </a>

                <a href="#experience">
                    Experience
                </a>

                <a href="#process">
                    Process
                </a>

                <a href="#skills">
                    Skills
                </a>

                <a href="#contact">
                    Contact
                </a>

                <a href="{{ asset('images/Silva_Aulia_Nursamsiah_CV_.pdf') }}" download="CV_Silva_Aulia_Nursamsiah.pdf">
                    Download CV
                </a>

            </nav>


            <button
                class="mobile-toggle"
                id="mobileToggle"
                type="button"
                aria-label="Menu"
                aria-controls="navMenu"
                aria-expanded="false"
            >
                ☰
            </button>

        </div>

    </header>


    <!-- =========================================================
         HERO
    ========================================================== -->

    <main>

        <section class="hero" id="home">

            <div class="hero-content">

                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    <span class="badge-text">Available for Work</span>
                </div>


                <h1 class="hero-title">

                    <span class="line-one">
                        <span class="text-reveal">Portofolio</span>
                    </span>

                    <span class="line-two">
                        <span class="text-reveal" style="animation-delay: 0.3s">Silva Aulia Nursamsiah</span>
                    </span>

                </h1>


                <div class="hero-subtitle">

                    <span>
                        UI/UX Web/Mobile
                    </span>

                    <i>•</i>

                    <span>
                        Front-end Dev
                    </span>
            
                    <i>•</i>

                    <span>
                        Backend Dev
                    </span>
                    <i>•</i>
                    <span>
                        Administrasi
                    </span>
                </div>


                <div class="hero-photo">

                    <img
                        src="{{ asset('images/silva-hero-photo.png') }}"
                        alt="Silva Aulia Nursamsiah"
                    >

                    <span class="sparkle sparkle-1">✦</span>
                    <span class="sparkle sparkle-2">✦</span>
                    <span class="sparkle sparkle-3">✦</span>
                    <span class="sparkle sparkle-4">✦</span>

                </div>


                <div class="hero-meta">

                    <span>
                        <span class="m-icon">◉</span>
                        Kab. Cianjur, Jawa Barat
                    </span>

                    <a href="mailto:silvaaulia166@gmail.com">
                        <span class="m-icon">✉</span>
                        silvaaulia166@gmail.com
                    </a>

                    <a href="https://wa.me/62895394577788" target="_blank" rel="noopener noreferrer">
                        <span class="m-icon">☎</span>
                        +62 895 3945 77788
                    </a>

                    <a href="https://linkedin.com/in/silva-aulia-nursamsiah-b9434423b" target="_blank" rel="noopener noreferrer">
                        <span class="m-icon">in</span>
                        LinkedIn
                    </a>

                    <a href="https://portofolio-silva.up.railway.app" target="_blank" rel="noopener noreferrer">
                        <span class="m-icon"></span>
                        portofolio-silva.up.railway.app
                    </a>

                </div>



                <div class="hero-actions">

                    <a
                        href="#works"
                        class="button button-primary"
                    >
                        Explore My Work
                        <span>↗</span>
                    </a>


                    <a
                        href="https://wa.me/62895394577788"
                        target="_blank"
                        class="button button-outline"
                    >
                        Contact Me
                    </a>

                </div>

            </div>

        </section>


        <!-- =====================================================
             MARQUEE
        ====================================================== -->

        <div class="marquee">

            <div class="marquee-track">

                <span>UI/UX DESIGN</span>
                <i>✦</i>

                <span>VISUAL DESIGN</span>
                <i>✦</i>

                <span>WEB DESIGN</span>
                <i>✦</i>

                <span>GRAPHIC DESIGN</span>
                <i>✦</i>

                <span>FIGMA</span>
                <i>✦</i>

                <span>LARAVEL</span>
                <i>✦</i>

                <span>CREATIVE TECHNOLOGY</span>
                <i>✦</i>

                <span>UI/UX DESIGN</span>
                <i>✦</i>

                <span>VISUAL DESIGN</span>
                <i>✦</i>

                <span>WEB DESIGN</span>
                <i>✦</i>

            </div>

        </div>


        <!-- =====================================================
             ABOUT
        ====================================================== -->

        <section class="section" id="about">

            <div class="container">

                <div class="section-label">
                    <span>01</span>
                    ABOUT ME
                </div>


                <div class="about-grid reveal">

                    <div class="about-heading">

                        <p class="eyebrow">
                            WHO I AM
                        </p>

                        <h2>
                            Designing with
                            <em>purpose</em>
                            and curiosity.
                        </h2>

                    </div>


                    <div class="about-content">

                        <p class="large-text">

                            Fresh Graduate Teknik Informatika dengan fokus
                            pada UI/UX Design, Frontend Development,
                            dan Backend Development.

                        </p>


                        <p>

                            Saya memiliki pemahaman dan pengalaman dalam
                            pengembangan perangkat lunak, perancangan
                            antarmuka pengguna, pengelolaan basis data,
                            serta manajemen proyek IT. Saya menikmati
                            proses mengubah ide dan permasalahan menjadi
                            tampilan digital yang sederhana, menarik,
                            dan mudah digunakan.

                        </p>


                        <p>

                            Terampil menggunakan Figma untuk membuat desain
                            antarmuka, user flow, wireframe, dan prototype.
                            Memahami pengelolaan basis data menggunakan
                            MySQL, pengolahan data dengan Microsoft Excel,
                            penyusunan dokumen dengan Microsoft Word,
                            serta pengelolaan kode sumber menggunakan
                            Git dan GitHub.

                        </p>


                        <p>

                            Latar belakang Teknik Informatika juga
                            membantu saya memahami bagaimana sebuah
                            desain dapat diterapkan menjadi produk
                            digital yang benar-benar berfungsi.

                        </p>


                        <div class="about-info">

                            <div class="info-item">

                                <span>
                                    EDUCATION
                                </span>

                                <strong>
                                    Teknik Informatika
                                </strong>

                                <small>
                                    Universitas Suryakancana · 2022 — 2026
                                </small>

                            </div>


                            <div class="info-item">

                                <span>
                                    FOCUS
                                </span>

                                <strong>
                                    Design & Technology
                                </strong>

                                <small>
                                    UI/UX · Frontend · Backend
                                </small>

                            </div>


                            <div class="info-item">

                                <span>
                                    LANGUAGES
                                </span>

                                <strong>
                                    Ahli · Bahasa Indonesia 
                                </strong>
                                <strong>
                                    Menengah · Bahasa Inggris 
                                </strong>

                            </div>


                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             WORKS
        ====================================================== -->

        <section class="section" id="works">

            <div class="container">

                <div class="section-label">
                    <span>02</span>
                    SELECTED WORKS
                </div>


                <div class="works-header reveal">

                    <div>

                        <p class="eyebrow">
                            MY PROJECTS
                        </p>

                        <h2>
                            Things I've
                            <em>worked on.</em>
                        </h2>

                    </div>


                    <p>

                        Beberapa project yang saya kerjakan
                        selama proses belajar dan mengembangkan
                        kemampuan di bidang desain serta teknologi.

                    </p>

                </div>

  <!-- PROJECT 01 -->

                <article class="project reverse reveal">

                    <div class="project-image project-orange">

                        <img src="{{ asset('images/fitness-project.png') }}" alt="Fitness Analysis Expert System">

                    </div>


                    <div class="project-content">

                        <span class="project-number">
                            01 / 06
                        </span>

                        <span class="project-category">
                            WEB · EXPERT SYSTEM · NAIVE BAYES
                        </span>


                        <h3>
                            Fitness Analysis Expert System
                        </h3>


                        <p>

                            Sistem pakar berbasis website untuk
                            membantu menganalisis tingkat kebugaran
                            member gym menggunakan metode Naive Bayes.

                            Sistem menggunakan beberapa parameter
                            fisik sebagai masukan untuk menghasilkan
                            klasifikasi tingkat kebugaran.

                        </p>


                        <div class="project-details">

                            <div>

                                <span>
                                    ROLE
                                </span>

                                <strong>
                                    UI/UX · Web Developer
                                </strong>

                            </div>


                            <div>

                                <span>
                                    TECHNOLOGY
                                </span>

                                <strong>
                                    Laravel · MySQL · Naive Bayes
                                </strong>

                            </div>

                        </div>


                        <a
                            href="#"
                            class="project-link"
                        >
                            View Case Study
                            <span>↗</span>
                        </a>

                    </div>

                </article>

                <!-- PROJECT 02 -->

                <article class="project reveal">

                    <div class="project-image project-dark">

                        <img src="{{ asset('images/kpi-project.png') }}" alt="KPI Management System" style="border-radius: 20px; box-shadow: 0 20px 60px rgba(0,0,0,.4);">

                    </div>


                    <div class="project-content">

                        <span class="project-number">
                            02 / 06
                        </span>

                        <span class="project-category">
                            WEB APPLICATION · UI/UX
                        </span>


                        <h3>
                            KPI Management System
                        </h3>


                        <p>

                            Sistem informasi berbasis web untuk
                            membantu pengelolaan Key Performance
                            Indicator (KPI) pada Restoran Ikan Bakar
                            Rawabango. Sistem dirancang untuk membantu
                            proses pengelolaan pekerjaan, pemantauan
                            kinerja, dan penyajian informasi secara
                            lebih terstruktur.

                        </p>


                        <div class="project-details">

                            <div>

                                <span>
                                    ROLE
                                </span>

                                <strong>
                                    UI/UX & Web Development
                                </strong>

                            </div>


                            <div>

                                <span>
                                    TECHNOLOGY
                                </span>

                                <strong>
                                    Laravel · MySQL · Figma
                                </strong>

                            </div>

                        </div>


                        <a
                            href="#"
                            class="project-link"
                        >
                            View Case Study
                            <span>↗</span>
                        </a>

                    </div>

                </article>


                <!-- PROJECT 02

                <article class="project reverse reveal">

                    <div class="project-image project-purple">

                        <div class="phone">

                            <div class="phone-screen">

                                <div class="phone-title">
                                    PartTimely
                                </div>


                                <div class="phone-search">
                                    Search jobs...
                                </div>


                                <div class="job-card">

                                    <strong>
                                        Social Media Admin
                                    </strong>

                                    <small>
                                        Remote · Part Time
                                    </small>

                                </div>


                                <div class="job-card">

                                    <strong>
                                        Graphic Designer
                                    </strong>

                                    <small>
                                        Remote · Freelance
                                    </small>

                                </div>


                                <div class="job-card">

                                    <strong>
                                        UI/UX Designer
                                    </strong>

                                    <small>
                                        Hybrid · Part Time
                                    </small>

                                </div>

                            </div>

                        </div>

                    </div> -->

<!-- 
                    <div class="project-content">

                        <span class="project-number">
                            02 / 06
                        </span>

                        <span class="project-category">
                            UI/UX DESIGN · JOB PLATFORM
                        </span>


                        <h3>
                            PartTimely
                        </h3>


                        <p>

                            Platform pencarian pekerjaan part-time yang dirancang untuk membantu pengguna menemukan peluang kerja berdasarkan kebutuhan dan kemampuan mereka. Fokus desain berada pada kemudahan pencarian, informasi pekerjaan yang jelas, dan pengalaman pengguna yang sederhana dengan foto.

                        </p>


                        <div class="project-details">

                            <div>

                                <span>
                                    ROLE
                                </span>

                                <strong>
                                    UI/UX Designer
                                </strong>

                            </div>


                            <div>

                                <span>
                                    TOOLS
                                </span>

                                <strong>
                                    Figma · FigJam
                                </strong>

                            </div>

                        </div>


                        <a
                            href="#"
                            class="project-link"
                        >
                            View Case Study
                            <span>↗</span>
                        </a>

                    </div>

                </article> -->


                <!-- PROJECT 03 -->

                <article class="project reveal">

                    <div class="project-image project-green">

                        <img src="{{ asset('images/lorong_temu.png') }}" alt="Lorong Temu">

                    </div>


                    <div class="project-content">

                        <span class="project-number">
                            03 / 06
                        </span>

                        <span class="project-category">
                            RESTAURANT · DAFTAR MENU
                        </span>


                        <h3>
                            Lorong Temu
                        </h3>


                        <p>

                            Platform daftar menu untuk restoran yang dirancang untuk membantu pengguna melihat dan memesan menu makanan dan minuman dengan mudah. Fokus desain berada pada tampilan menu yang menarik, informasi harga yang jelas, dan pengalaman pengguna yang menyenangkan.

                        </p>


                        <div class="project-details">

                            <div>

                                <span>
                                    ROLE
                                </span>

                                <strong>
                                    UI/UX Designer
                                </strong>

                            </div>


                            <div>

                                <span>
                                    TOOLS
                                </span>

                                <strong>
                                    Figma
                                </strong>

                            </div>

                        </div>


                        <a
                            href="https://silvaaulia.github.io/lorongtemu.com/"
                            target="_blank"
                            class="project-link"
                        >
                            View Case Study
                            <span>↗</span>
                        </a>

                    </div>

                </article>


                <!-- PROJECT 05 -->

                <article class="project reverse reveal">

                    <div class="project-image project-purple">

                        <img src="{{ asset('images/devtools-preview.png') }}" alt="DevTools" style="border-radius: 20px; box-shadow: 0 20px 60px rgba(0,0,0,.4);">

                    </div>


                    <div class="project-content">

                        <span class="project-number">
                            04 / 06
                        </span>

                        <span class="project-category">
                            WEB APPLICATION · JAVASCRIPT
                        </span>


                        <h3>
                            DevTools
                        </h3>


                        <p>

                            Website berisi 24 browser-based developer tools
                            yang mencakup formatter, converter, encoder/decoder,
                            validator, Regex Tester, Timestamp Converter,
                            YAML↔JSON, CSV↔JSON, JSON↔XML, JavaScript minifier,
                            CSS minifier, dan berbagai tools developer lainnya.

                        </p>


                        <div class="project-details">

                            <div>

                                <span>
                                    ROLE
                                </span>

                                <strong>
                                    Front-end Developer
                                </strong>

                            </div>


                            <div>

                                <span>
                                    TECHNOLOGY
                                </span>

                                <strong>
                                    HTML · CSS · JavaScript
                                </strong>

                            </div>

                        </div>


                        <a
                            href="https://devtools-production-a3a9.up.railway.app/"
                            target="_blank"
                            class="project-link"
                        >
                            View Project
                            <span>↗</span>
                        </a>

                    </div>

                </article>

                <article class="project reveal">

                    <div class="project-image project-orange">
                        <img
                            src="{{ asset('images/zona-ft-pmb.jpg') }}"
                            alt="Desain Instagram PMB Telah Dibuka Fakultas Teknik UNSUR"
                        >
                    </div>

                    <div class="project-content">

                        <span class="project-number">
                            05 / 06
                        </span>

                        <span class="project-category">
                            SOCIAL MEDIA · PROMOSI PENDIDIKAN
                        </span>

                        <h3>
                            Promosi PMB Fakultas Teknik UNSUR
                        </h3>

                        <p>
                            Desain informasi dan promosi penerimaan mahasiswa baru Fakultas Teknik Universitas Suryakancana. Visual menonjolkan pengumuman “PMB Telah Dibuka” dan mengarahkan calon mahasiswa ke informasi pendaftaran melalui Instagram.
                        </p>

                        <div class="project-details">

                            <div>
                                <span>
                                    PERAN
                                </span>

                                <strong>
                                    Desainer
                                </strong>
                            </div>

                            <div>
                                <span>
                                    KANAL
                                </span>

                                <strong>
                                    Instagram · Zona FT UNSUR
                                </strong>
                            </div>

                        </div>

                        <a
                            href="https://www.instagram.com/zonaftunsur/p/DRtcbCqgawm/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="project-link"
                        >
                            Lihat Postingan Instagram
                            <span>↗</span>
                        </a>

                    </div>

                </article>


                <!-- PROJECT 06 -->

                <article class="project reverse reveal">

                    <div class="project-image project-dark">

                        <img src="{{ asset('images/mock-market.png') }}" alt="Mini Market Management System" style="border-radius: 20px; box-shadow: 0 20px 60px rgba(0,0,0,.4);">

                    </div>


                    <div class="project-content">

                        <span class="project-number">
                            06 / 06
                        </span>

                        <span class="project-category">
                            WEB APPLICATION · POINT OF SALE
                        </span>


                        <h3>
                            Mini Market Management System
                        </h3>


                        <p>

                            Aplikasi web untuk mengelola transaksi
                            dan pengecekan stok pada beberapa cabang.
                            Sistem membantu pencatatan penjualan
                            serta pemantauan ketersediaan stok
                            secara terstruktur di setiap outlet.

                        </p>


                        <div class="project-details">

                            <div>

                                <span>
                                    ROLE
                                </span>

                                <strong>
                                    Web Developer
                                </strong>

                            </div>


                            <div>

                                <span>
                                    TECHNOLOGY
                                </span>

                                <strong>
                                    Laravel · MySQL
                                </strong>

                            </div>

                        </div>


                        <a
                            href="#"
                            class="project-link"
                        >
                            View Case Study
                            <span>↗</span>
                        </a>

                    </div>

                </article>


                <!-- PROJECT 06

                <article class="project reveal">

                    <div class="project-image project-dark">

                        <div class="portfolio-card">

                            <div class="portfolio-card-title">
                                Portofolio.
                            </div>


                            <div class="portfolio-line"></div>


                            <div class="portfolio-blocks">

                                <div></div>
                                <div></div>
                                <div></div>

                            </div>

                        </div>

                    </div> -->


                    <!-- <div class="project-content">

                        <span class="project-number">
                            05 / 06
                        </span>

                        <span class="project-category">
                            PERSONAL PROJECT · WEB DESIGN
                        </span>


                        <h3>
                            Silva Personal Portfolio
                        </h3>


                        <p>

                            Personal portfolio website yang
                            dirancang untuk menampilkan kemampuan,
                            pengalaman belajar, project, dan
                            eksplorasi saya di bidang UI/UX Design,
                            Visual Design, dan Web Development.

                        </p>


                        <div class="project-details">

                            <div>

                                <span>
                                    ROLE
                                </span>

                                <strong>
                                    Designer & Developer
                                </strong>

                            </div>


                            <div>

                                <span>
                                    TECHNOLOGY
                                </span>

                                <strong>
                                    Laravel · HTML · CSS · JavaScript
                                </strong>

                            </div>

                        </div>


                        <a
                            href="#"
                            class="project-link"
                        >
                            Current Project
                            <span>↗</span>
                        </a>

                    </div> -->

                <!--
                </article>
                -->

            </div>

        </section>


        <!-- =====================================================
             WORK EXPERIENCE
        ====================================================== -->

        <section class="section" id="experience">

            <div class="container">

                <div class="section-label">
                    <span>03</span>
                    WORK EXPERIENCE
                </div>


                <div class="works-header reveal">

                    <div>

                        <p class="eyebrow">
                            WHERE I'VE WORKED
                        </p>

                        <h2>
                            Professional
                            <em>experience.</em>
                        </h2>

                    </div>


                    <p>

                        Pengalaman bekerja di bidang desain antarmuka,
                        pembuatan konten digital, serta promosi
                        program studi kampus.
                    </p>

                </div>


                <div class="timeline reveal">

                    <div class="tl-item">

                        <span class="tl-dot"></span>

                        <span class="tl-date">
                            OKT 2025 — DES 2025
                        </span>

                        <h3>
                            UI/UX Designer
                        </h3>

                        <p class="tl-role">
                            <em>Part Time · Remote</em> — Slerate, Singapore
                        </p>

                        <ul class="tl-points">

                            <li>
                                Merancang antarmuka website desktop dan
                                mobile menggunakan Figma dengan
                                memperhatikan struktur halaman dan
                                pengalaman pengguna.
                            </li>

                            <li>
                                Menerjemahkan kebutuhan klien ke dalam
                                rancangan UI/UX menggunakan flowmap dan
                                user flow sebagai dasar alur navigasi
                                dan interaksi pengguna.
                            </li>

                            <li>
                                Menyusun desain responsif dan mudah
                                digunakan serta berkolaborasi dengan tim
                                developer untuk memastikan desain dapat
                                diimplementasikan sesuai kebutuhan proyek.
                            </li>

                        </ul>

                    </div>


                    <div class="tl-item">

                        <span class="tl-dot"></span>

                        <span class="tl-date">
                            SEP 2025 — MAR 2026
                        </span>

                        <h3>
                            Promosi Fakultas
                        </h3>

                        <p class="tl-role">
                            <em>Fakultas Teknik</em> — Universitas Suryakancana
                        </p>

                        <ul class="tl-points">

                            <li>
                                Mempromosikan program studi dan kegiatan
                                Fakultas Teknik kepada calon mahasiswa
                                melalui penyampaian informasi secara
                                langsung dan media promosi.
                            </li>

                            <li>
                                Memberikan informasi terkait program studi,
                                fasilitas, kegiatan, pendaftaran, dan
                                lingkungan perkuliahan kepada calon mahasiswa.
                            </li>

                            <li>
                                Berkomunikasi dengan calon mahasiswa serta
                                membantu menjawab pertanyaan terkait
                                Fakultas Teknik dan kegiatan kampus.
                            </li>

                        </ul>

                    </div>


                    <div class="tl-item">

                        <span class="tl-dot"></span>

                        <span class="tl-date">
                            JAN 2025 — JAN 2026
                        </span>

                        <h3>
                            Freelance Content Creator
                        </h3>

                        <p class="tl-role">
                            <em>Freelance</em> — Content & Social Media
                        </p>

                        <ul class="tl-points">

                            <li>
                                Membuat dan mengelola konten digital
                                Instagram dan TikTok serta menyesuaikan
                                materi dengan target audiens.
                            </li>

                            <li>
                                Mendesain materi visual dan melakukan
                                editing foto/video untuk kebutuhan
                                publikasi.
                            </li>

                            <li>
                                Berkomunikasi dengan klien dari proses
                                produksi, penyesuaian materi, hingga
                                publikasi.
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             PROCESS
        ====================================================== -->

        <section class="section" id="process">

            <div class="container">

                <div class="section-label">
                    <span>04</span>
                    MY PROCESS
                </div>


                <div class="process-heading reveal">

                    <p class="eyebrow">
                        HOW I WORK
                    </p>

                    <h2>
                        From an idea to
                        <em>something real.</em>
                    </h2>

                </div>


                <div class="process-grid">

                    <div class="process-card reveal">

                        <span class="process-number">
                            01
                        </span>

                        <div class="process-icon">
                            ✦
                        </div>

                        <h3>
                            Discover
                        </h3>

                        <p>

                            Memahami kebutuhan pengguna,
                            permasalahan, tujuan project,
                            dan konteks sebelum menentukan
                            solusi desain.

                        </p>

                    </div>


                    <div class="process-card reveal">

                        <span class="process-number">
                            02
                        </span>

                        <div class="process-icon">
                            ◇
                        </div>

                        <h3>
                            Design
                        </h3>

                        <p>

                            Mengembangkan ide melalui wireframe,
                            visual design, prototype, typography,
                            layout, dan user interface.

                        </p>

                    </div>


                    <div class="process-card reveal">

                        <span class="process-number">
                            03
                        </span>

                        <div class="process-icon">
                            ⌁
                        </div>

                        <h3>
                            Develop
                        </h3>

                        <p>

                            Mengubah rancangan menjadi produk
                            digital dengan memperhatikan fungsi,
                            struktur, responsiveness, dan
                            pengalaman pengguna.

                        </p>

                    </div>


                    <div class="process-card reveal">

                        <span class="process-number">
                            04
                        </span>

                        <div class="process-icon">
                            ↗
                        </div>

                        <h3>
                            Deliver
                        </h3>

                        <p>

                            Melakukan pengujian, evaluasi,
                            perbaikan, dan memastikan hasil akhir
                            dapat digunakan dengan baik.

                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             SKILLS
        ====================================================== -->

        <section class="section" id="skills">

            <div class="container">

                <div class="section-label">
                    <span>05</span>
                    SKILLS & TOOLS
                </div>


                <div class="skills-layout reveal">

                    <div class="skills-heading">

                        <p class="eyebrow">
                            WHAT I DO
                        </p>

                        <h2>
                            Design meets
                            <em>technology.</em>
                        </h2>


                        <p>

                            Latar belakang Teknik Informatika
                            membantu saya memahami proses desain
                            sekaligus teknologi yang digunakan
                            untuk mewujudkan desain menjadi produk
                            digital.

                        </p>

                    </div>


                    <div>

                        <div class="skill-groups">

                            <div class="skill-group">

                                <div class="skill-group-head">

                                    <span class="g-icon">⟨⟩</span>

                                    <strong>
                                        Programming Languages
                                    </strong>

                                </div>

                                <div class="skill-tags">

                                    <span class="skill-tag">JavaScript</span>
                                    <span class="skill-tag">PHP</span>
                                    <span class="skill-tag">Python</span>
                                    <span class="skill-tag">Java</span>
                                    <span class="skill-tag">C</span>
                                    <span class="skill-tag">C++</span>

                                </div>

                            </div>


                            <div class="skill-group">

                                <div class="skill-group-head">

                                    <span class="g-icon">◆</span>

                                    <strong>
                                        UI/UX Design
                                    </strong>

                                </div>

                                <div class="skill-tags">

                                    <span class="skill-tag">Figma</span>
                                    <span class="skill-tag">User Flow</span>
                                    <span class="skill-tag">Flowmap</span>
                                    <span class="skill-tag">Wireframing</span>
                                    <span class="skill-tag">Prototyping</span>
                                    <span class="skill-tag">UI Design</span>
                                    <span class="skill-tag">Design System</span>
                                    <span class="skill-tag">Component Design</span>
                                    <span class="skill-tag">Responsive Design</span>
                                    <span class="skill-tag">Usability Principles</span>

                                </div>

                            </div>


                            <div class="skill-group">

                                <div class="skill-group-head">

                                    <span class="g-icon">▤</span>

                                    <strong>
                                        Frontend Development
                                    </strong>

                                </div>

                                <div class="skill-tags">

                                    <span class="skill-tag">HTML5</span>
                                    <span class="skill-tag">CSS3</span>
                                    <span class="skill-tag">Bootstrap</span>
                                    <span class="skill-tag">Responsive Web Design</span>
                                    <span class="skill-tag">DOM Manipulation</span>

                                </div>

                            </div>


                            <div class="skill-group">

                                <div class="skill-group-head">

                                    <span class="g-icon">⬡</span>

                                    <strong>
                                        Backend Development
                                    </strong>

                                </div>

                                <div class="skill-tags">

                                    <span class="skill-tag">Laravel</span>
                                    <span class="skill-tag">Routing</span>
                                    <span class="skill-tag">Controller</span>
                                    <span class="skill-tag">CRUD Operations</span>
                                    <span class="skill-tag">REST API</span>

                                </div>

                            </div>


                            <div class="skill-group">

                                <div class="skill-group-head">

                                    <span class="g-icon">⛁</span>

                                    <strong>
                                        Database Management
                                    </strong>

                                </div>

                                <div class="skill-tags">

                                    <span class="skill-tag">MySQL</span>
                                    <span class="skill-tag">SQL</span>
                                    <span class="skill-tag">Database Design</span>
                                    <span class="skill-tag">Relational Database</span>

                                </div>

                            </div>


                            <div class="skill-group">

                                <div class="skill-group-head">

                                    <span class="g-icon">▦</span>

                                    <strong>
                                        Office & Data Management
                                    </strong>

                                </div>

                                <div class="skill-tags">

                                    <span class="skill-tag">Microsoft Excel</span>
                                    <span class="skill-tag">Microsoft Word</span>
                                    <span class="skill-tag">Data Entry</span>
                                    <span class="skill-tag">Data Processing</span>
                                    <span class="skill-tag">Data Management</span>
                                    <span class="skill-tag">Sorting & Filtering</span>

                                </div>

                            </div>


                            <div class="skill-group">

                                <div class="skill-group-head">

                                    <span class="g-icon">⚙</span>

                                    <strong>
                                        Development Tools
                                    </strong>

                                </div>

                                <div class="skill-tags">

                                    <span class="skill-tag">Visual Studio Code</span>
                                    <span class="skill-tag">Git</span>
                                    <span class="skill-tag">GitHub</span>
                                    <span class="skill-tag">XAMPP</span>
                                    <span class="skill-tag">Browser Developer Tools</span>

                                </div>

                            </div>


                            <div class="skill-group">

                                <div class="skill-group-head">

                                    <span class="g-icon">✦</span>

                                    <strong>
                                        Design & Content Tools
                                    </strong>

                                </div>

                                <div class="skill-tags">

                                    <span class="skill-tag">Canva</span>
                                    <span class="skill-tag">CapCut</span>
                                    <span class="skill-tag">Adobe Illustrator</span>

                                </div>

                            </div>


                            <div class="skill-group">

                                <div class="skill-group-head">

                                    <span class="g-icon">⌁</span>

                                    <strong>
                                        Software Development & Analysis
                                    </strong>

                                </div>

                                <div class="skill-tags">

                                    <span class="skill-tag">System Analysis</span>
                                    <span class="skill-tag">Requirements Analysis</span>
                                    <span class="skill-tag">Use Case Diagram</span>
                                    <span class="skill-tag">Activity Diagram</span>
                                    <span class="skill-tag">Class Diagram</span>
                                    <span class="skill-tag">Sequence Diagram</span>
                                    <span class="skill-tag">System Flowchart</span>
                                    <span class="skill-tag">Software Testing</span>
                                    <span class="skill-tag">Debugging</span>
                                    <span class="skill-tag">Waterfall Methodology</span>

                                </div>

                            </div>


                            <div class="skill-group">

                                <div class="skill-group-head">

                                    <span class="g-icon">◎</span>

                                    <strong>
                                        Languages
                                    </strong>

                                </div>

                                <div class="skill-tags">

                                    <span class="skill-tag">Bahasa Indonesia (Ahli)</span>
                                    <span class="skill-tag">Bahasa Inggris (Menengah)</span>

                                </div>

                            </div>

                        </div>


                        <div class="tools">

                            <span>Figma</span>
                            <span>Laravel</span>
                            <span>MySQL</span>
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                            <span>Bootstrap</span>
                            <span>Visual Studio Code</span>
                            <span>Git</span>
                            <span>GitHub</span>
                            <span>XAMPP</span>
                            <span>Canva</span>
                            <span>CapCut</span>
                            <span>Adobe Illustrator</span>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             EDUCATION
        ====================================================== -->

        <section class="section">

            <div class="container">

                <div class="section-label">
                    <span>06</span>
                    EDUCATION
                </div>


                <div class="education-card reveal">

                    <div>

                        <p class="education-year">
                            SEP 2022 — JUN 2026
                        </p>

                        <h2>
                            Universitas
                            Suryakancana
                        </h2>

                        <p class="education-major">
                            S1 Teknik Informatika
                        </p>

                        <div class="edu-badge">
                            IPK 3,69 / 4,00
                            <span>· Fresh Graduate</span>
                        </div>

                    </div>


                    <div class="education-description">

                        <p>

                            Mempelajari pengembangan perangkat lunak,
                            pemrograman web, basis data, rekayasa
                            perangkat lunak, serta perancangan antarmuka
                            dan pengalaman pengguna. Aktif mengerjakan
                            berbagai proyek website dan aplikasi sebagai
                            penerapan kemampuan teknis, analisis kebutuhan,
                            UI/UX, database, dan pengembangan sistem.

                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             ORGANIZATION
        ====================================================== -->

        <section class="section" id="organization">

            <div class="container">

                <div class="section-label">
                    <span>07</span>
                    ORGANIZATION
                </div>


                <div class="works-header reveal">

                    <div>

                        <p class="eyebrow">
                            LEADERSHIP & CONTRIBUTIONS
                        </p>

                        <h2>
                            Beyond the
                            <em>code.</em>
                        </h2>

                    </div>


                    <p>

                        Pengalaman berorganisasi dalam divisions
                        keuangan serta sekretariat yang membentuk
                        kemampuan administrasi, dokumentasi,
                        dan koordinasi tim.
                    </p>

                </div>


                <div class="timeline reveal">

                    <div class="tl-item">

                        <span class="tl-dot"></span>

                        <span class="tl-date">
                            APR 2025 — JUN 2025
                        </span>

                        <h3>
                            Bendahara
                        </h3>

                        <p class="tl-role">
                            <em>KKN-T</em> — Bendahara Tim KKN-T
                        </p>

                        <ul class="tl-points">

                            <li>
                                Mengelola dan mencatat pemasukan serta
                                pengeluaran selama kegiatan KKN-T.
                            </li>

                            <li>
                                Menyusun laporan keuangan dan memastikan
                                penggunaan dana sesuai dengan kebutuhan
                                kegiatan.
                            </li>

                            <li>
                                Berkoordinasi dengan anggota tim terkait
                                kebutuhan dan pertanggungjawaban keuangan.
                            </li>

                        </ul>

                    </div>


                    <div class="tl-item">

                        <span class="tl-dot"></span>

                        <span class="tl-date">
                            SEP 2023 — MAR 2024
                        </span>

                        <h3>
                            Sekretaris
                        </h3>

                        <p class="tl-role">
                            <em>SINERGI</em> — Sekretariat Organisasi
                        </p>

                        <ul class="tl-points">

                            <li>
                                Mengelola dan memperbarui data
                                administrasi serta dokumentasi kegiatan
                                organisasi.
                            </li>

                            <li>
                                Menyusun dan mengarsipkan dokumen secara
                                terstruktur untuk mendukung kebutuhan
                                administrasi.
                            </li>

                            <li>
                                Mencatat informasi kegiatan dan
                                mengoordinasikan kebutuhan administrasi
                                antaranggota.
                            </li>

                        </ul>

                    </div>


                    <div class="tl-item">

                        <span class="tl-dot"></span>

                        <span class="tl-date">
                            JAN 2021 — JAN 2022
                        </span>

                        <h3>
                            Sekretaris
                        </h3>

                        <p class="tl-role">
                            <em>KARIPRAK</em> — Sekretariat Organisasi
                        </p>

                        <ul class="tl-points">

                            <li>
                                Mengelola data administrasi, agenda
                                kegiatan, dan dokumen organisasi
                                secara terstruktur.
                            </li>

                            <li>
                                Menyusun, mencatat, dan mengarsipkan
                                dokumen untuk memudahkan pencarian
                                informasi.
                            </li>

                            <li>
                                Mengelola informasi kegiatan dan membantu
                                memastikan kebutuhan administrasi
                                terdokumentasi dengan baik.
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             CONTACT
        ====================================================== -->

        <section class="contact" id="contact">

            <p class="eyebrow">
                HAVE A PROJECT IN MIND?
            </p>


            <h2>

                Let's make something
                <em>meaningful.</em>

            </h2>


            <p class="contact-description">

                Saya terbuka untuk berdiskusi mengenai project,
                desain, kolaborasi, maupun creative opportunities.

            </p>


            <a
                href="https://wa.me/62895394577788"
                target="_blank"
                rel="noopener noreferrer"
                class="contact-button"
            >
                Contact Me
                <span>↗</span>
            </a>


            <div class="contact-links">

                <a href="mailto:silvaaulia166@gmail.com">
                    <span class="c-icon">✉</span>
                    silvaaulia166@gmail.com
                </a>

                <a href="https://wa.me/62895394577788" target="_blank" rel="noopener noreferrer">
                    <span class="c-icon">☎</span>
                    +62 895 3945 77788
                </a>

                <a href="https://linkedin.com/in/silva-aulia-nursamsiah-b9434423b" target="_blank" rel="noopener noreferrer">
                    <span class="c-icon">in</span>
                    LinkedIn
                </a>

                <a href="https://portofolio-silva.up.railway.app" target="_blank" rel="noopener noreferrer">
                    <span class="c-icon">⚡</span>
                    Live Portfolio
                </a>

                <a href="{{ asset('images/Silva_Aulia Nursamsiah_CV terbaru.pdf') }}" download="CV_Silva_Aulia_Nursamsiah.pdf">
                    <span class="c-icon">↓</span>
                    Download CV
                </a>

            </div>

        </section>

    </main>


    <!-- =========================================================
         FOOTER
    ========================================================== -->

    <footer>

        <div class="container">

            <div class="footer-top">

                <div class="footer-logo">
                    Portofolio<span>.</span>
                </div>


                <div class="footer-meta">

                    <p>
                        UI/UX Designer · Frontend Developer ·
                        Backend Developer · Fresh Graduate Teknik Informatika
                    </p>


                    <div class="footer-social">

                        <a href="mailto:silvaaulia166@gmail.com">
                            ✉ silvaaulia166@gmail.com
                        </a>

                        <a href="https://wa.me/62895394577788" target="_blank" rel="noopener noreferrer">
                            ☎ +62 895 3945 77788
                        </a>

                        <a href="https://linkedin.com/in/silva-aulia-nursamsiah-b9434423b" target="_blank" rel="noopener noreferrer">
                            in LinkedIn
                        </a>

                        <a href="https://portofolio-silva.up.railway.app" target="_blank" rel="noopener noreferrer">
                            ⚡ Live Portfolio
                        </a>

                    </div>

                </div>

            </div>


            <div class="footer-bottom">

                <span>
                    © {{ date('Y') }} Silva Aulia Nursamsiah
                </span>


                <div class="footer-links">

                    <a href="#home">
                        Home
                    </a>

                    <a href="#about">
                        About
                    </a>

                    <a href="#works">
                        Works
                    </a>

                    <a href="#experience">
                        Experience
                    </a>

                    <a href="#skills">
                        Skills
                    </a>

                    <a href="#contact">
                        Contact
                    </a>

                </div>

            </div>

        </div>

    </footer>


    <!-- =========================================================
         JAVASCRIPT
    ========================================================== -->

    <script>

        document.addEventListener(
            "DOMContentLoaded",
            function () {

                /* ================================================
                   NAVBAR SCROLL
                ================================================= */

                const navbar =
                    document.getElementById("navbar");

                function updateNavbar() {

                    if (window.scrollY > 50) {

                        navbar.classList.add("scrolled");

                    } else {

                        navbar.classList.remove("scrolled");

                    }

                }

                window.addEventListener(
                    "scroll",
                    updateNavbar
                );

                updateNavbar();


                /* ================================================
                   SCROLL REVEAL
                ================================================= */

                const revealElements =
                    document.querySelectorAll(".reveal");


                const revealObserver =
                    new IntersectionObserver(
                        function (entries) {

                            entries.forEach(
                                function (entry) {

                                    if (
                                        entry.isIntersecting
                                    ) {

                                        entry.target.classList.add(
                                            "active"
                                        );

                                        revealObserver.unobserve(
                                            entry.target
                                        );

                                    }

                                }
                            );

                        },
                        {
                            threshold: 0.12
                        }
                    );


                revealElements.forEach(
                    function (element) {

                        revealObserver.observe(element);

                    }
                );


                /* ================================================
                   MOBILE MENU
                ================================================= */

                const mobileToggle = document.getElementById("mobileToggle");
                const navMenu = document.getElementById("navMenu");

                function closeMobileMenu() {
                    navMenu.classList.remove("mobile-open");
                    mobileToggle.setAttribute("aria-expanded", "false");
                }

                mobileToggle.addEventListener("click", function () {
                    const isOpen = navMenu.classList.toggle("mobile-open");
                    mobileToggle.setAttribute("aria-expanded", String(isOpen));
                });

                navMenu.querySelectorAll("a").forEach(function (link) {
                    link.addEventListener("click", closeMobileMenu);
                });

                window.addEventListener("resize", function () {
                    if (window.innerWidth > 700) {
                        closeMobileMenu();
                    }
                });

            }
        );

    </script>

</body>
</html>