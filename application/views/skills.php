<style>


/* =========================================
   SKILLS PAGE
========================================= */

.skills-header {
    max-width: 750px;
    margin: 0 auto 55px;
    text-align: center;
}

.skills-header .hero-title {
    margin-top: 15px;
    margin-bottom: 15px;
}

.skills-header .hero-desc {
    margin: auto;
}


/* SECTION */

.skills-section {
    margin-bottom: 55px;
}


/* SECTION TITLE */

.skills-section-title {
    display: flex;
    align-items: center;
    gap: 15px;

    margin-bottom: 25px;
}

.skills-title-icon {
    width: 46px;
    height: 46px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 13px;

    background: rgba(139,92,246,.10);

    border: 1px solid rgba(139,92,246,.25);

    color: #a78bfa;

    font-size: 18px;
}

.skills-section-title h2 {
    font-size: 23px;
    margin: 0;
}

.skills-section-title p {
    color: var(--muted);
    font-size: 13px;
    margin-top: 3px;
}


/* GRID */

.skills-grid {
    display: grid;

    grid-template-columns: repeat(3, 1fr);

    gap: 20px;
}


/* CARD */

.skill-card {
    position: relative;

    padding: 27px;

    border-radius: 20px;

    background:
        linear-gradient(
            145deg,
            rgba(30,41,59,.98),
            rgba(15,23,42,.98)
        );

    border: 1px solid var(--line);

    transition: .35s ease;

    overflow: hidden;
}

.skill-card::before {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    top: -110px;
    right: -80px;

    background:
        radial-gradient(
            circle,
            rgba(139,92,246,.14),
            transparent 70%
        );

    pointer-events: none;
}

.skill-card:hover {
    transform: translateY(-6px);

    border-color:
        rgba(139,92,246,.40);

    box-shadow:
        0 18px 40px rgba(0,0,0,.30);
}


/* TOP */

.skill-card-top {
    display: flex;

    justify-content: space-between;

    align-items: center;

    margin-bottom: 22px;
}


/* ICON */

.skill-icon {
    width: 50px;
    height: 50px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 14px;

    font-size: 22px;

    background: rgba(255,255,255,.04);

    border: 1px solid var(--line);
}


/* ICON COLORS */

.php-icon {
    color: #a5b4fc;
}

.ci-icon {
    color: #fb7185;
}

.laravel-icon {
    color: #fb7185;
}

.html-icon {
    color: #fb923c;
}

.bootstrap-icon {
    color: #c4b5fd;
}

.js-icon {
    color: #facc15;
}

.mysql-icon {
    color: #60a5fa;
}

.git-icon {
    color: #fb923c;
}

.hosting-icon {
    color: #34d399;
}


/* STATUS */

.skill-percent {
    color: #94a3b8;

    font-size: 11px;

    font-weight: 700;

    padding: 5px 9px;

    border-radius: 20px;

    background: rgba(255,255,255,.04);

    border: 1px solid var(--line);
}


/* TITLE */

.skill-card h3 {
    font-size: 19px;

    margin-bottom: 10px;

    color: var(--text);
}


/* DESCRIPTION */

.skill-card p {
    color: var(--muted);

    font-size: 13px;

    line-height: 1.7;

    min-height: 66px;
}


/* TAGS */

.skill-tags {
    display: flex;

    flex-wrap: wrap;

    gap: 7px;

    margin-top: 20px;
}

.skill-tags span {
    font-size: 10px;

    font-weight: 600;

    padding: 6px 9px;

    border-radius: 7px;

    color: #cbd5e1;

    background: rgba(255,255,255,.04);

    border: 1px solid var(--line);
}


/* SKILL BAR */

.skill-bar {
    height: 4px;

    width: 100%;

    margin-top: 20px;

    border-radius: 10px;

    overflow: hidden;

    background: rgba(255,255,255,.06);
}

.skill-bar span {
    display: block;

    height: 100%;

    border-radius: 10px;

    background:
        linear-gradient(
            90deg,
            var(--accent),
            var(--accent2)
        );
}


/* =========================================
   ADDITIONAL EXPERTISE
========================================= */

.expertise-box {
    display: flex;

    justify-content: space-between;

    align-items: center;

    gap: 40px;

    padding: 35px;

    margin-top: 10px;

    border-radius: 22px;

    background:
        linear-gradient(
            135deg,
            rgba(139,92,246,.08),
            rgba(59,130,246,.06)
        );

    border: 1px solid rgba(139,92,246,.18);
}

.expertise-box h2 {
    font-size: 25px;

    margin-top: 8px;
}

.expertise-list {
    display: flex;

    flex-wrap: wrap;

    justify-content: flex-end;

    gap: 9px;

    max-width: 600px;
}

.expertise-list span {
    display: inline-flex;

    align-items: center;

    gap: 7px;

    padding: 8px 12px;

    border-radius: 9px;

    background: rgba(255,255,255,.04);

    border: 1px solid var(--line);

    color: #cbd5e1;

    font-size: 11px;

    font-weight: 600;
}

.expertise-list i {
    color: var(--green);
}


