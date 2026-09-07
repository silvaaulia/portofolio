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
           ROOT
        ========================================================= */

        :root {
            --bg: #070a10;
            --bg-soft: #0a0f18;
            --surface: #0d131e;
            --surface-light: #111927;

            --blue: #1769ff;
            --blue-light: #5b95ff;
            --blue-soft: #8eb5ff;

            --cyan: #00d8c5;

            --white: #f5f7fb;
            --text: #d9dee8;
            --muted: #8792a3;
            --muted-2: #5d6878;

            --border: rgba(255, 255, 255, 0.08);

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
                radial-gradient(
                    circle at 50% -10%,
                    rgba(23, 105, 255, .10),
                    transparent 35%
                ),
                var(--bg);

            color: var(--white);

            font-family: "DM Sans", sans-serif;

            overflow-x: hidden;

            opacity: 0;

            animation: pageEnter .8s ease forwards;
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
           HERO
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
        }

        .hero-grid {
            position: absolute;

            inset: 0;

            pointer-events: none;

            opacity: .20;

            background-image:
                linear-gradient(
                    rgba(255,255,255,.025) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    90deg,
                    rgba(255,255,255,.025) 1px,
                    transparent 1px
                );

            background-size: 80px 80px;

            mask-image:
                radial-gradient(
                    ellipse at center,
                    black 10%,
                    transparent 70%
                );
        }

        .hero-top {
            position: absolute;

            top: 115px;

            width: min(var(--container), calc(100% - 80px));

            display: flex;

            justify-content: space-between;
            align-items: center;

            color: var(--muted);

            font-size: 10px;

            z-index: 3;
        }

        .availability {
            display: inline-flex;

            align-items: center;

            gap: 8px;

            padding: 9px 14px;

            border: 1px solid var(--border);

            border-radius: 50px;

            background: rgba(255,255,255,.015);
        }

        .status-dot {
            width: 7px;
            height: 7px;

            border-radius: 50%;

            background: var(--cyan);

            box-shadow:
                0 0 12px rgba(0,216,197,.7);

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

    </style>
</head>


<body>

    <!-- =========================================================
         BACKGROUND
    ========================================================== -->

    <div class="ambient ambient-one"></div>
    <div class="ambient ambient-two"></div>

    <div class="cursor-glow" id="cursorGlow"></div>


    <!-- =========================================================
         NAVBAR
    ========================================================== -->

    <header class="navbar" id="navbar">

        <div class="container nav-inner">

            <a href="#home" class="logo">
                Portofolio<span>.</span>
            </a>


            <nav class="nav-menu">

                <a href="#about">
                    About
                </a>

                <a href="#works">
                    Works
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

                <a href="{{ asset('images/Silva_Aulia Nursamsiah_CV terbaru.pdf') }}" download="CV_Silva_Aulia_Nursamsiah.pdf">
                    Download CV
                </a>

            </nav>


            <button
                class="mobile-toggle"
                id="mobileToggle"
                aria-label="Menu"
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

            <div class="hero-grid"></div>


            <div class="hero-top">

                <div class="availability">

                    <span class="status-dot"></span>

                    Open for creative opportunities

                </div>


                <div class="hero-location">
                    Indonesia · 2026
                </div>

            </div>


            <div class="hero-content">

                <p class="hero-kicker">
                    HELLO, I'M SILVA
                </p>


                <h1 class="hero-title">

                    <span class="line-one">
                        Front-end Dev
                    </span>

                    <span class="line-two">
                        & UI/UX Designer
                    </span>

                </h1>


                <div class="hero-subtitle">

                    <span>
                        Front-end Dev
                    </span>

                    <i>•</i>

                    <span>
                        UI/UX Design
                    </span>

                    <i>•</i>

                    <span>
                        Web Design
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

                            Saya adalah lulusan Teknik Informatika
                            yang memiliki ketertarikan besar pada dunia
                            desain digital, terutama Front-end Development, UI/UX Design,
                            dan fullstack Development

                        </p>


                        <p>

                            Saya menikmati proses mengubah ide dan
                            permasalahan menjadi tampilan digital
                            yang sederhana, menarik, dan mudah
                            digunakan.

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
                                    Universitas Suryakancana
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
                                    UI/UX · Visual · Web
                                </small>

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
                            01 / 03
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
                            02 / 03
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
                            02 / 05
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
                            03 / 03
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
                            05 / 06
                        </span>

                        <span class="project-category">
                            WEB APPLICATION · LARAVEL
                        </span>


                        <h3>
                            DevTools
                        </h3>


                        <p>

                            Aplikasi web DevTools untuk developers yang dirancang untuk membantu coding, testing, dan debugging dengan fitur-fitur productivity tools yang lengkap.

                        </p>


                        <div class="project-details">

                            <div>

                                <span>
                                    ROLE
                                </span>

                                <strong>
                                    Full Stack Developer
                                </strong>

                            </div>


                            <div>

                                <span>
                                    TECHNOLOGY
                                </span>

                                <strong>
                                    Laravel · MySQL · Vue.js
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
                            05 / 05
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

            </div> -->

        </section>


        <!-- =====================================================
             PROCESS
        ====================================================== -->

        <section class="section" id="process">

            <div class="container">

                <div class="section-label">
                    <span>03</span>
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
                    <span>04</span>
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

                        <div class="skills-list">

                            <div class="skill-row">

                                <span class="skill-number">
                                    01
                                </span>

                                <strong>
                                    UI/UX Design
                                </strong>

                                <small>
                                    Figma · Wireframe · Prototype
                                </small>

                            </div>


                            <div class="skill-row">

                                <span class="skill-number">
                                    02
                                </span>

                                <strong>
                                    Visual Design
                                </strong>

                                <small>
                                    Layout · Typography · Branding
                                </small>

                            </div>


                            <div class="skill-row">

                                <span class="skill-number">
                                    03
                                </span>

                                <strong>
                                    Web Design
                                </strong>

                                <small>
                                    HTML · CSS · Responsive Design
                                </small>

                            </div>


                            <div class="skill-row">

                                <span class="skill-number">
                                    04
                                </span>

                                <strong>
                                    Graphic Design
                                </strong>

                                <small>
                                    Visual Content · Social Media
                                </small>

                            </div>


                            <div class="skill-row">

                                <span class="skill-number">
                                    05
                                </span>

                                <strong>
                                    Web Development
                                </strong>

                                <small>
                                    Laravel · PHP · MySQL
                                </small>

                            </div>

                        </div>


                        <div class="tools">

                            <span>Figma</span>
                            <span>Adobe Illustrator</span>
                            <span>Laravel</span>
                            <span>PHP</span>
                            <span>MySQL</span>
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>

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
                    <span>05</span>
                    EDUCATION
                </div>


                <div class="education-card reveal">

                    <div>

                        <p class="education-year">
                            2022 — PRESENT
                        </p>

                        <h2>
                            Universitas
                            Suryakancana
                        </h2>

                        <p class="education-major">
                            Teknik Informatika
                        </p>

                    </div>


                    <div class="education-description">

                        <p>

                            Mempelajari pengembangan perangkat
                            lunak, database, sistem informasi,
                            analisis sistem, UI/UX, dan
                            pengembangan website.

                            Pengalaman tersebut menjadi dasar
                            dalam menggabungkan kemampuan desain
                            dengan teknologi digital.

                        </p>

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
                class="contact-button"
            >
                Contact Me
                <span>↗</span>
            </a>

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


                <p>
                    UI/UX Designer · Visual Designer ·
                    Informatics Engineering Student
                </p>

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
                   CURSOR GLOW
                ================================================= */

                const cursorGlow =
                    document.getElementById(
                        "cursorGlow"
                    );


                let mouseX = 0;
                let mouseY = 0;

                let glowX = 0;
                let glowY = 0;


                document.addEventListener(
                    "mousemove",
                    function (event) {

                        mouseX = event.clientX;
                        mouseY = event.clientY;

                        cursorGlow.style.opacity = "1";

                    }
                );


                document.addEventListener(
                    "mouseleave",
                    function () {

                        cursorGlow.style.opacity = "0";

                    }
                );


                function animateCursor() {

                    glowX +=
                        (mouseX - glowX) * .10;

                    glowY +=
                        (mouseY - glowY) * .10;


                    cursorGlow.style.left =
                        glowX + "px";

                    cursorGlow.style.top =
                        glowY + "px";


                    requestAnimationFrame(
                        animateCursor
                    );

                }

                animateCursor();


                /* ================================================
                   MOBILE MENU
                ================================================= */

                const mobileToggle =
                    document.getElementById(
                        "mobileToggle"
                    );

                const navMenu =
                    document.querySelector(
                        ".nav-menu"
                    );


                mobileToggle.addEventListener(
                    "click",
                    function () {

                        const isOpen =
                            navMenu.classList.contains(
                                "mobile-open"
                            );


                        if (!isOpen) {

                            navMenu.classList.add(
                                "mobile-open"
                            );

                            navMenu.style.position =
                                "absolute";

                            navMenu.style.top =
                                "72px";

                            navMenu.style.left =
                                "20px";

                            navMenu.style.right =
                                "20px";

                            navMenu.style.display =
                                "flex";

                            navMenu.style.flexDirection =
                                "column";

                            navMenu.style.alignItems =
                                "flex-start";

                            navMenu.style.gap =
                                "20px";

                            navMenu.style.padding =
                                "25px";

                            navMenu.style.border =
                                "1px solid var(--border)";

                            navMenu.style.borderRadius =
                                "18px";

                            navMenu.style.background =
                                "rgba(7,10,16,.96)";

                            navMenu.style.backdropFilter =
                                "blur(20px)";

                        } else {

                            navMenu.classList.remove(
                                "mobile-open"
                            );

                            navMenu.removeAttribute(
                                "style"
                            );

                        }

                    }
                );


                /* ================================================
                   CLOSE MOBILE MENU AFTER CLICK
                ================================================= */

                navMenu
                    .querySelectorAll("a")
                    .forEach(
                        function (link) {

                            link.addEventListener(
                                "click",
                                function () {

                                    navMenu.classList.remove(
                                        "mobile-open"
                                    );

                                    navMenu.removeAttribute(
                                        "style"
                                    );

                                }
                            );

                        }
                    );


                /* ================================================
                   DISABLE CURSOR GLOW ON TOUCH DEVICES
                ================================================= */

                if (
                    window.matchMedia(
                        "(pointer: coarse)"
                    ).matches
                ) {

                    cursorGlow.style.display =
                        "none";

                }

            }
        );

    </script>

</body>
</html>