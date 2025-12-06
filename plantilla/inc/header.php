<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
if(empty($_SESSION['user'])) {
  header('Location: /plantilla/login.php'); exit;
}
$user = $_SESSION['user'];
?>
<nav class="topbar-dashboard d-flex align-items-center px-3">
  <div class="d-flex align-items-center gap-3">
    <img src="/plantilla/img/logoMaya.jpg" alt="logo" class="topbar-logo">
    <div class="brand-text">
      <span class="brand-name">Unión Majomut</span>
      <small class="brand-sub">SiCert-SCCM</small>
    </div>
    <button class="btn btn-sm btn-light d-lg-none ms-3" id="btnToggleSidebar" aria-label="Toggle menu">
      <i class="fa fa-bars"></i>
    </button>
  </div>

  <div class="ms-auto d-flex align-items-center gap-3">
    <div class="user-info small text-nowrap">
      <i class="fa fa-user-circle me-1"></i>
      <?= htmlspecialchars($user['username'] ?? 'usuario') ?> &nbsp; - &nbsp; <span class="text-muted">Tipo: <?= htmlspecialchars($user['role'] ?? 'USER') ?></span>
    </div>

    <a href="/plantilla/logout.php" class="btn btn-danger btn-sm rounded-pill"><i class="fa fa-sign-out-alt me-1"></i> Cerrar Sesión</a>
  </div>
</nav>
