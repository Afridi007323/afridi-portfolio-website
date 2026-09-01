<style>
.resume-page{max-width:1000px;margin:0 auto;padding:20px}
.back-btn{display:inline-flex;align-items:center;gap:8px;padding:10px 20px;background:#151c30;border:1px solid rgba(255,255,255,0.1);border-radius:30px;color:#e2e8f0;margin-bottom:20px;text-decoration:none;font-weight:600}
.pdf-wrap{background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 20px 60px rgba(0,0,0,0.4);height:calc(100vh - 180px);}
.pdf-wrap iframe{width:100%;height:100%;border:none;}
.resume-actions{text-align:center;margin-top:20px;display:flex;gap:12px;justify-content:center}
.btn-down{padding:12px 26px;border-radius:12px;background:linear-gradient(135deg,#8b5cf6,#3b82f6);color:#fff;text-decoration:none;font-weight:700}
.btn-view{padding:12px 26px;border-radius:12px;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.1);color:#fff;text-decoration:none;font-weight:600}
</style>

<div class="resume-page">
  <a href="<?= base_url() ?>" class="back-btn">← Back to Portfolio</a>

  <div class="pdf-wrap">
    <!-- PDF yahan full dikhega -->
    <iframe src="<?= base_url('assets/resume.pdf') ?>#toolbar=0&navpanes=0" title="Resume"></iframe>
  </div>

  <div class="resume-actions">
    <a href="<?= base_url('assets/resume.pdf') ?>" target="_blank" class="btn-view">Open in New Tab</a>
    <a href="<?= base_url('assets/resume.pdf') ?>" download class="btn-down">Download PDF</a>
  </div>
</div>