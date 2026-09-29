
<?php $this->load->view('layout/header'); ?>

<style>
    .contact-page {
        max-width: 1200px;
        margin: 0 auto;
        padding: 70px 20px;
    }

    .contact-header {
        text-align: center;
        max-width: 700px;
        margin: 0 auto 55px;
    }

    .contact-header h1 {
        font-size: 48px;
        line-height: 1.15;
        margin-bottom: 16px;
    }

    .contact-header h1 span {
        color: var(--green);
    }

    .contact-header p {
        color: var(--muted);
        font-size: 16px;
        line-height: 1.7;
    }

    .contact-wrapper {
        display: grid;
        grid-template-columns: 0.85fr 1.35fr;
        gap: 30px;
        align-items: start;
    }

    /* LEFT SIDE */
    .contact-info {
        background: var(--card);
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: 18px;
        padding: 38px;
    }

    .contact-info h2 {
        font-size: 24px;
        margin-bottom: 12px;
    }

    .contact-info > p {
        color: var(--muted);
        font-size: 14px;
        line-height: 1.7;
        margin-bottom: 32px;
    }

    .contact-item {
        display: flex;
        gap: 16px;
        margin-bottom: 25px;
        align-items: flex-start;
    }

    .contact-icon {
        width: 44px;
        height: 44px;
        min-width: 44px;
        border-radius: 10px;
        background: rgba(16, 185, 129, 0.10);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
    }

    .contact-item small {
        display: block;
        color: var(--muted);
        font-size: 12px;
        margin-bottom: 5px;
    }

    .contact-item strong {
        display: block;
        color: var(--text);
        font-size: 14px;
        word-break: break-word;
    }

    .contact-social {
        border-top: 1px solid rgba(255,255,255,0.08);
        padding-top: 25px;
        margin-top: 30px;
    }

    .social-links {
        display: flex;
        gap: 10px;
        margin-top: 12px;
    }

    .social-links a {
        text-decoration: none;
        padding: 9px 15px;
        border-radius: 8px;
        border: 1px solid rgba(255,255,255,0.10);
        color: var(--text);
        font-size: 13px;
        transition: 0.2s;
    }

    .social-links a:hover {
        border-color: var(--green);
        color: var(--green);
    }

    /* FORM */
    .contact-form {
        background: var(--card);
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: 18px;
        padding: 40px;
    }

    .contact-form h2 {
        font-size: 24px;
        margin-bottom: 7px;
    }

    .form-subtitle {
        color: var(--muted);
        font-size: 14px;
        margin-bottom: 30px;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        color: var(--text);
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .form-group label span {
        color: var(--green);
    }

    .contact-form .input {
        width: 100%;
        box-sizing: border-box;
        padding: 13px 15px;
        border-radius: 9px;
        border: 1px solid rgba(255,255,255,0.12);
        background: rgba(255,255,255,0.03);
        color: var(--text);
        font-size: 14px;
        outline: none;
        transition: 0.2s;
    }

    .contact-form .input:focus {
        border-color: var(--green);
        box-shadow: 0 0 0 3px rgba(16,185,129,0.08);
    }

    .contact-form textarea {
        resize: vertical;
        min-height: 130px;
    }

    .form-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        margin-top: 8px;
    }

    .privacy-note {
        color: var(--muted);
        font-size: 11px;
        line-height: 1.5;
    }

    .send-btn {
        min-width: 150px;
        border: none;
        cursor: pointer;
    }

    .success-message {
        background: rgba(16, 185, 129, 0.10);
        border: 1px solid var(--green);
        color: var(--green);
        padding: 13px 16px;
        border-radius: 9px;
        margin-bottom: 25px;
        font-size: 14px;
        text-align: center;
    }

    @media (max-width: 800px) {
        .contact-page {
            padding: 45px 15px;
        }

        .contact-header h1 {
            font-size: 36px;
        }

        .contact-wrapper {
            grid-template-columns: 1fr;
        }

        .form-row {
            grid-template-columns: 1fr;
            gap: 0;
        }

        .contact-form,
        .contact-info {
            padding: 25px;
        }

        .form-footer {
            flex-direction: column;
            align-items: stretch;
        }

        .send-btn {
            width: 100%;
        }
    }















    .error-message {
    background: rgba(239, 68, 68, 0.08);
    border: 1px solid rgba(239, 68, 68, 0.30);
    color: #ef4444;

    padding: 12px 15px;
    border-radius: 8px;

    margin-bottom: 20px;

    font-size: 13px;
    line-height: 1.6;
}
</style>



