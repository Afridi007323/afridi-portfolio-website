<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Afridi Ansari | Full Stack Developer</title>

   <link rel="stylesheet"
      href="<?= base_url('assets/css/style.cssv=2.css') ?>">
    

    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        /* ================================
           PROFESSIONAL NAVBAR
        ================================= */

        .nav {
            position: sticky;
            top: 15px;
            z-index: 1000;

            max-width: 1200px;
            margin: 15px auto 0;
            padding: 10px 12px 10px 18px;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;

            background: rgba(15, 23, 42, 0.82);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 14px;

            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);

            box-shadow:
                0 10px 35px rgba(0, 0, 0, 0.18);

            box-sizing: border-box;
        }


        /* ================================
           LEFT / BRAND
        ================================= */

        .nav-left {
            display: flex;
            align-items: center;
            gap: 11px;

            min-width: max-content;
        }

        .nav-left img {
            width: 40px;
            height: 40px;

            border-radius: 50%;
            object-fit: cover;

            border: 2px solid rgba(255, 255, 255, 0.12);

            box-shadow:
                0 0 0 4px rgba(139, 92, 246, 0.08);
        }

        .nav-left b {
            color: var(--text);
            font-size: 15px;
            font-weight: 750;
            letter-spacing: -0.2px;
        }

        /* small developer label */

        .nav-role {
            display: block;
            color: var(--muted);
            font-size: 10px;
            font-weight: 500;
            margin-top: 1px;
        }


        /* ================================
           NAV LINKS
        ================================= */

        .nav-links {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .nav-links > a {
            position: relative;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 9px 12px;

            color: var(--muted);
            text-decoration: none;

            font-size: 13px;
            font-weight: 600;

            border-radius: 8px;

            transition:
                color 0.2s ease,
                background 0.2s ease,
                transform 0.2s ease;
        }

        .nav-links > a:hover {
            color: var(--text);
            background: rgba(255, 255, 255, 0.05);
        }


        /* ================================
           RESUME BUTTON
        ================================= */

        .btn-nav {
            border: 1px solid rgba(255, 255, 255, 0.10);
        }

        .btn-nav:hover {
            border-color: rgba(255, 255, 255, 0.20);
        }


        /* ================================
           GITHUB BUTTON
        ================================= */

        .github-link {
            gap: 7px !important;
        }

        .github-link svg {
            width: 16px;
            height: 16px;
            fill: currentColor;
        }


        /* ================================
           PRIMARY CTA
        ================================= */

        .nav-links .primary {
            margin-left: 4px;

            color: #fff;

            background: linear-gradient(
                135deg,
                #8b5cf6,
                #3b82f6
            );

            border: 0;

            padding: 10px 16px;

            box-shadow:
                0 7px 22px rgba(59, 130, 246, 0.20);
        }

        .nav-links .primary:hover {
            color: #fff;

            transform: translateY(-1px);

            background: linear-gradient(
                135deg,
                #7c3aed,
                #2563eb
            );

            box-shadow:
                0 10px 28px rgba(59, 130, 246, 0.28);
        }


        /* ================================
           MOBILE MENU BUTTON
        ================================= */

        .nav-toggle {
            display: none;

            width: 40px;
            height: 40px;

            border: 1px solid rgba(255,255,255,0.10);
            border-radius: 9px;

            background: rgba(255,255,255,0.03);

            color: var(--text);

            cursor: pointer;
        }

        .nav-toggle span {
            display: block;

            width: 18px;
            height: 2px;

            margin: 4px auto;

            background: currentColor;
            border-radius: 2px;
        }


        /* ================================
           TABLET
        ================================= */

        @media (max-width: 950px) {

            .nav {
                margin-left: 15px;
                margin-right: 15px;
            }

            .nav-links {
                gap: 2px;
            }

            .nav-links > a {
                padding: 8px 9px;
                font-size: 12px;
            }

            .nav-links .primary {
                padding: 9px 12px;
            }
        }


        /* ================================
           MOBILE
        ================================= */

        @media (max-width: 760px) {

            .nav {
                position: sticky;

                margin: 10px 12px 0;
                padding: 9px 10px 9px 13px;
            }

            .nav-left img {
                width: 36px;
                height: 36px;
            }

            .nav-left b {
                font-size: 14px;
            }

            .nav-toggle {
                display: block;
            }

            .nav-links {
                display: none;

                position: absolute;

                top: calc(100% + 8px);
                left: 0;
                right: 0;

                padding: 10px;

                flex-direction: column;
                align-items: stretch;

                background: rgba(15, 23, 42, 0.96);

                border: 1px solid rgba(255,255,255,0.08);
                border-radius: 13px;

                backdrop-filter: blur(15px);

                box-shadow:
                    0 15px 40px rgba(0,0,0,0.25);
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links > a {
                width: 100%;
                box-sizing: border-box;

                justify-content: flex-start;

                padding: 11px 13px;
            }

            .nav-links .primary {
                margin-left: 0;
                justify-content: center;
                margin-top: 4px;
            }
        }
    </style>
</head>


<body>

    <nav class="nav">

        <!-- BRAND -->
        <div class="nav-left">

            <img
                src="<?= base_url('assets/profile.jpg.jpeg') ?>"
                alt="Afridi Ansari"
            >

            <div>
                <b>Ansari Afridi</b>
                <span class="nav-role">Full Stack Developer</span>
            </div>

        </div>


        <!-- MOBILE BUTTON -->
        <button
            class="nav-toggle"
            id="navToggle"
            aria-label="Toggle navigation"
            type="button"
        >
            <span></span>
            <span></span>
            <span></span>
        </button>


        <!-- NAVIGATION -->
        <div class="nav-links" id="navLinks">

            <a href="<?= site_url('home/') ?>">
                Home
            </a>

            <a href="<?= site_url('home/skills') ?>">
                Skills
            </a>

            <a href="<?= site_url('home/projects') ?>">
                Projects
            </a>

            <a href="<?= site_url('home/contact') ?>">
                Contact
            </a>


           <a class="btn-nav" href="<?= base_url('home/resume') ?>">Resume</a>


            <!-- GITHUB -->
            <a
                class="btn-nav github-link"
                href="https://github.com/Afridi007323?tab=repositories"
                target="_blank"
                rel="noopener"
                aria-label="GitHub"
            >

                <svg viewBox="0 0 24 24">
                    <path d="M12 .5C5.65.5.5 5.65.5 12c0 5.08 3.29 9.38 7.86 10.9.57.1.78-.25.78-.55v-2.1c-3.2.7-3.87-1.36-3.87-1.36-.52-1.33-1.27-1.69-1.27-1.69-1.04-.71.08-.7.08-.7 1.15.08 1.75 1.18 1.75 1.18 1.02 1.75 2.68 1.25 3.33.96.1-.74.4-1.25.73-1.54-2.55-.29-5.23-1.27-5.23-5.67 0-1.25.45-2.27 1.18-3.07-.12-.29-.51-1.45.11-3.02 0 0 .96-.31 3.15 1.17A10.9 10.9 0 0112 8.58c.97 0 1.94.13 2.85.38 2.18-1.48 3.14-1.17 3.14-1.17.62 1.57.23 2.73.11 3.02.73.8 1.18 1.82 1.18 3.07 0 4.41-2.69 5.37-5.25 5.66.41.36.78 1.07.78 2.16v3.2c0 .3.21.66.79.55A11.5 11.5 0 0023.5 12C23.5 5.65 18.35.5 12 .5z"/>
                </svg>

                GitHub

            </a>


            <!-- PRIMARY BUTTON -->
            <a
                class="btn-nav primary"
                href="<?= site_url('home/projects') ?>"
            >
                View Work →
            </a>

        </div>

    </nav>


    <script>
        const navToggle = document.getElementById('navToggle');
        const navLinks = document.getElementById('navLinks');

        navToggle.addEventListener('click', function () {
            navLinks.classList.toggle('active');
        });


        /* Close mobile menu after clicking a link */

        document.querySelectorAll('.nav-links a').forEach(function(link) {

            link.addEventListener('click', function() {

                navLinks.classList.remove('active');

            });

        });
    </script>