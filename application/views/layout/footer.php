<footer class="footer">

    <style>
        .footer {
            margin-top: 80px;
            padding: 50px 20px 25px;
            background: rgba(10, 15, 30, 0.55);
            border-top: 1px solid var(--line);
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-main {
            display: grid;
            grid-template-columns: 1.3fr 1fr 1fr;
            gap: 50px;
            padding-bottom: 40px;
        }

        /* BRAND */
        .footer-brand {
            max-width: 360px;
        }

        .footer-logo {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: var(--text);
            font-size: 20px;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .footer-logo-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #8b5cf6, #3b82f6);
            color: white;
            font-size: 16px;
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.18);
        }

        .footer-brand p {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.7;
            margin: 0;
        }

        .footer-status {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 18px;
            padding: 7px 12px;
            border: 1px solid rgba(16, 185, 129, 0.20);
            background: rgba(16, 185, 129, 0.07);
            border-radius: 20px;
            color: var(--green);
            font-size: 12px;
            font-weight: 600;
        }

        .status-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--green);
            box-shadow: 0 0 10px var(--green);
        }

        /* FOOTER TITLES */
        .footer-title {
            color: var(--text);
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 18px;
        }

        /* NAVIGATION */
        .footer-links {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .footer-links a {
            display: flex;
            align-items: center;
            gap: 10px;
            width: fit-content;
            color: var(--muted);
            text-decoration: none;
            font-size: 13px;
            transition: all 0.25s ease;
        }

        .footer-links a svg {
            width: 16px;
            height: 16px;
            stroke: currentColor;
            fill: none;
            stroke-width: 1.8;
        }

        .footer-links a:hover {
            color: var(--text);
            transform: translateX(4px);
        }

        /* CONNECT */
        .footer-connect p {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.6;
            margin-bottom: 16px;
        }

        .footer-email {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            color: var(--text);
            text-decoration: none;
            font-size: 13px;
            margin-bottom: 18px;
            transition: 0.25s;
        }

        .footer-email svg {
            width: 17px;
            height: 17px;
            stroke: var(--green);
            fill: none;
            stroke-width: 1.8;
        }

        .footer-email:hover {
            color: var(--green);
        }

        /* SOCIAL ICONS */
        .footer-socials {
            display: flex;
            gap: 10px;
        }

        .footer-social {
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--line);
            border-radius: 9px;
            color: var(--muted);
            text-decoration: none;
            transition: all 0.25s ease;
            background: rgba(255,255,255,0.02);
        }

        .footer-social svg {
            width: 18px;
            height: 18px;
            fill: currentColor;
        }

        .footer-social:hover {
            color: var(--text);
            border-color: var(--green);
            background: rgba(16, 185, 129, 0.08);
            transform: translateY(-3px);
        }

        /* BOTTOM */
        .footer-bottom {
            border-top: 1px solid var(--line);
            padding-top: 22px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .footer-copyright {
            color: var(--muted);
            font-size: 12px;
        }

        .footer-tech {
            display: flex;
            align-items: center;
            gap: 7px;
            color: var(--muted);
            font-size: 12px;
        }

        .footer-tech span {
            color: var(--green);
        }

        /* MOBILE */
        @media (max-width: 800px) {

            .footer {
                margin-top: 50px;
                padding: 40px 20px 22px;
            }

            .footer-main {
                grid-template-columns: 1fr 1fr;
                gap: 35px;
            }

            .footer-brand {
                grid-column: 1 / -1;
                max-width: 100%;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }
        }

        @media (max-width: 500px) {

            .footer-main {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .footer-brand {
                grid-column: auto;
            }
        }






















        /* =========================================
   FLOATING WHATSAPP BUTTON
========================================= */

.whatsapp-float {
    position: fixed;
    right: 24px;
     bottom: 140px;  /* 24 ki jagah 90 kar diya - Tawk ke upar aa jayega */

    width: 58px;
    height: 58px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #25D366;
    color: #fff;

    border-radius: 50%;

    text-decoration: none;

    z-index: 9998; /* 9999 se 9998 kar diya taaki Tawk ka chatbox uske upar khule */

    box-shadow:
        0 8px 25px rgba(0, 0, 0, 0.25),
        0 0 0 5px rgba(37, 211, 102, 0.10);

    transition:
        transform 0.25s ease,
        box-shadow 0.25s ease;
}

/* WhatsApp Icon */

.whatsapp-float svg {
    width: 31px;
    height: 31px;

    fill: currentColor;
}


/* Hover */

.whatsapp-float:hover {
    color: #fff;

    transform: translateY(-4px) scale(1.05);

    box-shadow:
        0 12px 30px rgba(0, 0, 0, 0.30),
        0 0 0 7px rgba(37, 211, 102, 0.12);
}


/* Tooltip */

.whatsapp-tooltip {
    position: absolute;

    right: 70px;

    top: 50%;
    transform: translateY(-50%);

    white-space: nowrap;

    padding: 9px 13px;

    background: #111827;
    color: #fff;

    border: 1px solid rgba(255,255,255,0.10);

    border-radius: 8px;

    font-size: 12px;
    font-weight: 600;

    opacity: 0;
    visibility: hidden;

    pointer-events: none;

    transition:
        opacity 0.2s ease,
        transform 0.2s ease;
}


/* Tooltip Arrow */

.whatsapp-tooltip::after {
    content: "";

    position: absolute;

    right: -5px;
    top: 50%;

    width: 9px;
    height: 9px;

    background: #111827;

    transform:
        translateY(-50%)
        rotate(45deg);

    border-top: 1px solid rgba(255,255,255,0.10);
    border-right: 1px solid rgba(255,255,255,0.10);
}


/* Show Tooltip */

.whatsapp-float:hover .whatsapp-tooltip {
    opacity: 1;
    visibility: visible;

    transform:
        translateY(-50%)
        translateX(-3px);
}


/* Mobile */

@media (max-width: 600px) {

    .whatsapp-float {
        width: 54px;
        height: 54px;

        right: 16px;
        bottom: 18px;
    }

    .whatsapp-float svg {
        width: 29px;
        height: 29px;
    }

    .whatsapp-tooltip {
        display: none;
    }
}




















/* =========================================
   CUSTOM CIRCLE CURSOR
========================================= */

.custom-cursor-circle {
    position: fixed;
    left: 0;
    top: 0;

    width: 38px;
    height: 38px;

    border: 2px solid #22c55e;
    border-radius: 50%;

    pointer-events: none;

    z-index: 999999;

    transform: translate(-50%, -50%);

    box-sizing: border-box;

    transition:
        width 0.2s ease,
        height 0.2s ease,
        border-color 0.2s ease,
        background 0.2s ease;

    box-shadow:
        0 0 12px rgba(34, 197, 94, 0.25);
}


/* Center dot */

.custom-cursor-circle::after {
    content: "";

    position: absolute;

    left: 50%;
    top: 50%;

    width: 6px;
    height: 6px;

    background: #22c55e;

    border-radius: 50%;

    transform: translate(-50%, -50%);

    box-shadow:
        0 0 8px rgba(34, 197, 94, 0.7);
}


/* Hover on links/buttons */

.custom-cursor-circle.active {
    width: 52px;
    height: 52px;

    border-color: #a78bfa;

    background: rgba(167, 139, 250, 0.08);

    box-shadow:
        0 0 18px rgba(167, 139, 250, 0.25);
}


/* Click */

.custom-cursor-circle.clicked {
    width: 62px;
    height: 62px;

    border-color: #60a5fa;

    background: rgba(96, 165, 250, 0.10);
}


/* Desktop only */

@media (hover: hover) and (pointer: fine) {

    body.custom-cursor-active * {
        cursor: none !important;
    }

}


/* Mobile */

@media (hover: none), (pointer: coarse) {

    .custom-cursor-circle {
        display: none;
    }

}
    </style>


    <div class="footer-container">

        <div class="footer-main">

            <!-- BRAND -->
            <div class="footer-brand">

                <a href="<?= site_url('home/') ?>" class="footer-logo">

                    <span class="footer-logo-icon">
                        &lt;/&gt;
                    </span>

                    Ansari Afridi

                </a>

                <p>
                    Full Stack Developer passionate about building
                    clean, responsive and user-friendly web applications
                    using modern technologies.
                </p>

                <div class="footer-status">
                    <span class="status-dot"></span>
                    Available for opportunities
                </div>

            </div>


            <!-- QUICK LINKS -->
            <div>

                <div class="footer-title">
                    Quick Links
                </div>

                <div class="footer-links">

                    <!-- Home -->
                    <a href="<?= site_url('home/') ?>">
                        <svg viewBox="0 0 24 24">
                            <path d="M3 10.5L12 3l9 7.5"></path>
                            <path d="M5 9.5V21h14V9.5"></path>
                            <path d="M9 21v-7h6v7"></path>
                        </svg>
                        Home
                    </a>


                    <!-- Skills -->
                    <a href="<?= site_url('home/skills') ?>">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 3l2.2 6.8H21l-5.5 4.2 2.1 6.8L12 16.7 6.4 20.8l2.1-6.8L3 9.8h6.8L12 3z"></path>
                        </svg>
                        Skills
                    </a>


                    <!-- Projects -->
                    <a href="<?= site_url('home/projects') ?>">
                        <svg viewBox="0 0 24 24">
                            <rect x="3" y="4" width="18" height="16" rx="2"></rect>
                            <path d="M3 9h18"></path>
                            <path d="M8 14l-2 2 2 2"></path>
                            <path d="M12 14l2 2-2 2"></path>
                        </svg>
                        Projects
                    </a>


                    <!-- Contact -->
                    <a href="<?= site_url('home/contact') ?>">
                        <svg viewBox="0 0 24 24">
                            <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                            <path d="M3 7l9 6 9-6"></path>
                        </svg>
                        Contact
                    </a>

                </div>

            </div>


            <!-- CONNECT -->
            <div class="footer-connect">

                <div class="footer-title">
                    Let's Connect
                </div>

                <p>
                    Interested in working together?
                    Feel free to reach out.
                </p>


                <a
                    href="mailto:afridiansari986@gmail.com"
                    class="footer-email"
                >

                    <svg viewBox="0 0 24 24">
                        <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                        <path d="M3 7l9 6 9-6"></path>
                    </svg>

                    afridiansari986@gmail.com

                </a>


                <!-- SOCIAL -->
                <div class="footer-socials">

                    <!-- GitHub -->
                    <a
                        href="https://github.com/"
                        target="_blank"
                        class="footer-social"
                        aria-label="GitHub"
                    >
                        <svg viewBox="0 0 24 24">
                            <path d="M12 .5C5.65.5.5 5.65.5 12c0 5.08 3.29 9.38 7.86 10.9.57.1.78-.25.78-.55v-2.1c-3.2.7-3.87-1.36-3.87-1.36-.52-1.33-1.27-1.69-1.27-1.69-1.04-.71.08-.7.08-.7 1.15.08 1.75 1.18 1.75 1.18 1.02 1.75 2.68 1.25 3.33.96.1-.74.4-1.25.73-1.54-2.55-.29-5.23-1.27-5.23-5.67 0-1.25.45-2.27 1.18-3.07-.12-.29-.51-1.45.11-3.02 0 0 .96-.31 3.15 1.17A10.9 10.9 0 0112 8.58c.97 0 1.94.13 2.85.38 2.18-1.48 3.14-1.17 3.14-1.17.62 1.57.23 2.73.11 3.02.73.8 1.18 1.82 1.18 3.07 0 4.41-2.69 5.37-5.25 5.66.41.36.78 1.07.78 2.16v3.2c0 .3.21.66.79.55A11.5 11.5 0 0023.5 12C23.5 5.65 18.35.5 12 .5z"></path>
                        </svg>
                    </a>


                    <!-- LinkedIn -->
                    <a
                        href="https://linkedin.com/"
                        target="_blank"
                        class="footer-social"
                        aria-label="LinkedIn"
                    >
                        <svg viewBox="0 0 24 24">
                            <path d="M5.2 3.5A2.2 2.2 0 115.2 8a2.2 2.2 0 010-4.5zM3.3 9.5h3.8V21H3.3V9.5zM9.5 9.5h3.6v1.57h.05c.5-.95 1.72-1.95 3.54-1.95 3.79 0 4.49 2.49 4.49 5.73V21h-3.8v-5.45c0-1.3-.02-2.97-1.81-2.97-1.81 0-2.09 1.41-2.09 2.87V21H9.5V9.5z"></path>
                        </svg>
                    </a>

                </div>

            </div>

        </div>


        <!-- BOTTOM -->
        <div class="footer-bottom">

            <div class="footer-copyright">
                &copy; <?= date('Y') ?> Ansari Afridi. All rights reserved.
            </div>

            <div class="footer-tech">
                Built with
                <span>♥</span>
                CodeIgniter & Passion
            </div>

        </div>

    </div>

</footer>




<!-- WhatsApp Floating Button -->
<a
    href="https://wa.me/919175331140?text=Hello%20Afridi%2C%20I%20visited%20your%20portfolio%20and%20would%20like%20to%20connect."
    class="whatsapp-float"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Chat with Afridi on WhatsApp"
>

    <span class="whatsapp-tooltip">
        Chat on WhatsApp
    </span>

    <svg viewBox="0 0 24 24" aria-hidden="true">
        <path d="M20.52 3.48A11.85 11.85 0 0 0 12.08 0C5.52 0 .18 5.34.18 11.9c0 2.1.55 4.15 1.6 5.96L.08 24l6.3-1.65a11.9 11.9 0 0 0 5.69 1.45h.01c6.56 0 11.9-5.34 11.9-11.9 0-3.18-1.24-6.17-3.46-8.42zM12.08 21.8h-.01a9.86 9.86 0 0 1-5.03-1.37l-.36-.21-3.74.98 1-3.65-.23-.37a9.86 9.86 0 0 1-1.52-5.28c0-5.45 4.44-9.88 9.89-9.88 2.64 0 5.12 1.03 6.99 2.9a9.83 9.83 0 0 1 2.89 7c0 5.45-4.44 9.88-9.88 9.88zm5.42-7.4c-.3-.15-1.77-.87-2.05-.97-.28-.1-.48-.15-.68.15-.2.3-.78.97-.95 1.17-.17.2-.35.22-.65.07-.3-.15-1.25-.46-2.38-1.47-.88-.78-1.47-1.74-1.64-2.04-.17-.3-.02-.46.13-.61.14-.14.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.68-1.63-.93-2.23-.25-.59-.5-.51-.68-.52h-.58c-.2 0-.52.07-.8.37-.28.3-1.05 1.02-1.05 2.5s1.08 2.9 1.23 3.1c.15.2 2.12 3.24 5.13 4.54.72.31 1.28.49 1.72.63.72.23 1.38.2 1.9.12.58-.09 1.77-.72 2.02-1.42.25-.7.25-1.3.17-1.42-.07-.12-.27-.2-.57-.35z"/>
    </svg>

</a>



<div class="custom-cursor-circle"></div>




<script>
document.addEventListener("DOMContentLoaded", function () {

    const cursor = document.querySelector(".custom-cursor-circle");

    if (!cursor) return;

    document.body.classList.add("custom-cursor-active");

    let mouseX = 0;
    let mouseY = 0;

    let currentX = 0;
    let currentY = 0;

    document.addEventListener("mousemove", function (e) {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });

    function moveCursor() {

        currentX += (mouseX - currentX) * 0.18;
        currentY += (mouseY - currentY) * 0.18;

        cursor.style.left = currentX + "px";
        cursor.style.top = currentY + "px";

        requestAnimationFrame(moveCursor);
    }

    moveCursor();

    const clickable = document.querySelectorAll(
        "a, button, input, textarea, select"
    );

    clickable.forEach(function (element) {

        element.addEventListener("mouseenter", function () {
            cursor.classList.add("active");
        });

        element.addEventListener("mouseleave", function () {
            cursor.classList.remove("active");
        });

    });

    document.addEventListener("mousedown", function () {
        cursor.classList.add("clicked");
    });

    document.addEventListener("mouseup", function () {
        cursor.classList.remove("clicked");
    });

});
</script>








<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6a970f757b0db23442db807d/1k1f18po6';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
</body>
</html>