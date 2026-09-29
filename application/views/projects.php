

<style>
.projects-header {
    text-align: center;
    max-width: 760px;
    margin: 0 auto 50px;
}

.projects-header .hero-title {
    margin-top: 18px;
    margin-bottom: 16px;
}

.projects-header .hero-desc {
    margin: 0 auto;
}


/* PROJECT GRID */

.projects-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 22px;
}


/* PROJECT CARD */

.project-card {
    position: relative;
    overflow: hidden;

    padding: 30px;

    background:
        linear-gradient(
            145deg,
            rgba(30, 41, 59, .98),
            rgba(15, 23, 42, .98)
        );

    border: 1px solid var(--line);

    border-radius: 22px;

    transition: .35s ease;
}

.project-card::before {
    content: "";

    position: absolute;

    width: 220px;
    height: 220px;

    top: -140px;
    right: -100px;

    background:
        radial-gradient(
            circle,
            rgba(139,92,246,.14),
            transparent 70%
        );

    pointer-events: none;
}

.project-card:hover {
    transform: translateY(-7px);

    border-color:
        rgba(139,92,246,.40);

    box-shadow:
        0 20px 45px rgba(0,0,0,.30);
}


/* PROJECT TOP */

.project-top {
    display: flex;

    justify-content: space-between;
    align-items: center;

    margin-bottom: 25px;
}

.project-icon {
    width: 52px;
    height: 52px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 15px;

    background:
        rgba(139,92,246,.10);

    border:
        1px solid rgba(139,92,246,.25);

    color: #c4b5fd;

    font-size: 20px;
}

.project-number {
    color: #475569;

    font-size: 12px;

    font-weight: 700;

    letter-spacing: 1px;
}


/* CATEGORY */

.project-category {
    display: inline-block;

    color: #a78bfa;

    font-size: 10px;

    font-weight: 700;

    letter-spacing: 1px;

    margin-bottom: 9px;
}


/* TITLE */

.project-card h3 {
    color: var(--text);

    font-size: 22px;

    line-height: 1.4;

    margin-bottom: 12px;
}


/* DESCRIPTION */

.project-card > p {
    color: var(--muted);

    font-size: 14px;

    line-height: 1.75;

    min-height: 74px;
}


/* TECHNOLOGY */

.project-tech {
    display: flex;

    flex-wrap: wrap;

    gap: 8px;

    margin-top: 22px;
}

.project-tech span {
    padding: 7px 11px;

    border-radius: 8px;

    background:
        rgba(255,255,255,.045);

    border:
        1px solid var(--line);

    color: #cbd5e1;

    font-size: 11px;

    font-weight: 600;
}


/* ACTION BUTTONS */

.project-actions {
    display: flex;

    flex-wrap: wrap;

    gap: 10px;

    margin-top: 25px;

    padding-top: 20px;

    border-top: 1px solid var(--line);
}

.project-btn {
    display: inline-flex;

    align-items: center;

    gap: 8px;

    padding: 9px 15px;

    border-radius: 9px;

    background:
        rgba(255,255,255,.04);

    border:
        1px solid var(--line2);

    color: var(--text);

    font-size: 12px;

    font-weight: 600;

    transition: .3s ease;
}

.project-btn:hover {
    transform: translateY(-2px);

    background:
        rgba(255,255,255,.08);
}

.project-btn.primary {
    background:
        linear-gradient(
            135deg,
            var(--accent),
            var(--accent2)
        );

    border: none;

    color: white;

    box-shadow:
        0 5px 15px rgba(139,92,246,.20);
}


/* =========================================
   PROJECT CTA
========================================= */

.projects-cta {
    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 30px;

    margin-top: 50px;

    padding: 35px;

    border-radius: 22px;

    background:
        linear-gradient(
            135deg,
            rgba(139,92,246,.10),
            rgba(59,130,246,.08)
        );

    border:
        1px solid rgba(139,92,246,.20);
}

