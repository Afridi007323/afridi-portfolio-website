<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('layout/header'); ?>

<!-- =========================================
     STUDENT FEE ERP - PROJECT DETAILS
========================================= -->

<section class="project-details-page">

    <!-- Hero -->
    <div class="project-details-hero">

        <span class="project-details-category">
            FEES MANAGEMENT / ERP
        </span>

        <h1>
            Student Fee Management ERP
        </h1>

        <p>
            A role-based school fee management ERP designed to manage
            students, classes, fee collection, payment history, receipts,
            reports and administrative operations through separate
            Admin and Student portals.
        </p>

        <div class="project-details-actions">

            <a href="https://studenthub2026.great-site.net" class="project-btn primary">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                Live Demo
            </a>

             <a href="https://github.com/Afridi007323/fees-erp-system-laravel" target="_blank" class="project-btn">
    <i class="fa-brands fa-github"></i> GitHub
</a>
          <a href="#project-video" class="project-btn">
    <i class="fa-solid fa-play"></i>
    Video Demo
</a>






            

        </div>

    </div>


    <!-- Technology -->
    <div class="project-details-section">

        <span class="section-label">
            TECHNOLOGY
        </span>

        <h2>
            Technologies Used
        </h2>

        <div class="project-tech large">

            <span>Laravel</span>
            <span>PHP</span>
            <span>MySQL</span>
            <span>Blade</span>
            <span>Tailwind CSS</span>
            <span>JavaScript</span>

        </div>

    </div>


    <!-- Overview -->
    <div class="project-details-section">

        <span class="section-label">
            PROJECT OVERVIEW
        </span>

        <h2>
            About the Project
        </h2>

        <p>
            This Student Fee Management ERP is a role-based web application
            developed to simplify student management, fee tracking,
            payment collection and reporting for educational institutions.
        </p>

        <p>
            The system provides separate functionality for administrators
            and students. Administrators can manage students, classes,
            fees, payments and reports, while students can access their
            own academic information, fee details, payment history and
            receipts.
        </p>

    </div>


    <!-- Admin Features -->
    <div class="project-details-section">

        <span class="section-label">
            ADMIN PANEL
        </span>

        <h2>
            Admin Features
        </h2>

        <div class="feature-grid">

            <div class="feature-item">
                <i class="fa-solid fa-chart-line"></i>
                <div>
                    <h3>Admin Dashboard</h3>
                    <p>
                        Overview of students, fee collection,
                        pending fees and recent payments.
                    </p>
                </div>
            </div>

            <div class="feature-item">
                <i class="fa-solid fa-user-graduate"></i>
                <div>
                    <h3>Student Management</h3>
                    <p>
                        Add, manage and view student information
                        and fee details.
                    </p>
                </div>
            </div>

            <div class="feature-item">
                <i class="fa-solid fa-building-columns"></i>
                <div>
                    <h3>Class Management</h3>
                    <p>
                        Manage classes and view students
                        grouped by class.
                    </p>
                </div>
            </div>

            <div class="feature-item">
                <i class="fa-solid fa-money-bill-wave"></i>
                <div>
                    <h3>Fee Management</h3>
                    <p>
                        Manage fee structures, collections,
                        paid amounts and pending balances.
                    </p>
                </div>
            </div>

            <div class="feature-item">
                <i class="fa-solid fa-receipt"></i>
                <div>
                    <h3>Payment & Receipts</h3>
                    <p>
                        Track payments and generate
                        fee payment receipts.
                    </p>
                </div>
            </div>

            <div class="feature-item">
                <i class="fa-solid fa-chart-column"></i>
                <div>
                    <h3>Reports</h3>
                    <p>
                        Fee, student and class reports
                        for administrative analysis.
                    </p>
                </div>
            </div>

        </div>

    </div>


    <!-- Student Portal -->
    <div class="project-details-section">

        <span class="section-label">
            STUDENT PORTAL
        </span>

        <h2>
            Student Features
        </h2>

        <div class="feature-grid">

            <div class="feature-item">
                <i class="fa-solid fa-right-to-bracket"></i>
                <div>
                    <h3>Student Login</h3>
                    <p>
                        Secure login for accessing the
                        student portal.
                    </p>
                </div>
            </div>

            <div class="feature-item">
                <i class="fa-solid fa-gauge-high"></i>
                <div>
                    <h3>Student Dashboard</h3>
                    <p>
                        View total fee, paid amount,
                        pending amount and recent payments.
                    </p>
                </div>
            </div>

            <div class="feature-item">
                <i class="fa-solid fa-id-card"></i>
                <div>
                    <h3>Student Profile</h3>
                    <p>
                        View personal and academic
                        information.
                    </p>
                </div>
            </div>

            <div class="feature-item">
                <i class="fa-solid fa-wallet"></i>
                <div>
                    <h3>Fee Details</h3>
                    <p>
                        Students can view their total,
                        paid and pending fees.
                    </p>
                </div>
            </div>

            <div class="feature-item">
                <i class="fa-solid fa-clock-rotate-left"></i>
                <div>
                    <h3>Payment History</h3>
                    <p>
                        View previous fee payments
                        and transaction information.
                    </p>
                </div>
            </div>

            <div class="feature-item">
                <i class="fa-solid fa-file-invoice"></i>
                <div>
                    <h3>Fee Receipts</h3>
                    <p>
                        Access and download payment
                        receipts.
                    </p>
                </div>
            </div>

            

        </div>

    </div>


    <!-- Screenshots -->
    <div class="project-details-section">

        <span class="section-label">
            PROJECT SCREENSHOTS
        </span>

        <h2>
            Application Preview
        </h2>

        <!-- Screenshot 1 -->
       




        <div class="project-screenshot">

            <div class="screenshot-title">
                <h3>Student Login</h3>
                <p>
                    Student authentication interface.
                </p>
            </div>

            <img
                src="<?= base_url('assets/images/projects/fee-erp/student-login.png'); ?>"
                alt="Student Fee ERP Login"
            >

        </div>






        <!-- Screenshot 2 -->
        <div class="project-screenshot">

            <div class="screenshot-title">
                <h3>Student Dashboard</h3>
                <p>
                    Student overview showing fee status,
                    payments and academic information.
                </p>
            </div>

            <img
                src="<?= base_url('assets/images/projects/fee-erp/student-dashboard.png'); ?>"
                alt="Student Fee ERP Student Dashboard"
            >

        </div>


        <!-- Screenshot 3 -->
         <div class="project-screenshot">

            <div class="screenshot-title">
                <h3>Admin Dashboard</h3>
                <p>
                    Administrative overview of students,
                    payments and fee collection.
                </p>
            </div>

            <img
                src="<?= base_url('assets/images/projects/fee-erp/admin-dashboard.png'); ?>"
                alt="Student Fee ERP Admin Dashboard"
            >

        </div>


        <!-- Screenshot 4 -->
        <div class="project-screenshot">

            <div class="screenshot-title">
                <h3>Fee Report</h3>
                <p>
                    Administrative fee collection and
                    pending fee report.
                </p>
            </div>

            <img
                src="<?= base_url('assets/images/projects/fee-erp/fee-report.png'); ?>"
                alt="Student Fee ERP Fee Report"
            >

        </div>


        <!-- Screenshot 5 -->
        <div class="project-screenshot">

            <div class="screenshot-title">
                <h3>Payment History</h3>
                <p>
                    Payment records with amount,
                    date, mode and status.
                </p>
            </div>

            <img
                src="<?= base_url('assets/images/projects/fee-erp/payment-history.png'); ?>"
                alt="Student Fee ERP Payment History"
            >

        </div>


        <!-- Screenshot 6 -->
        <div class="project-screenshot">

            <div class="screenshot-title">
                <h3>Fee Receipt</h3>
                <p>
                    Generated payment receipt for
                    completed fee transactions.
                </p>
            </div>

            <img
                src="<?= base_url('assets/images/projects/fee-erp/receipt.png'); ?>"
                alt="Student Fee ERP Fee Receipt"
            >

        </div>


    <!-- Screenshot 7 -->