/* =========================================
   CTA
========================================= */

.skills-cta {
    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 25px;

    margin-top: 30px;

    padding: 30px 35px;

    border-top: 1px solid var(--line);
}

.skills-cta h2 {
    font-size: 24px;
}

.skills-cta p {
    color: var(--muted);

    font-size: 13px;

    margin-top: 5px;
}


/* =========================================
   RESPONSIVE
========================================= */

@media(max-width: 900px) {

    .skills-grid {
        grid-template-columns: repeat(2, 1fr);
    }

}

@media(max-width: 650px) {

    .skills-grid {
        grid-template-columns: 1fr;
    }

    .skills-section-title {
        align-items: flex-start;
    }

    .expertise-box {
        flex-direction: column;

        align-items: flex-start;
    }

    .expertise-list {
        justify-content: flex-start;
    }

    .skills-cta {
        flex-direction: column;

        align-items: flex-start;
    }

}


</style>






<?php $this->load->view('layout/header'); ?>

<div class="section skills-page">

    <!-- =========================================
         SKILLS HEADER
    ========================================== -->

    <div class="skills-header">

        <span class="section-label">
            MY EXPERTISE
        </span>

        <h1 class="hero-title">
            Technical <span>Skills</span>
        </h1>

        <p class="hero-desc">
            Technologies and tools I use to build responsive,
            scalable and production-ready web applications.
        </p>

    </div>


    <!-- =========================================
         BACKEND DEVELOPMENT
    ========================================== -->

    <div class="skills-section">

        <div class="skills-section-title">

            <div class="skills-title-icon">
                <i class="fa-solid fa-server"></i>
            </div>

            <div>
                <h2>Backend Development</h2>
                <p>Server-side development & application architecture</p>
            </div>

        </div>


        <div class="skills-grid">


            <!-- PHP -->

            <div class="skill-card">

                <div class="skill-card-top">

                    <div class="skill-icon php-icon">
                        <i class="fa-brands fa-php"></i>
                    </div>

                    <span class="skill-percent">
                        Strong
                    </span>

                </div>

                <h3>PHP</h3>

                <p>
                    Core PHP, OOP, functions, sessions, form handling,
                    validation and clean application structure.
                </p>

                <div class="skill-tags">
                    <span>PHP</span>
                    <span>OOP</span>
                    <span>MVC</span>
                </div>

                <div class="skill-bar">
                    <span style="width: 88%;"></span>
                </div>

            </div>


            <!-- CODEIGNITER -->

            <div class="skill-card">

                <div class="skill-card-top">

                    <div class="skill-icon ci-icon">
                        <i class="fa-solid fa-fire"></i>
                    </div>

                    <span class="skill-percent">
                        Strong
                    </span>

                </div>

                <h3>CodeIgniter 3 & 4</h3>

                <p>
                    MVC architecture, routing, models, controllers,
                    form validation, sessions and RBAC.
                </p>

                <div class="skill-tags">
                    <span>CI3</span>
                    <span>CI4</span>
                    <span>MVC</span>
                    <span>RBAC</span>
                </div>

                <div class="skill-bar">
                    <span style="width: 90%;"></span>
                </div>

            </div>


            <!-- LARAVEL -->

            <div class="skill-card">

                <div class="skill-card-top">

                    <div class="skill-icon laravel-icon">
                        <i class="fa-brands fa-laravel"></i>
                    </div>

                    <span class="skill-percent">
                        Strong
                    </span>

                </div>

                <h3>Laravel</h3>

                <p>
                    Eloquent ORM, Blade templates, middleware,
                    authentication and REST API development.
                </p>

                <div class="skill-tags">
                    <span>Laravel</span>
                    <span>Eloquent</span>
                    <span>Blade</span>
                    <span>API</span>
                </div>

                <div class="skill-bar">
                    <span style="width: 85%;"></span>
                </div>

            </div>

        </div>

    </div>


    <!-- =========================================
         FRONTEND DEVELOPMENT
    ========================================== -->

    <div class="skills-section">

        <div class="skills-section-title">

            <div class="skills-title-icon">
                <i class="fa-solid fa-code"></i>
            </div>

            <div>
                <h2>Frontend Development</h2>
                <p>Responsive interfaces & interactive web experiences</p>
            </div>

        </div>


        <div class="skills-grid">


            <!-- HTML CSS -->

            <div class="skill-card">

                <div class="skill-card-top">

                    <div class="skill-icon html-icon">
                        <i class="fa-brands fa-html5"></i>
                    </div>

                    <span class="skill-percent">
                        Strong
                    </span>

                </div>

                <h3>HTML5 & CSS3</h3>

                <p>
                    Semantic HTML, modern CSS, Flexbox, Grid,
                    responsive layouts and reusable components.
                </p>

                <div class="skill-tags">
                    <span>HTML5</span>
                    <span>CSS3</span>
                    <span>Flexbox</span>
                    <span>Grid</span>
                </div>

                <div class="skill-bar">
                    <span style="width: 90%;"></span>
                </div>

            </div>


            <!-- BOOTSTRAP -->

            <div class="skill-card">

                <div class="skill-card-top">

                    <div class="skill-icon bootstrap-icon">
                        <i class="fa-brands fa-bootstrap"></i>
                    </div>

                    <span class="skill-percent">
                        Strong
                    </span>

                </div>

                <h3>Bootstrap 5</h3>

                <p>
                    Responsive UI development using Bootstrap grid,
                    components, utilities and custom styling.
                </p>

                <div class="skill-tags">
                    <span>Bootstrap</span>
                    <span>Grid</span>
                    <span>Responsive</span>
                </div>

                <div class="skill-bar">
                    <span style="width: 88%;"></span>
                </div>

            </div>


            <!-- JAVASCRIPT -->

            <div class="skill-card">

                <div class="skill-card-top">

                    <div class="skill-icon js-icon">
                        <i class="fa-brands fa-js"></i>
                    </div>

                    <span class="skill-percent">
                        Good
                    </span>

                </div>

                <h3>JavaScript & jQuery</h3>

                <p>
                    DOM manipulation, AJAX requests, event handling
                    and interactive user interfaces.
                </p>

                <div class="skill-tags">
                    <span>JavaScript</span>
                    <span>jQuery</span>
                    <span>AJAX</span>
                </div>

                <div class="skill-bar">
                    <span style="width: 78%;"></span>
                </div>

            </div>

        </div>

    </div>


    <!-- =========================================
         DATABASE & TOOLS
    ========================================== -->

    <div class="skills-section">

        <div class="skills-section-title">

            <div class="skills-title-icon">
                <i class="fa-solid fa-toolbox"></i>
            </div>

            <div>
                <h2>Database & Tools</h2>
                <p>Data management, version control & deployment</p>
            </div>

        </div>


        <div class="skills-grid">


            <!-- MYSQL -->

            <div class="skill-card">

                <div class="skill-card-top">

                    <div class="skill-icon mysql-icon">
                        <i class="fa-solid fa-database"></i>
                    </div>

                    <span class="skill-percent">
                        Strong
                    </span>

                </div>

                <h3>MySQL</h3>

                <p>
                    Database design, relationships, joins, indexing,
                    queries and optimization.
                </p>

                <div class="skill-tags">
                    <span>MySQL</span>
                    <span>SQL</span>
                    <span>Joins</span>
                    <span>Indexing</span>
                </div>

                <div class="skill-bar">
                    <span style="width: 86%;"></span>
                </div>

            </div>


            <!-- GIT -->

            <div class="skill-card">

                <div class="skill-card-top">

                    <div class="skill-icon git-icon">
                        <i class="fa-brands fa-git-alt"></i>
                    </div>

                    <span class="skill-percent">
                        Good
                    </span>

                </div>

                <h3>Git & GitHub</h3>

                <p>
                    Version control, repositories, branching,
                    commits and project collaboration.
                </p>

                <div class="skill-tags">
                    <span>Git</span>
                    <span>GitHub</span>
                    <span>Version Control</span>
                </div>

                <div class="skill-bar">
                    <span style="width: 75%;"></span>
                </div>

            </div>


            <!-- HOSTING -->

            <div class="skill-card">

                <div class="skill-card-top">

                    <div class="skill-icon hosting-icon">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                    </div>

                    <span class="skill-percent">
                        Good
                    </span>

                </div>

                <h3>Web Hosting & cPanel</h3>

                <p>
                    Deploying PHP applications, database configuration,
                    cPanel management and live website deployment.
                </p>

                <div class="skill-tags">
                    <span>cPanel</span>
                    <span>Hosting</span>
                    <span>Deployment</span>
                </div>

                <div class="skill-bar">
                    <span style="width: 72%;"></span>
                </div>

            </div>

        </div>

    </div>


    <!-- =========================================
         ADDITIONAL EXPERTISE
    ========================================== -->

    <div class="expertise-box">

        <div>

            <span class="section-label">
                ADDITIONAL EXPERTISE
            </span>

            <h2>
                What I can build
            </h2>

        </div>


        <div class="expertise-list">

            <span>
                <i class="fa-solid fa-check"></i>
                REST APIs
            </span>

            <span>
                <i class="fa-solid fa-check"></i>
                ERP Systems
            </span>

            <span>
                <i class="fa-solid fa-check"></i>
                E-Commerce
            </span>

            <span>
                <i class="fa-solid fa-check"></i>
                Admin Panels
            </span>

            <span>
                <i class="fa-solid fa-check"></i>
                RBAC
            </span>

            <span>
                <i class="fa-solid fa-check"></i>
                Payment Gateway
            </span>

            <span>
                <i class="fa-solid fa-check"></i>
                GST Billing
            </span>

            <span>
                <i class="fa-solid fa-check"></i>
                AJAX Applications
            </span>

        </div>

    </div>


    <!-- =========================================
         CTA
    ========================================== -->

    <div class="skills-cta">

        <div>

            <h2>
                Have a project in mind?
            </h2>

            <p>
                Let's discuss how I can help build your next
                web application.
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