<div class="contact-page">

    <!-- HEADER -->
    <div class="contact-header">
        <h1>Let's <span>Connect</span></h1>
        <p>
            Have a project in mind, a job opportunity, or just want to say hello?
            Feel free to reach out. I'll get back to you as soon as possible.
        </p>
    </div>

    <div class="contact-wrapper">

        <!-- CONTACT INFORMATION -->
        <div class="contact-info">

            <h2>Get in touch</h2>

            <p>
                I'm currently open to full-time opportunities, freelance projects,
                and interesting collaborations.
            </p>

            <!-- EMAIL -->
            <div class="contact-item">
                <div class="contact-icon">✉</div>

                <div>
                    <small>Email</small>
                    <strong>afridiansari986@gmail.com</strong>
                </div>
            </div>

            <!-- LOCATION -->
            <div class="contact-item">
                <div class="contact-icon">⌖</div>

                <div>
                    <small>Location</small>
                    <strong>Nashik, Maharashtra, India</strong>
                </div>
            </div>

            <!-- AVAILABILITY -->
            <div class="contact-item">
                <div class="contact-icon">✓</div>

                <div>
                    <small>Availability</small>
                    <strong>Open to Work</strong>
                </div>
            </div>

            <!-- SOCIAL -->
            <div class="contact-social">

                <small style="color: var(--muted); font-size: 12px;">
                    Connect with me
                </small>

                <div class="social-links">

                    <a href="https://linkedin.com" target="_blank">
                        LinkedIn
                    </a>

                    <a href="https://github.com" target="_blank">
                        GitHub
                    </a>

                </div>

            </div>

        </div>


        <!-- CONTACT FORM -->
        <div class="contact-form">

            <h2>Send a message</h2>

            <p class="form-subtitle">
                Fill out the form below and I'll get back to you shortly.
            </p>

            <!-- FLASH MESSAGE -->
           <?php if($this->session->flashdata('msg')): ?>

    <div id="successMessage" class="success-message">
        <?= $this->session->flashdata('msg') ?>
    </div>

    <script>
        setTimeout(function () {

            const message = document.getElementById('successMessage');

            if (message) {
                message.style.transition = 'opacity 0.4s ease';
                message.style.opacity = '0';

                setTimeout(function () {
                    message.remove();
                }, 400);
            }

        }, 5000);
    </script>

<?php endif; ?>


            <form action="<?= site_url('contact/send') ?>" method="POST">

                <!-- NAME + EMAIL -->
                <div class="form-row">

                    <div class="form-group">
                        <label>
                            Full Name <span>*</span>
                        </label>

                       <input
    type="text"
    name="name"
    class="input"
    placeholder="Your full name"
    required
    minlength="3"
    maxlength="100"
    pattern="[A-Za-z ]+"
    title="Name can contain only letters and spaces"
    oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '')"
>
                    </div>


                    <div class="form-group">
                        <label>
                            Email Address <span>*</span>
                        </label>

                        <input
    type="email"
    name="email"
    class="input"
    placeholder="you@example.com"
    required
    maxlength="150"
    title="Please enter a valid email address"
>
                    </div>

                </div>


                <!-- PHONE + SUBJECT -->
                <div class="form-row">

                    <div class="form-group">
                        <label>
                            Phone Number
                        </label>

                        <input
    type="tel"
    name="phone"
    class="input"
    placeholder="Enter your phone number"
    maxlength="10"
    pattern="[0-9]{10}"
    inputmode="numeric"
    title="Please enter exactly 10 digits"
    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)"
>
                    </div>


                    <div class="form-group">
                        <label>
                            Subject <span>*</span>
                        </label>

                        <input
            type="text"
            name="subject"
            class="input"
            placeholder="Job opportunity / Project"
            required
            minlength="3"
            maxlength="200"
        >
                    </div>

                </div>


                <!-- MESSAGE -->
                <div class="form-group">

                    <label>
                        Your Message <span>*</span>
                    </label>

                    <textarea
                        name="message"
                        class="input"
                        rows="6"
                        placeholder="Tell me about your project, opportunity, or how I can help..."
                        required
                    ></textarea>

                </div>


                <!-- FOOTER -->
                <div class="form-footer">

                    <div class="privacy-note">
                        Your information will only be used to respond<br>
                        to your message.
                    </div>

                    <button
                        type="submit"
                        class="btn-p primary send-btn"
                    >
                        Send Message →
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>




<?php if($this->session->flashdata('error')): ?>

    <div class="error-message" id="errorMessage">
        <?= $this->session->flashdata('error') ?>
    </div>

<?php endif; ?>


<?php $this->load->view('layout/footer'); ?>