<div class="project-screenshot">

    <div class="screenshot-title">
        <h3>Payment Receipt Email</h3>
        <p>
            Automatically sends a payment confirmation and fee receipt
            to the student's registered email after a successful payment.
        </p>
    </div>

    <img
        src="<?= base_url('assets/images/projects/fee-erp/payment-receipt-email.png.png'); ?>"
        alt="Student Fee ERP Payment Receipt Email"
    >

</div>








<!-- PROJECT VIDEO -->

   

<div class="project-video" id="project-video">

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


    <!-- Development -->
    <div class="project-details-section">

        <span class="section-label">
            DEVELOPMENT
        </span>

        <h2>
            My Role
        </h2>

        <p>
            Designed and developed the application as a full-stack
            web project, including authentication, role-based access,
            database integration, student management, fee management,
            payment records, reports and responsive user interfaces.
        </p>

    </div>


    <!-- Bottom CTA -->
    <div class="project-details-cta">

        <h2>
            Explore the Student Fee Management ERP
        </h2>

        <p>
            View the live application or explore the source code.
        </p>

        <div class="project-details-actions">

            <a href="https://studenthub2026.great-site.net"
   class="project-btn primary"
   target="_blank"
   rel="noopener noreferrer">
    <i class="fa-solid fa-arrow-up-right-from-square"></i>
    Live Demo
</a>

             <a href="https://github.com/Afridi007323/fees-erp-system-laravel" target="_blank" class="project-btn">
    <i class="fa-brands fa-github"></i> GitHub
</a>

        </div>

    </div>

</section>

<?php $this->load->view('layout/footer'); ?>