.projects-cta h2 {
    margin: 8px 0;

    font-size: 26px;

    line-height: 1.3;
}

.projects-cta h2 span {
    background:
        linear-gradient(
            135deg,
            #c4b5fd,
            #60a5fa
        );

    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.projects-cta p {
    color: var(--muted);

    font-size: 13px;
}


/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 800px) {

    .projects-grid {
        grid-template-columns: 1fr;
    }

    .projects-cta {
        flex-direction: column;

        align-items: flex-start;
    }

}


@media (max-width: 600px) {

    .project-card {
        padding: 24px;
    }

    .project-card h3 {
        font-size: 20px;
    }

    .projects-cta {
        padding: 25px;
    }

    .projects-cta h2 {
        font-size: 22px;
    }

}

</style>









<?php $this->load->view('layout/header'); ?>

<div class="section projects-page">

    <!-- =========================================
         PROJECT HEADER
    ========================================== -->

    <div class="projects-header">

        <span class="section-label">
            MY WORK
        </span>

        <h1 class="hero-title">
            Featured <span>Projects</span>
        </h1>

        <p class="hero-desc">
            A collection of web applications, business systems,
            e-commerce platforms and CMS solutions I've built
            using PHP, CodeIgniter, Laravel and modern web technologies.
        </p>

    </div>


    <!-- =========================================
         PROJECT GRID
    ========================================== -->

    <div class="projects-grid">


        <!-- =====================================
             PROJECT 1
        ====================================== -->

        <div class="project-card">

            <div class="project-top">

                <div class="project-icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>

                <span class="project-number">
                    01
                </span>

            </div>

            <span class="project-category">
                E-COMMERCE
            </span>

            <h3>
                E-Commerce Web App
            </h3>

            <p>
                A full-stack e-commerce platform with cart management,
                user authentication and Razorpay payment gateway
                integration.
            </p>

            <div class="project-tech">

                <span>Laravel</span>
                <span>MySQL</span>
                <span>Razorpay</span>
                <span>Bootstrap 5</span>

            </div>

            <div class="project-actions">

                <a href="#" class="project-btn primary">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    Live Demo
                </a>

                <a href="#" class="project-btn">
                    <i class="fa-brands fa-github"></i>
                    GitHub
                </a>

            </div>

        </div>


        <!-- =====================================
     PROJECT 2 - STUDENT FEE ERP
====================================== -->

<div class="project-card">

    <div class="project-top">

        <div class="project-icon">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>

        <span class="project-number">
            02
        </span>

    </div>

    <span class="project-category">
        FEES MANAGEMENT / ERP
    </span>

    <h3>
        Student Fee Management ERP
    </h3>

    <p>
        A role-based school fee management ERP for managing
        students, classes, fee collection, payment history,
        receipts and administrative reports with separate
        Admin and Student portals.
    </p>

    <div class="project-tech">

        <span>Laravel</span>
        <span>PHP</span>
        <span>MySQL</span>
        <span>Blade</span>
        <span>Tailwind CSS</span>
        <span>JavaScript</span>

    </div>

    <div class="project-actions">

        <a href="<?= site_url('home/fee_erp'); ?>" class="project-btn primary">
    <i class="fa-solid fa-eye"></i>
    View Details
</a>

        <a href="#" class="project-btn">
            <i class="fa-solid fa-credit-card"></i>
            Razorpay Demo
        </a>

    </div>

