<?php $this->load->view('layout/header'); ?>

<style>

    /* =========================================
       HOME / HERO
    ========================================= */

    .home-page {
        max-width: 1200px;
        margin: 0 auto;
    }

    .hero-wrap {
        display: grid;
        grid-template-columns: 1.45fr 0.85fr;
        gap: 28px;
        align-items: stretch;
        padding: 70px 0 30px;
    }

    .hero-main {
        position: relative;
        overflow: hidden;
        padding: 48px;
    }

    .hero-main::before {
        content: "";
        position: absolute;
        width: 280px;
        height: 280px;
        top: -150px;
        right: -100px;
        border-radius: 50%;
        background: rgba(139, 92, 246, 0.10);
        filter: blur(10px);
        pointer-events: none;
    }

    .hero-main > * {
        position: relative;
        z-index: 1;
    }

    .badge {
        display: inline-flex;
        align-items: center;
        gap: 9px;

        padding: 8px 13px;
        border-radius: 30px;

        background: rgba(16, 185, 129, 0.07);
        border: 1px solid rgba(16, 185, 129, 0.20);

        color: var(--green);
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 24px;
    }

    .dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--green);
        box-shadow: 0 0 10px var(--green);
    }

    .hero-title {
        max-width: 760px;
        font-size: clamp(38px, 5vw, 58px);
        line-height: 1.08;
        letter-spacing: -1.8px;
        margin: 0 0 22px;
    }

    .hero-title span {
        background: linear-gradient(
            135deg,
            var(--text),
            #a78bfa,
            #60a5fa
        );

        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hero-desc {
        max-width: 700px;
        color: var(--muted);
        font-size: 15px;
        line-height: 1.8;
        margin-bottom: 28px;
    }

    .hero-desc b {
        color: var(--text);
        font-weight: 650;
    }

    .hero-btns {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .hero-btns .btn-p {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
    }


    /* =========================================
       PROFILE CARD
    ========================================= */

    .profile-card {
        position: relative;
        overflow: hidden;
    }

    .profile-card::before {
        content: "";
        position: absolute;
        top: -100px;
        right: -100px;

        width: 220px;
        height: 220px;

        border-radius: 50%;

        background: rgba(59, 130, 246, 0.08);
        filter: blur(5px);
    }

    .profile-top {
        position: relative;
        z-index: 1;

        display: grid;
        grid-template-columns: auto 1fr auto;
        align-items: center;
        gap: 14px;

        margin-bottom: 25px;
    }

    .profile-top img {
        width: 64px;
        height: 64px;

        border-radius: 16px;
        object-fit: cover;

        border: 2px solid rgba(255,255,255,0.10);

        box-shadow:
            0 8px 25px rgba(0,0,0,0.20);
    }

    .profile-top h3 {
        margin: 0;
        color: var(--text);
        font-size: 18px;
    }

    .profile-top p {
        margin: 4px 0 0;
        color: var(--muted);
        font-size: 12px;
        line-height: 1.5;
    }

    .open-badge {
        padding: 7px 10px;

        border-radius: 9px;

        background: rgba(16, 185, 129, 0.08);
        border: 1px solid rgba(16, 185, 129, 0.18);

        color: var(--green);

        font-size: 10px;
        font-weight: 700;

        text-align: center;
        line-height: 1.35;
    }


    /* =========================================
       SKILL TAGS
    ========================================= */

    .tags {
        position: relative;
        z-index: 1;

        display: flex;
        flex-wrap: wrap;
        gap: 7px;

        padding-bottom: 23px;
        margin-bottom: 5px;

        border-bottom: 1px solid var(--line);
    }

    .tags span {
        padding: 6px 10px;

        border-radius: 7px;

        background: rgba(255,255,255,0.035);
        border: 1px solid rgba(255,255,255,0.08);

        color: var(--muted);

        font-size: 11px;
        font-weight: 600;
    }

    .tags span:hover {
        color: var(--text);
        border-color: rgba(16,185,129,0.30);
    }


    /* =========================================
       INFO ROWS
    ========================================= */

    .info-row {
        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 15px;

        padding: 13px 0;

        border-bottom: 1px solid var(--line);

        font-size: 12px;
    }

    .info-row:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .info-row span:first-child {
        color: var(--muted);
    }

    .info-row span:last-child {
        color: var(--text);
        font-weight: 600;
        text-align: right;
    }


    /* =========================================
       SECTION
    ========================================= */

    .home-section {
        padding: 65px 0 10px;
    }

    .section-heading {
        display: flex;
        align-items: end;
        justify-content: space-between;
        gap: 20px;

        margin-bottom: 25px;
    }

    .section-heading h2 {
        margin: 0;
        font-size: 28px;
        letter-spacing: -0.5px;
    }

    .section-heading p {
        margin: 0;
        max-width: 450px;

        color: var(--muted);
        font-size: 13px;
        line-height: 1.6;
    }


    /* =========================================
       SKILL CARDS
    ========================================= */

    .grid-3 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
    }

    .skill-card {
        padding: 25px;

        border: 1px solid var(--line);
        border-radius: 14px;

        background: rgba(255,255,255,0.015);

        transition:
            transform 0.25s ease,
            border-color 0.25s ease,
            background 0.25s ease;
    }

    .skill-card:hover {
        transform: translateY(-4px);

        border-color: rgba(139,92,246,0.30);

        background: rgba(139,92,246,0.035);
    }

    .skill-icon {
        width: 42px;
        height: 42px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin-bottom: 17px;

        border-radius: 10px;

        background: rgba(139,92,246,0.09);
        border: 1px solid rgba(139,92,246,0.14);

        color: #a78bfa;
    }

    .skill-icon svg {
        width: 20px;
        height: 20px;

        stroke: currentColor;
        fill: none;
        stroke-width: 1.7;
    }

    .skill-card h4 {
        margin: 0 0 8px;

        color: var(--text);
        font-size: 15px;
    }

    .skill-card p {
        margin: 0;

        color: var(--muted);
        font-size: 12px;
        line-height: 1.7;
    }


    /* =========================================
       FEATURED VIDEO
    ========================================= */

    .showcase-card {
        padding: 24px;
    }

    .video-wrapper {
        position: relative;
        overflow: hidden;

        border-radius: 13px;
        border: 1px solid var(--line);

        background: #000;
    }

    .video-wrapper video {
        display: block;
        width: 100%;
        height: auto;
        max-height: 600px;
    }

    .showcase-info {
        display: flex;
        justify-content: space-between;
        align-items: center;

        gap: 20px;

        padding: 20px 3px 3px;
    }

    .showcase-info h3 {
        margin: 0 0 5px;

        color: var(--text);
        font-size: 17px;
    }

    .showcase-info p {
        margin: 0;

        color: var(--muted);
        font-size: 12px;
        line-height: 1.6;
    }

    .showcase-link {
        flex-shrink: 0;

        color: var(--green);
        text-decoration: none;

        font-size: 12px;
        font-weight: 600;
    }

    .showcase-link:hover {
        text-decoration: underline;
    }


    /* =========================================
       MOBILE
    ========================================= */

    @media (max-width: 900px) {

        .hero-wrap {
            grid-template-columns: 1fr;
            padding-top: 45px;
        }

        .grid-3 {
            grid-template-columns: repeat(2, 1fr);
        }
    }


    @media (max-width: 650px) {

        .home-page {
            padding: 0 15px;
        }

        .hero-main {
            padding: 30px 24px;
        }

        .hero-title {
            font-size: 36px;
            letter-spacing: -1px;
        }

        .hero-desc {
            font-size: 14px;
        }

        .hero-btns {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .hero-btns .btn-p {
            width: 100%;
            box-sizing: border-box;
        }

        .grid-3 {
            grid-template-columns: 1fr;
        }

        .section-heading {
            display: block;
        }

        .section-heading p {
            margin-top: 8px;
        }

        .showcase-info {
            display: block;
        }

        .showcase-link {
            display: inline-block;
            margin-top: 12px;
        }
    }


    @media (max-width: 430px) {

        .hero-btns {
            grid-template-columns: 1fr;
        }

        .profile-top {
            grid-template-columns: auto 1fr;
        }

        .open-badge {
            grid-column: 1 / -1;
            width: fit-content;
        }
    }





















    /* =========================================
   SKILLS SECTION
========================================= */

.section-heading {
    margin-bottom: 35px;
    max-width: 700px;
}

.section-label {
    display: inline-block;

    color: #a78bfa;

    font-size: 11px;

    font-weight: 700;

    letter-spacing: 1.5px;

    margin-bottom: 10px;
}

.section-heading h2 {
    margin-bottom: 10px;
}

.section-heading h2 span {
    background: linear-gradient(
        135deg,
        var(--accent),
        var(--accent2)
    );

    -webkit-background-clip: text;
    background-clip: text;

    -webkit-text-fill-color: transparent;
}

.section-heading p {
    color: var(--muted);

    font-size: 15px;

    line-height: 1.7;
}


/* =========================================
   SKILLS PAGE
========================================= */

.skills-page {
    width: 100%;
}


/* =========================================
   SKILLS PAGE HEADING
========================================= */

.skills-page .section-heading {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 55px;
    padding: 0;
}


/* =========================================
   SECTION LABEL
========================================= */

.skills-page .section-label {
    display: inline-block;

    color: #a78bfa;
    font-size: 15px;
    font-weight: 700;

    letter-spacing: 2px;
    line-height: 1.4;

    margin-bottom: 16px;

    text-transform: uppercase;
}


/* =========================================
   MAIN HEADING
========================================= */

.skills-page .section-heading h1,
.skills-page .section-heading h2 {
    font-size: 44px;
    font-weight: 800;

    line-height: 1.15;

    margin: 0 0 16px;

    letter-spacing: -1px;

    color: var(--text);
}


/* =========================================
   GRADIENT WORD
========================================= */

.skills-page .section-heading h1 span,
.skills-page .section-heading h2 span {
    background: linear-gradient(
        135deg,
        #8b5cf6,
        #3b82f6
    );

    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;

    background-clip: text;
}


/* =========================================
   DESCRIPTION
========================================= */

.skills-page .section-heading p {
    max-width: 680px;

    margin: 0 auto;

    color: var(--muted);

    font-size: 17px;
    line-height: 1.7;
}


/* =========================================
   SKILL CARD
========================================= */

.skill-card {
    min-height: 285px;

    display: flex;
    flex-direction: column;

    position: relative;

    background:
        linear-gradient(
            145deg,
            rgba(30, 41, 59, 0.95),
            rgba(15, 23, 42, 0.95)
        );

    border: 1px solid var(--line);

    border-radius: 20px;

    padding: 28px;

    overflow: hidden;

    transition:
        transform 0.3s ease,
        border-color 0.3s ease,
        box-shadow 0.3s ease;
}


/* =========================================
   CARD HOVER
========================================= */

.skill-card:hover {
    transform: translateY(-6px);

    border-color: rgba(139, 92, 246, 0.45);

    box-shadow:
        0 18px 40px rgba(0, 0, 0, 0.28);
}


/* =========================================
   SKILL ICON
========================================= */

.skill-icon {
    width: 52px;
    height: 52px;

    display: flex;
    align-items: center;
    justify-content: center;

    flex-shrink: 0;

    border-radius: 15px;

    margin-bottom: 20px;

    background:
        linear-gradient(
            135deg,
            rgba(139, 92, 246, 0.15),
            rgba(59, 130, 246, 0.10)
        );

    border: 1px solid rgba(139, 92, 246, 0.22);

    color: #c4b5fd;

    font-size: 23px;

    transition: 0.3s ease;
}


/* =========================================
   ICON HOVER
========================================= */

.skill-card:hover .skill-icon {
    transform:
        translateY(-3px)
        scale(1.05);

    background:
        linear-gradient(
            135deg,
            rgba(139, 92, 246, 0.25),
            rgba(59, 130, 246, 0.18)
        );

    box-shadow:
        0 8px 25px rgba(139, 92, 246, 0.18);
}


/* =========================================
   SKILL TITLE
========================================= */

.skill-card h4 {
    font-size: 18px;

    font-weight: 700;

    margin-bottom: 10px;

    color: var(--text);
}


/* =========================================
   SKILL DESCRIPTION
========================================= */

.skill-card p {
    color: var(--muted);

    font-size: 13px;

    line-height: 1.7;

    margin-bottom: 20px;
}


/* =========================================
   TECHNOLOGY TAGS
========================================= */

.skill-tags {
    display: flex;

    flex-wrap: wrap;

    gap: 6px;

    margin-top: auto;
}

.skill-tags span {
    padding: 5px 9px;

    border-radius: 7px;

    background:
        rgba(255, 255, 255, 0.045);

    border: 1px solid var(--line);

    color: #cbd5e1;

    font-size: 10px;

    font-weight: 600;

    transition: 0.25s ease;
}

.skill-tags span:hover {
    color: white;

    border-color:
        rgba(139, 92, 246, 0.4);

    background:
        rgba(139, 92, 246, 0.08);
}


/* =========================================
   SKILL CARD DECORATION
========================================= */

.skill-card::before {
    content: "";

    position: absolute;

    width: 160px;
    height: 160px;

    top: -80px;
    right: -80px;

    background:
        radial-gradient(
            circle,
            rgba(139, 92, 246, 0.12),
            transparent 70%
        );

    pointer-events: none;
}


/* =========================================
   SKILLS GRID
========================================= */

.skills-page .grid-3 {
    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 20px;
}


/* =========================================
   SKILLS CATEGORY TITLE
========================================= */

.skills-page > h2 {
    font-size: 24px;

    font-weight: 700;

    margin-bottom: 20px;

    padding-bottom: 12px;

    border-bottom: 1px solid var(--line);

    color: var(--text);
}


/* =========================================
   TABLET
========================================= */

@media (max-width: 950px) {

    .skills-page .grid-3 {
        grid-template-columns: repeat(2, 1fr);
    }

}


/* =========================================
   MOBILE
========================================= */

@media (max-width: 600px) {

    .skills-page .section-heading {
        margin-bottom: 40px;
        padding: 0 10px;
    }

    .skills-page .section-label {
        font-size: 14px;
        letter-spacing: 1.8px;
        margin-bottom: 12px;
    }

    .skills-page .section-heading h1,
    .skills-page .section-heading h2 {
        font-size: 34px;
        letter-spacing: -0.5px;
    }

    .skills-page .section-heading p {
        font-size: 15px;
        line-height: 1.6;
    }

    .skills-page .grid-3 {
        grid-template-columns: 1fr;
    }

    .skill-card {
        min-height: auto;
        padding: 24px;
    }

}




































/* =========================================
   PROJECTS
========================================= */

.projects-grid {
    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 22px;
}


/* PROJECT CARD */

.project-card {
    background:
        linear-gradient(
            145deg,
            rgba(30, 41, 59, 0.98),
            rgba(15, 23, 42, 0.98)
        );

    border:
        1px solid var(--line);

    border-radius: 22px;

    overflow: hidden;

    transition:
        transform 0.3s ease,
        border-color 0.3s ease,
        box-shadow 0.3s ease;
}

.project-card:hover {
    transform: translateY(-7px);

    border-color:
        rgba(139, 92, 246, 0.45);

    box-shadow:
        0 20px 45px rgba(0, 0, 0, 0.3);
}


/* PROJECT IMAGE / PREVIEW */

.project-image {
    height: 190px;

    position: relative;

    display: flex;

    align-items: center;
    justify-content: center;

    overflow: hidden;

    background:
        radial-gradient(
            circle at center,
            rgba(139, 92, 246, 0.18),
            transparent 65%
        ),
        #111827;

    border-bottom:
        1px solid var(--line);
}

.project-image::before {
    content: '';

    position: absolute;

    width: 180px;
    height: 180px;

    border-radius: 50%;

    border:
        1px solid rgba(139, 92, 246, 0.15);

    animation:
        projectPulse 5s linear infinite;
}

@keyframes projectPulse {

    0% {
        transform: scale(0.8);
        opacity: 0.3;
    }

    50% {
        transform: scale(1.15);
        opacity: 0.7;
    }

    100% {
        transform: scale(0.8);
        opacity: 0.3;
    }
}


/* PROJECT ICON */

.project-image-content {
    width: 72px;
    height: 72px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 20px;

    background:
        rgba(139, 92, 246, 0.12);

    border:
        1px solid rgba(139, 92, 246, 0.3);

    color: #c4b5fd;

    font-size: 30px;

    position: relative;

    z-index: 2;

    transition: 0.3s ease;
}

.project-card:hover .project-image-content {
    transform:
        scale(1.08)
        rotate(2deg);

    box-shadow:
        0 10px 35px rgba(139, 92, 246, 0.25);
}


/* STATUS */

.project-status {
    position: absolute;

    top: 14px;
    right: 14px;

    padding: 5px 10px;

    border-radius: 20px;

    background:
        rgba(16, 185, 129, 0.1);

    border:
        1px solid rgba(16, 185, 129, 0.25);

    color: var(--green);

    font-size: 10px;

    font-weight: 700;

    text-transform: uppercase;

    z-index: 3;
}


/* PROJECT CONTENT */

.project-content {
    padding: 25px;
}

.project-category {
    color: #a78bfa;

    font-size: 10px;

    font-weight: 700;

    letter-spacing: 1.2px;

    margin-bottom: 8px;
}

.project-content h3 {
    font-size: 20px;

    line-height: 1.35;

    margin-bottom: 10px;

    font-weight: 700;
}

.project-content p {
    color: var(--muted);

    font-size: 13px;

    line-height: 1.7;

    min-height: 66px;
}


/* TECHNOLOGIES */

.project-tech {
    display: flex;

    flex-wrap: wrap;

    gap: 6px;

    margin-top: 18px;
}

.project-tech span {
    padding: 5px 9px;

    border-radius: 7px;

    background:
        rgba(255, 255, 255, 0.045);

    border:
        1px solid var(--line);

    color: #cbd5e1;

    font-size: 10px;

    font-weight: 600;
}


/* PROJECT BUTTONS */

.project-buttons {
    display: flex;

    gap: 8px;

    margin-top: 22px;
}

.project-btn {
    flex: 1;

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 7px;

    padding: 10px 12px;

    border-radius: 10px;

    background:
        rgba(255, 255, 255, 0.045);

    border:
        1px solid var(--line2);

    color: var(--text);

    font-size: 11px;

    font-weight: 600;

    transition: 0.25s ease;
}

.project-btn:hover {
    transform: translateY(-2px);

    background:
        rgba(255, 255, 255, 0.09);
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
}

.project-btn.primary:hover {
    box-shadow:
        0 8px 22px rgba(99, 102, 241, 0.3);
}


/* =========================================
   PROJECT VIDEO
========================================= */

.project-video {
    margin-top: 35px;

    padding: 25px;

    border-radius: 22px;

    background:
        linear-gradient(
            145deg,
            rgba(30, 41, 59, 0.95),
            rgba(15, 23, 42, 0.95)
        );

    border:
        1px solid var(--line);
}

.video-heading {
    display: flex;

    justify-content: space-between;

    align-items: center;

    margin-bottom: 20px;
}

.video-heading h3 {
    margin-top: 3px;

    font-size: 20px;
}

.video-heading > i {
    width: 44px;
    height: 44px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 12px;

    background:
        rgba(139, 92, 246, 0.1);

    color: #c4b5fd;

    border:
        1px solid rgba(139, 92, 246, 0.2);
}

.project-video video {
    width: 100%;

    max-height: 600px;

    border-radius: 15px;

    border:
        1px solid var(--line);
}


/* =========================================
   PROJECT RESPONSIVE
========================================= */

@media (max-width: 1000px) {

    .projects-grid {
        grid-template-columns:
            repeat(2, 1fr);
    }
}


@media (max-width: 700px) {

    .projects-grid {
        grid-template-columns:
            1fr;
    }

    .project-image {
        height: 180px;
    }

    .project-video {
        padding: 18px;
    }

    .video-heading h3 {
        font-size: 17px;
    }
}





/* =========================================
   HERO POLISH
========================================= */

.hero-main {
    padding: 52px 46px;
}


/* HERO HIGHLIGHTS */

.hero-highlights {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 24px;
}

.hero-highlights span {
    display: inline-flex;
    align-items: center;
    gap: 8px;

    padding: 8px 12px;

    border-radius: 10px;

    background: rgba(255,255,255,0.035);

    border: 1px solid var(--line);

    color: var(--muted);

    font-size: 12px;
    font-weight: 500;
}

.hero-highlights i {
    color: #a78bfa;
}


/* HERO BOTTOM */

.hero-bottom {
    display: flex;
    align-items: center;
    flex-wrap: wrap;

    gap: 20px;

    margin-top: 28px;
    padding-top: 22px;

    border-top: 1px solid var(--line);
}

.hero-bottom div {
    display: flex;
    align-items: center;
    gap: 8px;

    color: var(--muted);

    font-size: 12px;
}

.hero-bottom i {
    color: #a78bfa;
}


/* =========================================
   PROFILE IMAGE
========================================= */

.profile-image-wrap {
    position: relative;
    flex-shrink: 0;
}

.profile-top img {
    display: block;
}

.profile-online {
    position: absolute;

    right: 5px;
    bottom: 7px;

    width: 15px;
    height: 15px;

    border-radius: 50%;

    background: var(--green);

    border: 3px solid var(--card);

    box-shadow: 0 0 10px rgba(16,185,129,.7);
}


/* PROFILE NAME */

.profile-name {
    min-width: 0;
}

.profile-name h3 {
    margin-bottom: 2px;
}

.profile-name p {
    color: var(--muted);
    font-size: 13px;
}

.profile-name small {
    display: block;

    margin-top: 5px;

    color: #64748b;

    font-size: 11px;
}

.profile-name small i {
    color: #a78bfa;
}


/* =========================================
   PROFILE DIVIDER
========================================= */

.profile-divider {
    height: 1px;

    background: var(--line);

    margin: 4px 0 22px;
}


/* =========================================
   PROFILE LABEL
========================================= */

.profile-label {
    display: flex;

    justify-content: space-between;
    align-items: center;

    margin-bottom: 12px;
}

.profile-label span {
    color: var(--muted);

    font-size: 10px;

    font-weight: 700;

    letter-spacing: 1px;
}

.profile-label i {
    color: #64748b;

    font-size: 12px;
}


/* =========================================
   PROFILE DETAILS
========================================= */

.profile-details {
    margin-top: 4px;
}

.info-row {
    gap: 15px;
}

.info-row span {
    display: flex;

    align-items: center;

    gap: 8px;
}

.info-row span i {
    width: 16px;

    color: #64748b;

    font-size: 11px;

    text-align: center;
}

.info-row strong {
    text-align: right;

    font-size: 12px;
}

.available-text {
    color: var(--green) !important;
}


/* =========================================
   QUICK STATS
========================================= */

.quick-stats {
    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 8px;

    margin-top: 22px;
}

.quick-stats > div {
    text-align: center;

    padding: 13px 6px;

    border-radius: 12px;

    background: rgba(255,255,255,0.035);

    border: 1px solid var(--line);
}

.quick-stats strong {
    display: block;

    color: var(--text);

    font-size: 17px;

    font-weight: 800;
}

.quick-stats span {
    display: block;

    color: var(--muted);

    font-size: 9px;

    margin-top: 2px;
}


/* =========================================
   PROFILE CTA
========================================= */

.profile-cta {
    display: flex;

    align-items: center;

    justify-content: space-between;

    margin-top: 14px;

    padding: 13px 15px;

    border-radius: 12px;

    background:
        linear-gradient(
            135deg,
            rgba(139,92,246,.13),
            rgba(59,130,246,.10)
        );

    border:
        1px solid rgba(139,92,246,.22);

    color: var(--text);

    font-size: 12px;

    font-weight: 600;

    transition: .3s ease;
}

.profile-cta i {
    color: #a78bfa;

    transition: .3s ease;
}

.profile-cta:hover {
    transform: translateY(-2px);

    border-color:
        rgba(139,92,246,.45);
}

.profile-cta:hover i {
    transform: translateX(4px);
}


/* =========================================
   HERO RESPONSIVE
========================================= */

@media (max-width: 900px) {

    .hero-main {
        padding: 38px 28px;
    }

    .hero-bottom {
        gap: 14px;
    }

}


@media (max-width: 600px) {

    .hero-main {
        padding: 30px 22px;
    }

    .hero-highlights {
        flex-direction: column;
    }

    .hero-highlights span {
        width: 100%;
    }

    .hero-bottom {
        align-items: flex-start;
        flex-direction: column;
        gap: 10px;
    }

    .quick-stats strong {
        font-size: 15px;
    }

}




















/* =========================================
   QUICK STATS
========================================= */

.quick-stats-section {
    padding-top: 5px;
    padding-bottom: 35px;
}

.quick-stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 15px;
}

.stat-card {
    display: flex;
    align-items: center;
    gap: 14px;

    padding: 20px;

    background: rgba(30, 41, 59, 0.65);

    border: 1px solid var(--line);

    border-radius: 16px;

    transition: all .3s ease;
}

.stat-card:hover {
    transform: translateY(-4px);

    border-color: rgba(139, 92, 246, .35);

    background: rgba(30, 41, 59, .9);

    box-shadow: 0 12px 30px rgba(0,0,0,.20);
}

.stat-icon {
    width: 44px;
    height: 44px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 12px;

    background: rgba(139, 92, 246, .10);

    border: 1px solid rgba(139, 92, 246, .20);

    color: #a78bfa;

    font-size: 17px;
}

.stat-card strong {
    display: block;

    color: var(--text);

    font-size: 20px;

    font-weight: 800;

    line-height: 1.2;
}

.stat-card span {
    display: block;

    margin-top: 3px;

    color: var(--muted);

    font-size: 11px;

    font-weight: 500;
}


/* MOBILE */

@media(max-width: 800px) {

    .quick-stats {
        grid-template-columns: repeat(2, 1fr);
    }

}

@media(max-width: 480px) {

    .quick-stats {
        grid-template-columns: 1fr;
    }

}


</style>


<div class="home-page">

    <!-- =========================================
         HERO SECTION
    ========================================== -->

    <div class="hero-wrap">

        <!-- =====================================
             LEFT HERO
        ====================================== -->

        <div class="card-big hero-main">

            <!-- Availability Badge -->
            <div class="badge">
                <span class="dot"></span>
                Available for Full Stack / Freelance roles
            </div>


            <!-- Main Heading -->
            <h1 class="hero-title">

                Full Stack Developer building
                <span>modern & scalable web applications.</span>

            </h1>


            <!-- Description -->
            <p class="hero-desc">

                I'm <b>Afridi Ansari</b>, a Full Stack Developer from
                Nashik, Maharashtra.

                I build practical and production-ready web applications
                using

                <b>PHP, CodeIgniter, Laravel, MySQL, JavaScript</b>
                and REST APIs.

            </p>


            <!-- Small Highlight -->
            <div class="hero-highlights">

                <span>
                    <i class="fa-solid fa-code"></i>
                    Backend Development
                </span>

                <span>
                    <i class="fa-solid fa-database"></i>
                    Database & APIs
                </span>

                <span>
                    <i class="fa-solid fa-layer-group"></i>
                    ERP Applications
                </span>

            </div>


            <!-- Buttons -->
            <div class="hero-btns">

                <a
                    class="btn-p primary"
                    href="<?= site_url('home/contact') ?>"
                >
                    <i class="fa-solid fa-paper-plane"></i>
                    Hire / Message Me
                </a>


                <a
                    class="btn-p dark"
                    href="<?= site_url('home/projects') ?>"
                >
                    <i class="fa-solid fa-folder-open"></i>
                    View Projects
                </a>


                <a
                    class="btn-p dark"
                    href="mailto:afridiansari986@gmail.com"
                >
                    <i class="fa-solid fa-envelope"></i>
                    Email Me
                </a>


                <a
                    class="btn-p dark"
                    href="https://linkedin.com"
                    target="_blank"
                    rel="noopener"
                >
                    <i class="fa-brands fa-linkedin"></i>
                    LinkedIn
                </a>

            </div>


            <!-- Education / Profile Note -->
            <div class="hero-bottom">

                <div>
                    <i class="fa-solid fa-graduation-cap"></i>

                    <span>
                        BCA Graduate
                    </span>
                </div>

                <div>
                    <i class="fa-solid fa-star"></i>

                    <span>
                        7.41 CGPA
                    </span>
                </div>

                <div>
                    <i class="fa-solid fa-location-dot"></i>

                    <span>
                        Nashik, India
                    </span>
                </div>

            </div>

        </div>


        <!-- =====================================
             RIGHT PROFILE CARD
        ====================================== -->

        <div class="profile-card">

            <!-- Profile Header -->

            <div class="profile-top">

                <div class="profile-image-wrap">

                    <img
                        src="<?= base_url('assets/profile.jpg.jpeg') ?>"
                        alt="Afridi Ansari"
                    >

                    <span class="profile-online"></span>

                </div>


                <div class="profile-name">

                    <h3>Afridi Ansari</h3>

                    <p>
                        Full Stack Developer
                    </p>

                    <small>
                        <i class="fa-solid fa-location-dot"></i>
                        Nashik, India
                    </small>

                </div>


                <div class="open-badge">

                    <span></span>

                    Open to
                    <br>
                    Work

                </div>

            </div>


            <!-- Divider -->

            <div class="profile-divider"></div>


            <!-- Technology Heading -->

            <div class="profile-label">

                <span>TECHNOLOGIES</span>

                <i class="fa-solid fa-code"></i>

            </div>


            <!-- Technology Tags -->

            <div class="tags">

                <span>PHP</span>
                <span>CodeIgniter</span>
                <span>Laravel</span>
                <span>MySQL</span>
                <span>JavaScript</span>
                <span>Bootstrap</span>

            </div>


            <!-- Profile Details -->

            <div class="profile-details">

                <div class="info-row">

                    <span>
                        <i class="fa-solid fa-briefcase"></i>
                        Experience
                    </span>

                    <strong>
                        Fresher / 0–1 yr
                    </strong>

                </div>


                <div class="info-row">

                    <span>
                        <i class="fa-solid fa-bullseye"></i>
                        Specialization
                    </span>

                    <strong>
                        ERP + Full Stack
                    </strong>

                </div>


                <div class="info-row">

                    <span>
                        <i class="fa-solid fa-bolt"></i>
                        Availability
                    </span>

                    <strong class="available-text">
                        Immediate
                    </strong>

                </div>


                <div class="info-row">

                    <span>
                        <i class="fa-solid fa-envelope"></i>
                        Contact
                    </span>

                    <strong>
                        Email / LinkedIn
                    </strong>

                </div>

            </div>


            <!-- Quick Stats -->

            <div class="quick-stats">

                <div>

                    <strong>6+</strong>

                    <span>
                        Projects
                    </span>

                </div>


                <div>

                    <strong>6+</strong>

                    <span>
                        Technologies
                    </span>

                </div>


                <div>

                    <strong>100%</strong>

                    <span>
                        Commitment
                    </span>

                </div>

            </div>


            <!-- Profile CTA -->

            <a
                href="<?= site_url('home/contact') ?>"
                class="profile-cta"
            >

                <span>
                    Let's work together
                </span>

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>

    </div>








<!-- =========================================
     QUICK STATS
========================================= -->

<div class="section quick-stats-section">

    <div class="quick-stats">

        <!-- STAT 1 -->
        <div class="stat-card">

            <div class="stat-icon">
                <i class="fa-solid fa-code"></i>
            </div>

            <div>
                <strong>6+</strong>
                <span>Projects Built</span>
            </div>

        </div>


        <!-- STAT 2 -->
        <div class="stat-card">

            <div class="stat-icon">
                <i class="fa-solid fa-layer-group"></i>
            </div>

            <div>
                <strong>3+</strong>
                <span>Frameworks</span>
            </div>

        </div>


        <!-- STAT 3 -->
        <div class="stat-card">

            <div class="stat-icon">
                <i class="fa-solid fa-database"></i>
            </div>

            <div>
                <strong>MySQL</strong>
                <span>Database</span>
            </div>

        </div>


        <!-- STAT 4 -->
        <div class="stat-card">

            <div class="stat-icon">
                <i class="fa-solid fa-briefcase"></i>
            </div>

            <div>
                <strong>Open</strong>
                <span>For Opportunities</span>
            </div>

        </div>

    </div>

</div>






    <!-- =========================================
         SKILLS
    ========================================== -->

    
   <div class="skills-page">

    <div class="section-heading">

        <span class="section-label">
            WHAT I WORK WITH
        </span>

        <h1>
            Core <span>Skills</span>
        </h1>

        <p>
            Technologies and tools I use to build reliable,
            scalable and user-friendly web applications.
        </p>

    </div>

    <!-- Skills cards here -->

</div>




    <div class="grid-3">

        <!-- PHP -->
        <div class="mini-card skill-card">

            <div class="skill-icon">
                <i class="fa-brands fa-php"></i>
            </div>

            <h4>PHP & CodeIgniter</h4>

            <p>
                MVC architecture, routing, models, libraries,
                form validation, sessions and RBAC.
            </p>

            <div class="skill-tags">
                <span>PHP</span>
                <span>CI 3</span>
                <span>CI 4</span>
                <span>MVC</span>
            </div>

        </div>


        <!-- Laravel -->
        <div class="mini-card skill-card">

            <div class="skill-icon">
                <i class="fa-brands fa-laravel"></i>
            </div>

            <h4>Laravel & APIs</h4>

            <p>
                Eloquent ORM, Blade, middleware, authentication,
                REST APIs and backend development.
            </p>

            <div class="skill-tags">
                <span>Laravel</span>
                <span>REST API</span>
                <span>Blade</span>
                <span>Eloquent</span>
            </div>

        </div>


        <!-- Frontend -->
        <div class="mini-card skill-card">

            <div class="skill-icon">
                <i class="fa-solid fa-code"></i>
            </div>

            <h4>Frontend Development</h4>

            <p>
                Responsive and modern interfaces using HTML,
                CSS, Bootstrap, JavaScript and jQuery.
            </p>

            <div class="skill-tags">
                <span>HTML5</span>
                <span>CSS3</span>
                <span>Bootstrap</span>
                <span>JavaScript</span>
            </div>

        </div>


        <!-- Database -->
        <div class="mini-card skill-card">

            <div class="skill-icon">
                <i class="fa-solid fa-database"></i>
            </div>

            <h4>MySQL & Database</h4>

            <p>
                Database design, relationships, joins,
                indexing and query optimization.
            </p>

            <div class="skill-tags">
                <span>MySQL</span>
                <span>SQL</span>
                <span>Joins</span>
                <span>Database</span>
            </div>

        </div>


        <!-- Ecommerce -->
        <div class="mini-card skill-card">

            <div class="skill-icon">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>

            <h4>E-Commerce</h4>

            <p>
                Shopping cart, wishlist, payment integration,
                GST billing and admin panel development.
            </p>

            <div class="skill-tags">
                <span>Cart</span>
                <span>Razorpay</span>
                <span>GST</span>
                <span>Admin</span>
            </div>

        </div>


        <!-- Git -->
        <div class="mini-card skill-card">

            <div class="skill-icon">
                <i class="fa-brands fa-github"></i>
            </div>

            <h4>Git & Deployment</h4>

            <p>
                Version control, GitHub repositories,
                cPanel and live website deployment.
            </p>

            <div class="skill-tags">
                <span>Git</span>
                <span>GitHub</span>
                <span>cPanel</span>
                <span>Deployment</span>
            </div>

        </div>

    </div>

</div>


    <!-- =========================================
     FEATURED PROJECTS
========================================= -->

<div class="section" id="showcase">

    <div class="section-heading">
        <span class="section-label">MY WORK</span>

        <h2>Featured <span>Projects</span></h2>

        <p>
            A selection of projects that showcase my experience
            in backend development, databases, APIs and responsive UI.
        </p>
    </div>


    <div class="projects-grid">

        <!-- PROJECT 1 -->
        <div class="project-card">

            <div class="project-image">
                <div class="project-image-content">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>

                <span class="project-status">
                    Completed
                </span>
            </div>


            <div class="project-content">

                <div class="project-category">
                    E-COMMERCE
                </div>

                <h3>
                    E-Commerce Management System
                </h3>

                <p>
                    Full-stack e-commerce application with product
                    management, shopping cart, wishlist, orders,
                    billing and admin panel.
                </p>


                <div class="project-tech">
                    <span>PHP</span>
                    <span>CodeIgniter</span>
                    <span>MySQL</span>
                    <span>Bootstrap</span>
                    <span>JavaScript</span>
                </div>


                <div class="project-buttons">

                    <a href="#" class="project-btn primary">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        Live Demo
                    </a>

                    <a href="https://github.com/"
                       target="_blank"
                       class="project-btn">
                        <i class="fa-brands fa-github"></i>
                        GitHub
                    </a>

                </div>

            </div>

        </div>


        <!-- PROJECT 2 -->
        <div class="project-card">

            <div class="project-image">
                <div class="project-image-content">
                    <i class="fa-solid fa-building"></i>
                </div>

                <span class="project-status">
                    Completed
                </span>
            </div>


            <div class="project-content">

                <div class="project-category">
                    ERP / MANAGEMENT
                </div>

                <h3>
                    ERP Management System
                </h3>

                <p>
                    Business management system designed to manage
                    users, roles, records, reports and day-to-day
                    organizational operations.
                </p>


                <div class="project-tech">
                    <span>PHP</span>
                    <span>CodeIgniter</span>
                    <span>MySQL</span>
                    <span>jQuery</span>
                    <span>Bootstrap</span>
                </div>


                <div class="project-buttons">

                    <a href="#" class="project-btn primary">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        Live Demo
                    </a>

                    <a href="https://github.com/"
                       target="_blank"
                       class="project-btn">
                        <i class="fa-brands fa-github"></i>
                        GitHub
                    </a>

                </div>

            </div>

        </div>


        <!-- PROJECT 3 -->
        <div class="project-card">

            <div class="project-image">
                <div class="project-image-content">
                    <i class="fa-solid fa-server"></i>
                </div>

                <span class="project-status">
                    API
                </span>
            </div>


            <div class="project-content">

                <div class="project-category">
                    BACKEND / API
                </div>

                <h3>
                    REST API Application
                </h3>

                <p>
                    Backend API application with authentication,
                    CRUD operations, request validation and
                    structured JSON responses.
                </p>


                <div class="project-tech">
                    <span>Laravel</span>
                    <span>REST API</span>
                    <span>MySQL</span>
                    <span>Postman</span>
                </div>


                <div class="project-buttons">

                    <a href="#" class="project-btn primary">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        View Project
                    </a>

                    <a href="https://github.com/"
                       target="_blank"
                       class="project-btn">
                        <i class="fa-brands fa-github"></i>
                        GitHub
                    </a>

                </div>

            </div>




            

        </div>



        <!-- PROJECT 4 -->
<div class="project-card">

    <div class="project-image">
        <div class="project-image-content">
            <i class="fa-solid fa-boxes-stacked"></i>
        </div>

        <span class="project-status">
            Completed
        </span>
    </div>

    <div class="project-content">

        <div class="project-category">
            BUSINESS / INVENTORY
        </div>

        <h3>
            Business Management & Inventory System
        </h3>

        <p>
            Business management system for managing products,
            inventory, sales, records and day-to-day business
            operations through a centralized dashboard.
        </p>

        <div class="project-tech">
            <span>PHP</span>
            <span>CodeIgniter</span>
            <span>MySQL</span>
            <span>Bootstrap</span>
            <span>JavaScript</span>
        </div>

        <div class="project-buttons">

            <a href="#" class="project-btn primary">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                Live Demo
            </a>

            <a href="https://github.com/"
               target="_blank"
               class="project-btn">
                <i class="fa-brands fa-github"></i>
                GitHub
            </a>

        </div>

    </div>

</div>


<!-- PROJECT 5 -->
<div class="project-card">

    <div class="project-image">
        <div class="project-image-content">
            <i class="fa-solid fa-newspaper"></i>
        </div>

        <span class="project-status">
            CMS
        </span>
    </div>

    <div class="project-content">

        <div class="project-category">
            NEWS / CMS
        </div>

        <h3>
            NewsWave India – CMS News Portal
        </h3>

        <p>
            Dynamic news portal with CMS functionality for
            managing news articles, categories, content,
            users and publishing workflow.
        </p>

        <div class="project-tech">
            <span>PHP</span>
            <span>CodeIgniter</span>
            <span>MySQL</span>
            <span>Bootstrap</span>
            <span>jQuery</span>
        </div>

        <div class="project-buttons">

            <a href="#" class="project-btn primary">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                Live Demo
            </a>

            <a href="https://github.com/"
               target="_blank"
               class="project-btn">
                <i class="fa-brands fa-github"></i>
                GitHub
            </a>

        </div>

    </div>

</div>


<!-- PROJECT 6 -->
<div class="project-card">

    <div class="project-image">
        <div class="project-image-content">
            <i class="fa-solid fa-shirt"></i>
        </div>

        <span class="project-status">
            E-COMMERCE
        </span>
    </div>

    <div class="project-content">

        <div class="project-category">
            FASHION / E-COMMERCE
        </div>

        <h3>
            Premium Sarees & Lehenga
        </h3>

        <p>
            E-commerce platform for premium sarees and lehengas
            with product catalog, shopping cart, wishlist,
            order management and customer-focused UI.
        </p>

        <div class="project-tech">
            <span>PHP</span>
            <span>Laravel</span>
            <span>MySQL</span>
            <span>Bootstrap</span>
            <span>JavaScript</span>
        </div>

        <div class="project-buttons">

            <a href="#" class="project-btn primary">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                Live Demo
            </a>

            <a href="https://github.com/"
               target="_blank"
               class="project-btn">
                <i class="fa-brands fa-github"></i>
                GitHub
            </a>

        </div>

    </div>

</div>

    </div>



    


    <!-- PROJECT VIDEO -->

    <div class="project-video">

        <div class="video-heading">

            <div>
                <span class="section-label">
                    PROJECT WALKTHROUGH
                </span>

                <h3>
                    See My Development Work
                </h3>
            </div>

            <i class="fa-solid fa-play"></i>

        </div>


        <video controls>
            <source
                src="<?= base_url('assets/promo-video.mp4.mp4') ?>"
                type="video/mp4"
            >

            Your browser does not support the video tag.
        </video>

    </div>

</div>


<?php $this->load->view('layout/footer'); ?>