</div>

        <!-- =====================================
             PROJECT 3
        ====================================== -->

        <div class="project-card">

            <div class="project-top">

                <div class="project-icon">
                    <i class="fa-solid fa-boxes-stacked"></i>
                </div>

                <span class="project-number">
                    03
                </span>

            </div>

            <span class="project-category">
                BUSINESS / INVENTORY
            </span>

            <h3>
                Business Management & Inventory System
            </h3>

            <p>
                Business management application for managing products,
                inventory, sales records and daily business operations
                through a centralized system.
            </p>

            <div class="project-tech">

                <span>PHP</span>
                <span>CodeIgniter</span>
                <span>MySQL</span>
                <span>Bootstrap</span>

            </div>

            <div class="project-actions">

                <a href="#" class="project-btn primary">
                    <i class="fa-solid fa-eye"></i>
                    View Details
                </a>

            </div>

        </div>


        <!-- =====================================
             PROJECT 4
        ====================================== -->

        <div class="project-card">

            <div class="project-top">

                <div class="project-icon">
                    <i class="fa-solid fa-newspaper"></i>
                </div>

                <span class="project-number">
                    04
                </span>

            </div>

            <span class="project-category">
                CMS / NEWS PORTAL
            </span>

            <h3>
                NewsWave India – CMS News Portal
            </h3>

            <p>
                A dynamic news portal with CMS functionality for
                managing articles, categories, content and publishing
                workflow.
            </p>

            <div class="project-tech">

                <span>PHP</span>
                <span>CodeIgniter</span>
                <span>MySQL</span>
                <span>jQuery</span>

            </div>

            <div class="project-actions">

                <a href="#" class="project-btn primary">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    Live Demo
                </a>

                <a href="#" class="project-btn">
                    <i class="fa-brands fa-github"></i>
                    GitHub
                </a>

            </div>

        </div>


        <!-- =====================================
             PROJECT 5
        ====================================== -->

        <div class="project-card">

            <div class="project-top">

                <div class="project-icon">
                    <i class="fa-solid fa-shirt"></i>
                </div>

                <span class="project-number">
                    05
                </span>

            </div>

            <span class="project-category">
                FASHION / E-COMMERCE
            </span>

            <h3>
                Premium Sarees & Lehenga
            </h3>

            <p>
                E-commerce platform for premium sarees and lehengas
                with product catalog, shopping cart, wishlist and
                order management features.
            </p>

            <div class="project-tech">

                <span>PHP</span>
                <span>Laravel</span>
                <span>MySQL</span>
                <span>JavaScript</span>

            </div>

            <div class="project-actions">

                <a href="#" class="project-btn primary">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    Live Demo
                </a>

                <a href="#" class="project-btn">
                    <i class="fa-brands fa-github"></i>
                    GitHub
                </a>

            </div>

        </div>


        <!-- =====================================
             PROJECT 6
        ====================================== -->

        <div class="project-card">

            <div class="project-top">

                <div class="project-icon">
                    <i class="fa-solid fa-code"></i>
                </div>

                <span class="project-number">
                    06
                </span>

            </div>

            <span class="project-category">
                API / WEB APPLICATION
            </span>

            <h3>
                REST API Application
            </h3>

            <p>
                Backend API application designed for structured
                communication between frontend applications and
                server-side services.
            </p>

            <div class="project-tech">

                <span>Laravel</span>
                <span>PHP</span>
                <span>REST API</span>
                <span>MySQL</span>

            </div>

            <div class="project-actions">

                <a href="#" class="project-btn primary">
                    <i class="fa-solid fa-eye"></i>
                    View Details
                </a>

                <a href="#" class="project-btn">
                    <i class="fa-brands fa-github"></i>
                    GitHub
                </a>

            </div>

        </div>


    </div>


    <!-- =========================================
         PROJECT CTA
    ========================================== -->

    <div class="projects-cta">

        <div>

            <span class="section-label">
                HAVE A PROJECT?
            </span>

            <h2>
                Let's build something
                <span>great together.</span>
            </h2>

            <p>
                I'm available for full-time opportunities,
                freelance projects and interesting collaborations.
            </p>

        </div>


        <a
            href="<?= site_url('home/contact') ?>"
            class="btn-p primary"
        >
            <i class="fa-solid fa-paper-plane"></i>
            Let's Connect
        </a>

    </div>

</div>

<?php $this->load->view('layout/footer'); ?>